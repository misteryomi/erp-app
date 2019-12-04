<?php

namespace App\Models\Exceptions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use \App\User;

use App\Http\Controllers\AppraisalController;
use App\Mail\ExceptionResponse;


class ExceptionConversation extends Model
{
    use \App\Models\ModelTrait;

    protected $guarded = [];

    /**
     * Return the relationship of each conversation exception with it's associated exception
    */
    public function exception() {
        return $this->belongsTo(Exception::class);
    }

    /**
     * Returns the user ID based on whether the sender is a vendor (exception_vendor table) or a normal user (wp_users table)
    */
    public function getUserAttribute() {
        return $this->is_agent ? $this->receiver : $this->sender;
    }


    /**
     * Returns the URL to the attachment file if NOT NULL
     */
    public function getAttachmentAttribute($value) {
        if(!is_null($value)) {
            return config('storage.url').Storage::url($value);
        }        
        return null;
    }

    /**
     * Return the sender of the message based on the relationship (whether sender is the vendor or the user)
     */
    public function sender() {
        if($this->is_agent) {
            return $this->belongsTo(ExceptionVendor::class, 'sender_id');
        }
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }

    /**
     * Return the receiver of the message based on the relationship (whether receiver is the vendor or the user)
     */
    public function receiver() {
        if($this->is_agent) {
            return $this->belongsTo(ExceptionVendor::class, 'receiver_id');
        }
        return $this->belongsTo(User::class, 'receiver_id', 'id');
    }


    //Send mail
    public function sendMail($receiver) {
        $conversation = $this;
                
        Mail::to($receiver->email)->queue(new ExceptionResponse($conversation, $receiver));    
        
    }
    
}
