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

        return view('dashboard', compact('birthdays'));
    }
}
