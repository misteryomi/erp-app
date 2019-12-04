<?php

namespace App\Http\Controllers\Exceptions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExceptionConversationRequest;
use App\Http\Resources\ExceptionConversationResource;
use Illuminate\Support\Facades\Auth;
use App\Mail\ClosedException;
use Illuminate\Support\Facades\Mail;

use App\Models\Exceptions\Exception;
use App\Models\Exceptions\ExceptionConversation;
use App\User;
use Illuminate\Support\Facades\Storage;

class ExceptionConversationsController extends Controller
{
    private $conversation;
    private $user;

    function __construct(ExceptionConversation $conversation) {
        $this->conversation = $conversation;
        
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();    
            return $next($request);
        });
    }

    public function store(ExceptionConversationRequest $request, Exception $exception) {

        $isAgent = false;
        $redirectsTo = route('exceptions.show', ['exception' => $exception->exception_id]);
        $sender = $this->user;
        $receiver = $exception->assignedTo;

        $response = $this->processStore($request, $exception, $sender, $receiver, $isAgent, $redirectsTo);

        return $response;
    }


    public function processStore($request, $exception, $sender, $receiver, $isAgent, $redirectsTo) {

        // if(!$exception->is_assigned) {
        //     return response([
        //         'status' => false, 
        //         'message' => "Sorry, you cannot respond to an unassigned exception", 
        //         ], 403);    
        // }

        // if(!$exception->is_approved) {
        //     return response([
        //         'status' => false, 
        //         'message' => "Sorry, you cannot respond to an unapproved exception", 
        //         ], 403);    
        // }

        $requestData = $request->except('attachment', 'mark_as_closed');
        $requestData['sender_id'] = $sender->id;
        $requestData['receiver_id'] = $receiver->id;
        $requestData['exception_id'] = $exception->id;

        if($request->file('attachment')) {
            $file = Storage::putFile('attachments', $request->file('attachment'));
            $requestData['attachment'] = $file;
        }


        $message = $this->conversation->create($requestData);

        /**
         * process some updates on the status of the exception
         * 
         */
        //If the assigned staff has once responded to this exception and user responds, it is an open exception, not pending.
        $status = ($request->mark_as_closed && $this->user->isExceptionAdmin()) ? 'CLOSED' : 'OPEN';
        $exception->update(['status' => $status]);
        //$message->sendMail($receiver);
        
        if($request->mark_as_closed) {
            Mail::to($exception->assignedTo->email)->queue(new ClosedException($exception));    
        }
        
         return response([
            'status' => true, 
            'message' => "Exception updated successfully!", 
            'data' =>  new ExceptionConversationResource($message),
            'redirectsTo' => $redirectsTo, 
            ]);

    }
}
