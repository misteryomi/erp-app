<?php

namespace App\Http\Controllers\Tickets\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TicketConversationRequest;
use App\Http\Resources\TicketConversationResource;
use Illuminate\Support\Facades\Auth;

use App\Models\Tickets\Ticket;
use App\Models\Tickets\Status;
use App\Models\Tickets\TicketConversation;
use App\User;

use App\Http\Controllers\Tickets\User\TicketConversationsController as TC;

class TicketConversationsController extends Controller
{
    private $conversation;
    private $user;
    private $status;

    function __construct(TicketConversation $conversation, Status $status) {
        $this->conversation = $conversation;
        $this->status = $status;
        
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('vendor')->user();    
            return $next($request);
        });
    }

    public function store(TicketConversationRequest $request, Ticket $ticket) {
        $isAgent = true;
        $redirectsTo = route('tickets.vendor.show', ['ticket' => $ticket->ticket_id]);
        $sender = $this->user;
        $receiver = $ticket->user;

        $response = (new TC($this->conversation, $this->status))->processStore($request, $ticket, $sender, $receiver, $isAgent, $redirectsTo);

        return $response;
    }
}
