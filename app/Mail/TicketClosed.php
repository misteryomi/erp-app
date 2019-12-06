<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TicketClosed extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $ticket;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.tickets.closed')->with(['ticket' => $this->ticket, 'ticket_id' => $this->ticket->ticket_id, 'name' => $this->ticket->assignedTo->name])->subject("Ticket Closed: ".$this->ticket->title);
    }
}
