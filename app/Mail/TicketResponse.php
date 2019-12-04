<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Tickets\TicketConversation;

class TicketResponse extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;


    private $conversation;
    private $receiver;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(TicketConversation $conversation, $receiver)
    {
        $this->conversation = $conversation;
        $this->receiver = $receiver;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.tickets.response')->with([
                'title' => $this->conversation->ticket->title,
                'name' => $this->receiver->name,
                'conversation' => $this->conversation,
                'ticket_id' => $this->conversation->ticket->ticket_id,
                'msg' => $this->conversation->message
            ])->subject("Re: ".$this->conversation->ticket->title);
    }
}
