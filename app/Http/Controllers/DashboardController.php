<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    private $user;

    function __construct() {

        $this->middleware(function($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }

    public function index() {


        $birthdays = $this->user->upcomingBirthdays();
        $latestStaff = $this->user->latest()->take(4)->get();

        $stats = $this->generateStats();

        return view('dashboard', compact('birthdays', 'latestStaff', 'stats'));
    }


    private function generateStats() {
        $stats = new \stdClass();
        $stats->helpdesk = $this->user->tickets()->whereHas('status', function($query) {
                                return $query->where('name', '!=', 'Solved');
                            })->count();

        $stats->leave = number_format(20 - floor($this->user->leaves()->whereYear('leave_year', date('Y'))->sum('no_days')));

        $stats->tokenization = $this->user->tokenization()->count();

        return $stats;
    }
}
