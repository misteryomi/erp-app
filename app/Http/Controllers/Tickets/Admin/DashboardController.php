<?php

namespace App\Http\Controllers\Tickets\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Tickets\Ticket;
use App\Models\Tickets\Status;

class DashboardController extends Controller
{

    private $ticket;
    private $user;

    function __construct(Ticket $ticket, User $user) {
        $this->ticket = $ticket;
        // $this->user = $user;
        $this->user = User::first();
    }


    public function index() {
        $tickets = $this->ticket->latest()->take(5)->get();

        //get stats of all ticket statuses
        $stats = (new Status)->getUserTicketsStatusStats(null, $tickets);

        return view('tickets.admin.dashboard', compact('tickets', 'stats'));
    }


}
