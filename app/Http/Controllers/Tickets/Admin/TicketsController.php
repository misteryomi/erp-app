<?php

namespace App\Http\Controllers\Tickets\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Tickets\Ticket;
use App\Models\Tickets\Status;

class TicketsController extends Controller
{

    private $ticket;
    private $user;

    function __construct(Ticket $ticket, Status $status) {
        $this->ticket = $ticket;
        $this->status = $status;
    }


    public function list(Request $request) {

        //If user searches for a ticket, redirect to show ticket
        if($request->ticket_id) {
            return redirect()->route('tickets.admin.tickets.show', ['ticket_id' => $request->ticket_id]);
        }

        $tickets = $this->ticket->latest();

        if($request->has('sort')) {
            $tickets = $this->ticket->sortData($tickets, $request);
        }

        if($request->has('export')) {
            return $this->ticket->export($tickets->get());
        }

        $statuses = $this->status->get();
        $tickets = $tickets->paginate(15);

        return view('tickets.admin.tickets.list', compact('tickets', 'statuses'));
    }

    public function show(Ticket $ticket) {

        $conversations = $ticket->conversations()->latest()->paginate(10);
        $assignmentLog = $ticket->allAssignedTo()->latest()->get();

        return view('tickets.admin.tickets.show', compact('ticket', 'conversations', 'assignmentLog'));
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

}
