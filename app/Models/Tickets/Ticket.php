<?php

namespace App\Models\Tickets;

use Illuminate\Database\Eloquent\Model;
use App\Exports\TicketsExport;
use Excel;
use \App\User;
use \App\Models\Department;

use \Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

use App\Mail\TicketCreatedOnBehalf;
use App\Mail\TicketAssigned;
use App\Mail\NotifyCharles;
use App\Models\DepartmentUnit;

class Ticket extends Model
{
    use \App\Models\ModelTrait;

    protected $guarded = [];

    /**
     * Override {id} binding with {ticket_id}
     * Doc here: https://laravel.com/docs/5.8/routing#route-model-binding
     */
    public function resolveRouteBinding($value)
    {
        return $this->where('ticket_id', $value)->first() ?? abort(404);
    }

    /**
     * Returns the time the ticket was set as solved (solve_at)
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
     * Returns owner of this ticket
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Returns category this ticket belongs to
     */
    public function category() {
        return $this->belongsTo(Category::class);
    }

    /**
     * Returns unit this ticket belongs to
     */
    public function unit() {
        return $this->belongsTo(DepartmentUnit::class);
    }

    /**
     * Returns department this ticket belongs
     */
    public function department() {
        return $this->belongsTo(Department::class);
    }

    /**
     * Returns this ticket's current status
     */
    public function status() {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }

    /**
     * Returns the conversations on current ticket
     */
    public function conversations() {
        return $this->hasMany(TicketConversation::class, 'ticket_id');
    }

    /**
     * Returns current User assigned to this ticket
     */
    public function assignedTo() {
        return $this->belongsTo(TicketVendor::class, 'assigned_to');
    }

    /**
     * Returns all users ever assigned to this ticket
     */
    public function allAssignedTo() {
        return $this->hasMany(TicketAssignedUser::class, 'ticket_id');
    }

    /**
     * Retrieve single assignment information
     */
    public function assignment($user_id) {
        return $this->allAssignedTo->where('user_id', $user_id)->first();
    }

    /**
     * Generate a ticket ID based on the number of tickets created for the current day.
     */
    public function generateTicketId() {
        //Get the count of tickets crreated today. Then increment by one. 1.
        $currentTicketTodayCount = Self::whereDate('created_at', Carbon::today())->count() + 1;

        //Convert the $currentTicketTodaCount to a minimum of 4 characters
        return Carbon::now()->format('dmY').sprintf("%04s", $currentTicketTodayCount); //If 0, generates 0000
    }


    /**
     * Assign ticket to the specified user.
     */
    public function assignTicket($user_id, $is_on_behalf = false) {

        $ticket = $this->allAssignedTo()->create(['user_id' => $user_id]);
        $this->update(['is_assigned' => true, 'assigned_to' => $user_id]);

        //If ticket is created on behalf of the staff.
        if($is_on_behalf) {
            //->cc($ticket->assignedTo->unit->group_email)
            (new \App\Notification)->queue('A new ticket has been created on your behalf', route('tickets.show', ['ticket' => $ticket->ticket_id]), $ticket->user->id);

            Mail::to($ticket->user->email)->queue(new TicketCreatedOnBehalf($this));

        } else {
            if($this->assignedTo) {
                (new \App\Notification)->queue('A new ticket has been assigned to you', route('tickets.show', ['ticket' => $ticket->ticket_id]), $this->assignedTo->id);
                Mail::to($ticket->user->email)->queue(new TicketAssigned($this));
            }
        }
    }


    /**
     * Retrieve assignable/available Staff and create an `assigned` record for specified ticket
     */
    public function assignTicketToAvailableStaff() {
        $assignableStaff = $this->unit->getAssignableStaff();

        if($assignableStaff) {
            $this->assignTicket($assignableStaff->id);
        }
     }


    /**
     * Get tickets that have the pending status and has been created 30 mins ago
     */
    public static function getUnassignedTickets() {
        $tickets = Self::where('is_assigned', 0)
                        ->where('status_id', 1)
                        ->where('is_approved', 1)
                        ->where('created_at', '<', Carbon::now()->subMinutes(30)->toDateTimeString())
                        ->get();

        return $tickets;
    }


    /**
     * Get tickets that have the assigned vendor hasn't responded to
     */
    public static function getUnrespondedToTickets($minutes = 30) {
        $tickets = Self::where('is_assigned', 1)
                        ->where('status_id', 1) //pending, means it hasn't been responded to
                        ->where('is_approved', 1)
                        ->where('created_at', '<', Carbon::now()->subMinutes($minutes)->toDateTimeString())
                        ->get();

        return $tickets;
    }

    /**
     * Notify assigned user of pending response to ticket
     */
    public static function remindAssignedUser() {
        $unrespondedToTickets = Self::getUnrespondedToTickets(15);

        if($unrespondedToTickets->count() > 0) {
            foreach($unrespondedToTickets as $ticket) {
                $vendor = $ticket->assignedTo;

                $message = "<p>Hello {$vendor->name}.<br/> You are yet to respond to the ticket ID <a href='{{ route('tickets.vendor.show', ['ticket_id'=> $ticket->ticket_id]) }}''>#{{$ticket->ticket_id}}</p>. <p>If further delayed, your unit head would be notified of your delayed response to this ticket. <br/><br/>Thank you</p>";
                $title = "Ticket #{$ticket->ticket_id} is yet to receive a response";
                send_email($vendor->name, $vendor->email, $message, route('tickets.vendor.show', ['ticket_id'=> $ticket->ticket_id]), $title);

            }
        }
    }

    /**
     * Notify department head of unresponded to tickets
     */
    public static function notifyDepartmentHead() {
        $unrespondedToTickets = Self::getUnrespondedToTickets();

        if($unrespondedToTickets->count() > 0) {
            foreach($unrespondedToTickets as $ticket) {
                $team_lead = $ticket->department->team_lead;
                $vendor = $ticket->assignedTo;

                $message = "<p>Dear {$team_lead->name}.<br/> {$vendor->name} is yet to respond to the ticket ID <a href='{{ route('tickets.vendor.show', ['ticket_id'=> $ticket->ticket_id]) }}''>#{{$ticket->ticket_id}}</p>. <p>To reassign this vendor, please log in on the admin dashboard or you could disregard this message.</p>";
                $title = "Ticket #{$ticket->ticket_id} is yet to receive a response";
                send_email($team_lead->name, $team_lead->email, $message, route('tickets.admin.tickets.show', ['ticket_id'=> $ticket->ticket_id]), $title);

            }
        }
    }

    /**
     * Process reassignment of assigned pending tickets to another staff
     */
    public static function reassignPendingTickets() {
        $unassignedTickets = Self::getUnassignedTickets();

        if($unassignedTickets->count() > 0) {
            foreach($unassignedTickets as $ticket) {
                $ticket->assignTicketToAvailableStaff();
            }
        }
    }


    /**
     * Display an 'approved' badge if ticket is created on behalf of staff and has been approved.
     */
    function displayApprovedBadge() {
        return $this->is_on_behalf ? $this->approvedBadge() : '';
    }

    /**
     * Display the status badge
     */
    public function statusBadge() {
        return "<label class='badge badge-{$this->status->css_class}'> &bullet; {$this->status->name}</label>";
    }

    /**
     * Returns the 'approved' status badge
     */
    public function approvedBadge() {

        if($this->is_approved) {
            $css_class = 'success';
            $text = 'Approved';
        } else {
            $css_class = 'danger';
            $text = 'Unapproved';
        }

        return "<label class='badge badge-{$css_class}'> &bullet; {$text}</label>";
    }


    /**
     * Returns the filtered/sorted data based on user's $request inputs
     * @param $tickets - Collection of tickets to be sorted
     * @param $request
     *
     * @return collection
     */

    public function sortData($tickets, $request) {

            //Sort by latest or oldest
        if($request->has('by')) {
            $tickets = $request->by == "Oldest" ? $tickets->oldest() : $tickets->latest();
        }

        if($request->has('status')) {
            $status = $request->status;

            switch ($status) {
                case 'All':
                    $tickets = $tickets;
                    break;
                case 'Approved':
                    $tickets = $tickets->where('is_approved', 1);
                    break;
                case 'Unapproved':
                    $tickets = $tickets->where('is_approved', 0);
                    break;

                default:
                    $tickets = $tickets->whereHas('status', function($query) use ($status) {
                                    $query->where('name', strtolower($status));
                                });
                    break;
            }
        }

        if($request->has('from')) {
            $tickets = $tickets->whereDate('created_at', '>=', $request->from);
        }

        if($request->has('to')) {
            $tickets = $tickets->whereDate('created_at', '<=', $request->to);
        }

        return $tickets;
    }


    /**
     * Returns a downloadable .xlsx tickets report file
     */

    public function export($tickets)
    {
        return Excel::download(new TicketsExport($tickets), "helpdesk_report_".\Carbon\Carbon::now().".xlsx");
    }

    public function storeReport($tickets) {
        $filename = "/reports/helpdesk_report_".\Carbon\Carbon::now()->format('Y-m-d-H:i:s').".xlsx";

        Excel::store(new TicketsExport($tickets), $filename);

        return $filename;
    }


    public function exportTickets($range = 7) {
        $to = Carbon::now();
        $from = $to->subDays($range);

        $tickets = $this->whereBetween('created_at', [$from, $to])->get();

        $file = $this->storeReport($tickets);

        return config('storage.url').Storage::url($file);

    }

    public function notifyCharles($email) {

        $url = $this->exportTickets();

        Mail::to($email)->queue(new NotifyCharles($url));
    }
}
