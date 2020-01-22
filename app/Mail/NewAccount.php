<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewAccount extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $msg;
    private $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name)
    {
        $this->msg = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.accounts.new')->withMsg($this->msg)->withName($this->name)->subject("New Account Information");
    }
}
