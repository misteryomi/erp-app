<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClosedException extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $exception;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($exception)
    {
        $this->exception = $exception;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.exceptions.closed')->with(['exception' => $this->exception, 'exception_id' => $this->exception->exception_id, 'name' => $this->exception->assignedTo->name])->subject("Exception Closed: ".$this->exception->title);
    }
}