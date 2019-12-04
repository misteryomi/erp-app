<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EscalatedException extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $exception;
    private $supervisor_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($exception, $supervisor_name)
    {
        $this->exception = $exception;
        $this->supervisor_name = $supervisor_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.exceptions.escalated')->with(['exception' => $this->exception, 'exception_id' => $this->exception->exception_id, 'name' => $this->supervisor_name])->subject("Fwd: ".$this->exception->title);
    }
}