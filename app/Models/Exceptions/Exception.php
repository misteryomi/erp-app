<?php

namespace App\Models\Exceptions;

use Illuminate\Database\Eloquent\Model;
use App\Exports\ExceptionsExport;
use Excel;
use \App\User;

use \Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewException;
use App\Mail\EscalatedException;

class Exception extends Model
{
    use \App\Models\ModelTrait;
    
    protected $guarded = [];

    /**
     * Override {id} binding with {exception_id}
     * Doc here: https://laravel.com/docs/5.8/routing#route-model-binding
     */
    public function resolveRouteBinding($value)
    {
        return $this->where('exception_id', $value)->first() ?? abort(404);
    }

    /**
     * Returns the time the exception was set as solved (solve_at)
     */
    public function getSolvedAtAttribute($value) {
        if(!is_null($value)) {
            return $this->formatDate($value);
        }
        return null;
    }

    /**
     * Returns the URL to the attachment file if NOT NULL
     */
    public function getAttachmentAttribute($value) {
        if(!is_null($value)) {
            return config('storage.url').Storage::url($value);
        }        
        return null;
    }

    /**
     * Returns boolean if user is assigned the exception
     */
    public function getIsAssignedAttribute() {
        return auth()->user()->id == $this->assigned_to;
    }

    /**
     * Check if exception can be responded to
     */

     public function canRespond() {
       return ($this->assignedTo->id == auth()->user()->id) || auth()->user()->isExceptionAdmin() || $this->hodCanRespond() || $this->teamLeadCanRespond() || $this->GMDCanRespond();
     }


     public function teamLeadCanRespond() {
        return  ($this->team_lead_id === auth()->user()->id) && ($this->escalation_level >= 1);
     }

     public function hodCanRespond() {
        return  ($this->hod_id === auth()->user()->id) && ($this->escalation_level >= 2);
     }
 
     public function GMDCanRespond() {
        return auth()->user()->isGMd() &&  ($this->escalation_level == 3);
     }

     public function getStatuses() {
        return collect(['OPEN', 'CLOSED', 'REASSIGNED']);
    }

    /**
     * Returns owner of this exception
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Returns category this exception belongs to
     */
    public function category() {
        return $this->belongsTo(Category::class);
    }


    /**
     * Returns department this exception belongs
     */
    public function department() {
        return $this->belongsTo(\App\Models\Department::class);
    }

    /**
     * Returns the conversations on current exception
     */
    public function conversations() {
        return $this->hasMany(ExceptionConversation::class, 'exception_id');
    }

    /**
     * Returns current User assigned to this exception
     */
    public function assignedTo() {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    /**
     * Returns HOD/Supervisor assigned to this exception
     */
    public function supervisor() {
        if($this->escalation_level === 1) {
            return $this->team_lead();           
        } else {
            return $this->hod();
        }
    }
    
    public function team_lead() {
        return $this->belongsTo(User::class, 'team_lead_id');            
    }

    public function hod() {
        return $this->belongsTo(User::class, 'hod_id');
    }    
    
    public function escalationLevel() {
        switch($this->escalation_level) {
            case 1:
                $val = 'Team Lead';
                break;
            case 2:
                $val = 'Supervisor';
                break;
            case 3:
                $val = 'GMD';
                break;
                
            default:
                $val = 'Processor';
                break;
            
        }
            return $val;
    }
    


    public function GMDExceptions() {
        return $this->where('status', '!=', 'CLOSED')->where('escalation_level', 3);
    }


    public function supervisorExceptions($user) {
        
        return $this->where(function($query) use ($user) {
                $query->where('team_lead_id', $user->id)->where('escalation_level', '>=' , 1);
                })
                ->orWhere(function($query) use ($user)  {
                    $query->where('hod_id', $user->id)->where('escalation_level', '>=', 2);
                });
    }


    public function getDelayedExceptions() {
        return $this->where('status', '!=', 'CLOSED')
                    ->where('escalation_level', '<=', 2)
                    ->where('created_at', '<', Carbon::now()->addHours(4))
                    ->has('conversations', 0)
                    ->get();
                    // ->orWhereHas('conversations', function($query) {
                    //     $query->
                    // })
    }

    public function escalateDelayedExceptions() {
        $exceptions = $this->getDelayedExceptions();

        foreach($exceptions as $exception) {            
            $escalation_level = $exception->escalation_level + 1;
            $exception->update(['reassigned_at' => Carbon::now(), 'escalation_level' => $escalation_level]);

            //Send Mail to respective persons: New supervisor or GMD
            if($exception->escalation_level == 3) {
                Mail::to(env('GMD_EMAIL'))->queue(new EscalatedException($exception, 'Sir'));    
            } else {
                Mail::to($exception->supervisor->email)->queue(new EscalatedException($exception, $exception->supervisor->name));    
            }
        }
    }


    /**
     * Generate a exception ID based on the number of exceptions created for the current day. 
     */
    public function generateExceptionId() {
        //Get the count of exceptions crreated today. Then increment by one. 1.
        $currentExceptionTodayCount = Self::whereDate('created_at', Carbon::today())->count() + 1;

        //Convert the $currentExceptionTodaCount to a minimum of 4 characters
        return Carbon::now()->format('dmY').sprintf("%04s", $currentExceptionTodayCount); //If 0, generates 0000
    }


    /**
     * Get exceptions that have the assigned vendor hasn't responded to
     */
    public static function getUnrespondedToExceptions($minutes = 30) {
        $exceptions = Self::where('is_assigned', 1)
                        ->where('status_id', 1) //pending, means it hasn't been responded to
                        ->where('is_approved', 1)
                        ->where('created_at', '<', Carbon::now()->subMinutes($minutes)->toDateTimeString())
                        ->get();

        return $exceptions;
    }

    /** 
     * Notify assigned user of pending response to exception
     */
    public static function remindAssignedUser() {
        $unrespondedToExceptions = Self::getUnrespondedToExceptions(15);

        if($unrespondedToExceptions->count() > 0) {
            foreach($unrespondedToExceptions as $exception) {
                $vendor = $exception->assignedTo;

                $message = "<p>Hello {$vendor->name}.<br/> You are yet to respond to the exception ID <a href='{{ route('exceptions.vendor.show', ['exception_id'=> $exception->exception_id]) }}''>#{{$exception->exception_id}}</p>. <p>If further delayed, your unit head would be notified of your delayed response to this exception. <br/><br/>Thank you</p>";
                $title = "Exception #{$exception->exception_id} is yet to receive a response";
                send_email($vendor->name, $vendor->email, $message, route('exceptions.vendor.show', ['exception_id'=> $exception->exception_id]), $title);
    
            }
        }
    }

    /** 
     * Notify department head of unresponded to exceptions
     */
    public static function notifyDepartmentHead() {
        $unrespondedToExceptions = Self::getUnrespondedToExceptions();

        if($unrespondedToExceptions->count() > 0) {
            foreach($unrespondedToExceptions as $exception) {
                $team_lead = $exception->department->team_lead;
                $vendor = $exception->assignedTo;

                $message = "<p>Dear {$team_lead->name}.<br/> {$vendor->name} is yet to respond to the exception ID <a href='{{ route('exceptions.vendor.show', ['exception_id'=> $exception->exception_id]) }}''>#{{$exception->exception_id}}</p>. <p>To reassign this vendor, please log in on the admin dashboard or you could disregard this message.</p>";
                $title = "Exception #{$exception->exception_id} is yet to receive a response";
                send_email($team_lead->name, $team_lead->email, $message, route('exceptions.admin.exceptions.show', ['exception_id'=> $exception->exception_id]), $title);
    
            }
        }
    }

    /**
     * Display an 'approved' badge if exception is created on behalf of staff and has been approved. 
     */
    function displayApprovedBadge() {
        return $this->is_on_behalf ? $this->approvedBadge() : '';
    }

    public function close() {
        $this->exception->update(['status' => 'CLOSED']);
    }

    /**
     * Display the status badge
     */    
    public function statusBadge() {

        switch ($this->status) {
            case 'CLOSED':
                $css_class = 'dark';
                break;
            case 'REASSIGNED':
                $css_class = 'info';
                break;
            case 'OPEN':
                $css_class = 'primary';
                break;
            
            default:
                $css_class = 'primary';
                break;
        }

        return "<label class='badge badge-{$css_class}'> &bullet; {$this->status}</label>";
    }

    public function getStats($user, $isExceptionAdmin = false, $isGMD = false) {

        if($isGMD) {
            $exceptions = $this->GMDExceptions();
        } else {
            $exceptions = $this;            
        }

        $stats = [];

        if($isExceptionAdmin) {
            $stats['all'] = $exceptions->count();

            $stats['pending'] = $exceptions->where('status', '!=', 'CLOSED')->count();
    
            $stats['closed'] = $exceptions->where('status', 'CLOSED')->count();    
        } else {
            $query = $exceptions->where('assigned_to', $user->id);

            $stats['all'] = $query->count();

            $stats['pending'] = $query->where('status', '!=', 'CLOSED')->count();
    
            $stats['closed'] = $query->where('status', 'CLOSED')->count();    
        }

        $stats['supervisor'] = $this->supervisorExceptions($user)->count(); 
        // $exceptions->where('hod_id', $user->id)->count();

        return $stats;
    }
    
    

    /**
     * Returns the filtered/sorted data based on user's $request inputs
     * @param $exceptions - Collection of exceptions to be sorted
     * @param $request 
     * 
     * @return collection
     */

    public function sortData($exceptions, $request) {

            //Sort by latest or oldest
        if($request->has('by')) {
            $exceptions = $request->by == "Oldest" ? $exceptions->oldest() : $exceptions->latest();            
        }

        if($request->has('status')) {
            $status = $request->status;

            switch ($status) {
                case 'All':
                    $exceptions = $exceptions;
                    break;
                case 'Approved':
                    $exceptions = $exceptions->where('is_approved', 1);
                    break;
                case 'Unapproved':
                    $exceptions = $exceptions->where('is_approved', 0);
                    break;
                
                default:
                    $exceptions = $exceptions->where('status', strtoupper($status));
                    break;
            }
        }
        
        if($request->has('from')) {
            $exceptions = $exceptions->whereDate('created_at', '>=', $request->from);            
        }

        if($request->has('to')) {
            $exceptions = $exceptions->whereDate('created_at', '<=', $request->to);            
        }

        return $exceptions;
    }


    /**
     * Returns a downloadable .xlsx exceptions report file
     */

    public function export($exceptions) 
    {
        return Excel::download(new ExceptionsExport($exceptions), "exceptions_report_".\Carbon\Carbon::now().".xlsx");
    }


}
