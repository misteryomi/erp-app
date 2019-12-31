<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //
    function __construct(Notification $notification)
    {
        $this->notification = $notification;

        $this->middleware(function($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }

    public function index() {
        $notifications = $this->user->notifications()->latest()->paginate(15);

        return view('notifications.index', compact('notifications'));
    }

    public function show(Notification $notification) {
        $notification->update([
            'read_at' => Carbon::now(),
        ]);

        if($notification->route) {
            return redirect($notification->route);
        }
        return redirect()->route('home');
    }
}
