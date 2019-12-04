<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\TicketModels\TicketConversation;

class NotifyCharles extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;


    private $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.notifications.report')->with([
                'url' => $this->url,
            ])->subject("IRS Helpdesk Weekly Report")->cc(['oomotoso@primeramfbank.com', 'kchukwuemeka@primeramfbank.com']);
    }
}