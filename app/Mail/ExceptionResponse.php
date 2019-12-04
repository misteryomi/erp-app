<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Exceptions\ExceptionConversation;

class ExceptionResponse extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;


    private $conversation;
    private $receiver;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ExceptionConversation $conversation, $receiver)
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
        return $this->view('emails.exceptions.response')->with([
                'title' => $this->conversation->exception->title,
                'name' => $this->receiver->name,
                'conversation' => $this->conversation,
                'exception_id' => $this->conversation->exception->exception_id,
                'msg' => $this->conversation->message
            ])->subject("Re: ".$this->conversation->exception->title);
    }
}
