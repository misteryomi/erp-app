<?php

namespace App\Http\Controllers\Tickets\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TicketConversationRequest;
use App\Http\Resources\TicketConversationResource;
use Illuminate\Support\Facades\Auth;

use App\Models\Tickets\Ticket;
use App\Models\Tickets\Status;
use App\Models\Tickets\TicketConversation;
use App\User;
use Illuminate\Support\Facades\Storage;

class TicketConversationsController extends Controller
{
    private $conversation;
    private $user;
    private $status;

    function __construct(TicketConversation $conversation, Status $status) {
        $this->conversation = $conversation;
        $this->status = $status;
        
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();    
            return $next($request);
        });
    }

    public function store(TicketConversationRequest $request, Ticket $ticket) {

        $isAgent = false;
        $redirectsTo = route('tickets.show', ['ticket' => $ticket->ticket_id]);
        $sender = $this->user;
        $receiver = $ticket->assignedTo;

        $response = $this->processStore($request, $ticket, $sender, $receiver, $isAgent, $redirectsTo);

        return $response;
    }


    public function processStore($request, $ticket, $sender, $receiver, $isAgent, $redirectsTo, $solved = false) {

        // if(!$ticket->is_assigned) {
        //     return response([
        //         'status' => false, 
        //         'message' => "Sorry, you cannot respond to an unassigned ticket", 
        //         ], 403);    
        // }

        if(!$ticket->is_approved) {
            return response([
                'status' => false, 
                'message' => "Sorry, you cannot respond to an unapproved ticket", 
                ], 403);    
        }

        $requestData = $request->except('attachment', 'solved');
        $requestData['sender_id'] = $sender->id;
        $requestData['receiver_id'] = $receiver->id;
        $requestData['ticket_id'] = $ticket->id;
        $requestData['is_agent'] = $isAgent;

        if($request->file('attachment')) {
            $file = Storage::putFile('attachments', $request->file('attachment'));
            $requestData['attachment'] = $file;
        }



        $message = $this->conversation->create($requestData);

        /**
         * process some updates on the status of the ticket
         * 
         */
        //If the assigned staff has once responded to this ticket and user responds, it is an open ticket, not pending.
        $userStatus = $ticket->conversations()->where('sender_id', $ticket->assignedTo->id)->count() > 0 ? 'Open' : 'Pending';
        $status = $isAgent ? 'Answered' : $userStatus;
        if($request->has('solved')) {
            $status = 'Solved';
        }
        
        $status_id = $this->status->findStatus($status);
        $ticket->update(['status_id' => $status_id]);
        $message->sendMail($receiver);
        
         return response([
            'status' => true, 
            'message' => "Ticket updated successfully!", 
            'data' =>  new TicketConversationResource($message),
            'redirectsTo' => $redirectsTo, 
            ]);

    }
}
