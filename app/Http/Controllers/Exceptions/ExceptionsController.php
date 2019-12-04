<?php

namespace App\Http\Controllers\Exceptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ExceptionRequest;
use App\Mail\NewException;
use App\Mail\ClosedException;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\Exceptions\Exception;
use App\Models\Department;
use App\User;

class ExceptionsController extends Controller
{
    private $exception;
    private $user;

    function __construct(Exception $exception) {
        $this->exception = $exception;

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();    
            return $next($request);
        });
    }

    public function index(Request $request) {


        $exceptions = $this->user->isGMD() ? $this->exception: $this->user->exceptions();
        // $assignedExceptions = $this->exception->where('assigned_to', $this->user->id)->take(5)->get();

        if($request->has('sort')) {
            $exceptions = $this->exception->sortData($exceptions, $request);
        } elseif($this->user->isGMD()) {
            $exceptions = $this->exceptions->GMDExceptions();
        }


        $exceptions = $exceptions->latest()->take(5)->get();

        // //get stats of all exception statuses
        $stats = $this->exception->getStats($this->user, false, $this->user->isGMD());

        return view('exceptions.summary', compact('exceptions', 'stats'));
    }

    /**
     * Returns all users's created exceptions or exceptions assigned to them (if request()->assigned_to_me is set)
     */
    public function list(Request $request) {
        $assignedToMe = !$request->has('supervisor') ? true : false;
        $statuses = $this->exception->getStatuses();
        $exceptions = $assignedToMe ? $this->user->exceptions() : $this->exception->supervisorExceptions($this->user);

        $stats = $this->exception->getStats($this->user, true);

        
        if($request->has('sort')) {
            $exceptions = $this->exception->sortData($exceptions, $request);
        } else {
            $exceptions =  $exceptions->where('status', '!=', 'CLOSED');
        }
            
        if($request->has('export') && $this->user->isExceptionAdmin()) {
            return $this->exception->export($exceptions->get());
        }

        if($request->has('display_all') && $this->user->isExceptionAdmin()) {
            if($request->has('sort')) {
                $exceptions = $this->exception->sortData($this->exception, $request);
            } else {
                $exceptions = $this->exception->where('status', '!=', 'CLOSED');
            }
        }

        $exceptions = $exceptions->latest()->paginate(15);

        return view('exceptions.list', compact('assignedToMe', 'exceptions', 'statuses', 'stats'));
    }

    public function create() {
        $departments = Department::all();
        $users = User::all();

        if(!auth()->user()->isExceptionAdmin()) {
            abort(404);
        }

        return view('exceptions.new', compact('departments', 'users'));
    }



    public function store(ExceptionRequest $request) {

        if(!auth()->user()->isExceptionAdmin()) {
            abort(404);
        }

        $requestData = $request->except('attachment');

        if($request->file('attachment')) {
            $file = Storage::putFile('exceptions', $request->file('attachment'));
            $requestData['attachment'] = $file;
        }
        $requestData['user_id'] = $this->user->id;
        $requestData['exception_id'] = $this->exception->generateExceptionId();

        $exception = $this->exception->create($requestData);

        if(!$exception) {
            return redirect()->back()
                ->withMessage("An unknown error occured. Please try again.")
                ->withAlertClass("alert-danger");
        }


        //Send mail here
       Mail::to($exception->assignedTo->email)->queue(new NewException($exception));    

        return redirect()->route('exceptions.list', ['display_all'])
        ->withMessage("Exception successfully created! Your exception ID is #$exception->exception_id")
        ->withAlertClass("alert-success");

    }

    public function show(Request $request, Exception $exception) {

        if(!$exception->canRespond()) {
            abort(404);
        }

        // dd($this->user);
        //Check if this exception is assigned to current user
        $assignedToMe = $exception->assignedTo && ($exception->assignedTo->id == $this->user->id);
        //Check if exception is owned by current user
        $isOwnedByMe = $exception->user_id == $this->user->id;

        if($isOwnedByMe && $request->has('approve_exception')) {
            $this->approveException($exception);
        }

        if($request->has('close') && $this->user->isExceptionAdmin()) {
            $this->markAsSolved($exception);
        }

        $conversations = $exception->conversations()->latest()->paginate(10);
//        $statuses = $assignedToMe ? $this->status->where('is_staff_assignable', 1)->get() : [];

        return view('exceptions.show', compact('exception', 'assignedToMe', 'conversations', 'statuses', 'isOwnedByMe'));
    }

    public function apiList($count = 'paginate') {

        switch (true) {
            case $count == 'all':
                $exceptions = $this->exception->get();
                break;
            case $count > 0:
                $exceptions = $this->exception->take($count)->get();
                break;
            
            default:
                $exceptions = $this->exception->paginate(20);
                break;
        }

        return response(['status' => true, 'data' => $exceptions]);
    }


    /** 
     * Process reassignment of assigned pending exceptions to another staff
     */
    public function reassignPendingExceptions() {
        $unassignedExceptions = $this->exception->getUnassignedExceptions();

        if($unassignedExceptions->count() > 0) {
            foreach($unassignedExceptions as $exception) {
                $this->exception->assignExceptionToAvailableStaff();
            }
        }
    }

    private function approveException($exception) {
        if($this->user->id != $exception->user_id || $exception->is_approved) {
            return redirect()->back()->withMessage('Sorry, you can only approve your own unapproved exceptions')->withAlertClass('alert-danger');
        }
        
        $exception->update(['is_approved' => 1]);

        return redirect()->back()->withMessage('Exception approved successfully!')->withAlertClass('alert-success');
    }

    private function markAsSolved($exception) {
        // if(!$exception->is_approved)
        //     return redirect()->back()->withMessage('Only an approved exception can be marked as solved')->withAlertClass('alert-danger');

        if($exception->status == 'PENDING')
            return redirect()->back()->withMessage('Sorry, you cannot mark a pending exception as solved')->withAlertClass('alert-danger');


        // $status_id = $this->status->findStatus('Solved');
        $exception->update(['status' => 'CLOSED', 'closed_at' => \Carbon\Carbon::now()]);
        Mail::to($exception->assignedTo->email)->queue(new ClosedException($exception));    

        return redirect()->back()->withMessage('Exception successfully updated!')->withAlertClass('alert-success');

    }

}
