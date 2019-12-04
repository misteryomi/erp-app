<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TicketAssigned extends Mailable implements ShouldQueue
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
        $sendMail = $this->view('emails.tickets.assigned')->withTicket($this->ticket)->subject("New Ticket: ".$this->ticket->title);
        if($this->ticket->unit->group_email) {
            $sendMail->cc($this->ticket->unit->group_email);
        }
        return $sendMail;
    }
}
