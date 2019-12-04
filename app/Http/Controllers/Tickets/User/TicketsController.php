<?php

namespace App\Http\Controllers\Tickets\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TicketRequest;
use App\Http\Resources\TicketResource;
use Illuminate\Support\Facades\Auth;
use App\Models\Tickets\Ticket;
use App\User;
use App\Models\Tickets\Status;

class TicketsController extends Controller
{
    private $ticket;
    private $status;
    private $user;

    function __construct(Ticket $ticket, Status $status) {
        $this->ticket = $ticket;
        $this->status = $status;

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();    
            return $next($request);
        });
    }

    public function index() {

        $tickets = $this->user->tickets()->latest()->take(5)->get();
        $assignedTickets = $this->user->isVendor ? $this->user->assignedTickets()->take(5)->get(): null;

        //get stats of all ticket statuses
        $stats = (new \App\Models\Tickets\Status)->getUserTicketsStatusStats($this->user->id, false);

        return view('tickets.summary', compact('tickets', 'assignedTickets', 'stats'));
    }

    /**
     * Returns all users's created tickets or tickets assigned to them (if request()->assigned_to_me is set)
     */
    public function list(Request $request) {
        $assignedToMe = $request->has('assigned_to_me')? true : false;
        $statuses = $this->status->get();

        $tickets = $assignedToMe ? $this->user->assignedTickets() : $this->user->tickets();

        if($request->has('sort')) {
            $tickets = $this->ticket->sortData($tickets, $request);
        }

        $tickets = $tickets->latest()->paginate(15);

        return view('tickets.list', compact('assignedToMe', 'tickets', 'statuses'));
    }

    public function create() {
        return view('tickets.new');
    }



    public function store(TicketRequest $request) {

        $requestData = $request->except(['ticket_owner', 'is_on_behalf', 'attachment']);
        $is_on_behalf = $request->has('is_on_behalf') && $request->is_on_behalf == "true";
        $requestData['user_id'] = $is_on_behalf ? $request->ticket_owner : $this->user->id;
        $requestData['is_approved'] = !$is_on_behalf; //not approved as long as it is created on behalf of selected user.
        $requestData['ticket_id'] = $this->ticket->generateTicketId();

        if($request->file('attachment')) {
            $file = Storage::putFile('attachments', $request->file('attachment'));
            $requestData['attachment'] = $file;
        }

        $ticket = $this->ticket->create($requestData);

        //If user is creating on behalf of someone else, Assign ticket to self. But ticket would be pending until approved. Once approved. Set ticket to open.

        if($is_on_behalf) {
            $ticket->assignTicket($this->user->id, $request->is_on_behalf);            
        } else {
            $ticket->assignTicketToAvailableStaff();
        }



        return response([
                            'status' => true, 
                            'message' => "Ticket successfully created! Your ticket ID is #$ticket->ticket_id", 
                            'data' =>  new TicketResource($ticket),
                            'redirectsTo' => route('tickets.show', ['ticket' => $ticket->ticket_id]), 
                            ]);
    }

    public function show(Request $request, Ticket $ticket) {

        //Check if this ticket is assigned to current user
        $assignedToMe = $ticket->assignedTo && ($ticket->assignedTo->id == $this->user->id);
        //Check if ticket is owned by current user
        $isOwnedByMe = $ticket->user_id == $this->user->id;

        if($isOwnedByMe && $request->has('approve_ticket')) {
            $this->approveTicket($ticket);
        }

        if($request->has('solved') && $isOwnedByMe) {
            $this->markAsSolved($ticket);
        }

        $conversations = $ticket->conversations()->latest()->paginate(10);
        $statuses = $assignedToMe ? $this->status->where('is_staff_assignable', 1)->get() : [];

        return view('tickets.show', compact('ticket', 'assignedToMe', 'conversations', 'statuses', 'isOwnedByMe'));
    }

    public function apiList($count = 'paginate') {

        switch (true) {
            case $count == 'all':
                $tickets = $this->ticket->get();
                break;
            case $count > 0:
                $tickets = $this->ticket->take($count)->get();
                break;
            
            default:
                $tickets = $this->ticket->paginate(20);
                break;
        }

        return response(['status' => true, 'data' => $tickets]);
    }


    /** 
     * Process reassignment of assigned pending tickets to another staff
     */
    public function reassignPendingTickets() {
        $unassignedTickets = $this->ticket->getUnassignedTickets();

        if($unassignedTickets->count() > 0) {
            foreach($unassignedTickets as $ticket) {
                $this->ticket->assignTicketToAvailableStaff();
            }
        }
    }

    private function approveTicket($ticket) {
        if($this->user->id != $ticket->user_id || $ticket->is_approved) {
            return redirect()->back()->withMessage('Sorry, you can only approve your own unapproved tickets')->withAlertClass('alert-danger');
        }
        
        $ticket->update(['is_approved' => 1]);

        return redirect()->back()->withMessage('Ticket approved successfully!')->withAlertClass('alert-success');
    }

    private function markAsSolved($ticket) {
        if(!$ticket->is_approved)
            return redirect()->back()->withMessage('Only an approved ticket can be marked as solved')->withAlertClass('alert-danger');

        if($ticket->status->name == 'Pending')
            return redirect()->back()->withMessage('Sorry, you cannot mark a pending ticket as solved')->withAlertClass('alert-danger');


        $status_id = $this->status->findStatus('Solved');
        $ticket->update(['status_id' => $status_id, 'solved_at' => \Carbon\Carbon::now(), 'solved_by' => 'vendor']);

        return redirect()->route('vendor.tickets.show', ['ticket_id' => $ticket->ticket_id])->withMessage('Ticket successfully updated!')->withAlertClass('alert-success');

    }

}
