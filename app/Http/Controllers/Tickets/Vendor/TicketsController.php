<?php

namespace App\Http\Controllers\Tickets\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\TicketResource;
use Illuminate\Support\Facades\Auth;
use App\Models\Tickets\Ticket;
use App\User;
use App\Models\Tickets\Status;
use Illuminate\Database\Eloquent\Collection;

class TicketsController extends Controller
{
    private $ticket;
    private $status;
    private $user;

    function __construct(Ticket $ticket, Status $status) {

        $this->ticket = $ticket;
        $this->status = $status;

        $this->middleware(function ($request, $next) use ($ticket, $status) {
            $this->user = Auth::guard('vendor')->user();

            return $next($request);
        });
    }

    public function index() {

        $tickets = $this->user->assignedTickets()->latest()->take(5)->get();

        //get stats of all ticket statuses
        $stats = (new \App\Models\Tickets\Status)->getUserTicketsStatusStats($this->user->id, true);

        return view('tickets.vendor.summary', compact('tickets', 'stats'));
    }


    /**
     * Returns all tickets assigned to vendor
     */
    public function list(Request $request) {

        $hasTeamLead = $this->user->unit->unit->department->team_lead && ($this->user->unit->unit->department->team_lead->id == $this->user->id);

        if($request->has('department') && $hasTeamLead) {
            //Get all tickets in that department
            $tickets = $this->user->unit->unit->department->tickets();
        } else {
            $tickets = $this->user->assignedTickets();
        }
        $statuses = $this->status->get();

        if($request->has('sort')) {
            $tickets = $this->ticket->sortData($tickets, $request);
        } else {
            //Display only tickets that are not closed
            $tickets =  $tickets->whereHas('status', function($query) {
                $query->where('name' , '!=', 'Closed');
            });
        }


        $tickets = $tickets->latest()->paginate(15);

        return view('tickets.vendor.list', compact('tickets', 'statuses'));
    }


    public function show(Request $request, Ticket $ticket) {

        $user = $request->user();

        //Check if this ticket is assigned to current user
        $assignedToMe = $ticket->assignedTo->id == $user->id;
        $isOwnedByMe = false;


        if($request->has('solved') && $assignedToMe) {
            $this->markAsSolved($ticket);
        }

        if($request->has('reassign')) {
            if($this->processReassignment($ticket->unit->team_lead->id, $ticket)) {
                return redirect()->route('tickets.vendor.show', ['ticket_id' => $ticket->ticket_id])->withMessage('Ticket reassigned successfully!')->withAlertClass('alert-success');
            }
        }

        if($ticket->unit->team_lead ||  $ticket->unit->department->team_lead) {
            $isTeamLead = in_array($this->user->id, [$ticket->unit->team_lead->id, $ticket->unit->department->team_lead->id]);
        } else {
            $isTeamLead = false;
        }

        $assignmentLog = $ticket->allAssignedTo()->latest()->get();
        $units = $this->user->unit ? \App\Models\DepartmentUnit::where('department_id', $this->user->unit->unit->department->id)->with('categories', 'staff')->get() : new Collection();
        $unitsJson =  $units->toJson();

        $conversations = $ticket->conversations()->latest()->paginate(10);


        return view('tickets.vendor.show', compact('ticket', 'assignedToMe', 'conversations', 'isOwnedByMe', 'canReassign', 'assignmentLog', 'units', 'unitsJson', 'isTeamLead'));
    }

    public function create() {
        $users = User::all();

        return view('tickets.vendor.new', compact('users'));
    }

    public function store(TicketRequest $request) {

        $requestData = $request->except(['ticket_owner', 'is_on_behalf', 'attachment']);
        $is_on_behalf = true;
        $requestData['user_id'] = $request->ticket_owner;
        $requestData['is_approved'] = false; //not approved as long as it is created on behalf of selected user.
        $requestData['ticket_id'] = $this->ticket->generateTicketId();

        if($request->file('attachment')) {
            $file = Storage::putFile('attachments', $request->file('attachment'));
            $requestData['attachment'] = $file;
        }

        $ticket = $this->ticket->create($requestData);
        $ticket->assignTicket($this->user->id, true);


        return response([
                            'status' => true,
                            'message' => "Ticket successfully created! The ticket ID is #$ticket->ticket_id",
                            'data' =>  new TicketResource($ticket),
                            'redirectsTo' => route('tickets.vendor.show', ['ticket' => $ticket->ticket_id]),
                            ]);
    }


    public function reassign(Request $request, Ticket $ticket) {

        if(!$request->staff_id)
            return response(['status' => false, 'errors' => 'Please specify a vendor to re-assign ticket to!'], 422);

        $this->processReassignment($request->staff_id, $ticket);

        return response(['status' => true, 'message' => 'Ticket status updated successfully!']);
    }



    public function processReassignment($vendor_id, Ticket $ticket) {


        $ticket->update(['assigned_to' => $vendor_id]);
        $ticket->allAssignedTo()->create([
            'user_id' => $vendor_id
        ]);

        return true;
    }

    private function markAsSolved($ticket) {
        if(!$ticket->is_approved)
            return redirect()->back()->withMessage('Only an approved ticket can be marked as solved')->withAlertClass('alert-danger');

        if($ticket->status->name == 'Pending')
            return redirect()->back()->withMessage('Sorry, you cannot mark a pending ticket as solved')->withAlertClass('alert-danger');


        $status_id = $this->status->findStatus('Solved');
        $ticket->update(['status_id' => $status_id, 'solved_at' => \Carbon\Carbon::now()]);

        return redirect()->back()->withMessage('Ticket successfully updated!')->withAlertClass('alert-success');

    }



}
