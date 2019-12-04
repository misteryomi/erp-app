<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $user;

    function __construct() {
        $this->middleware(function($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }

    public function index(User $user) {
        return view('profiles.show', compact('user'));
    }

    public function list() {
        $users = $this->user->paginate(21);

        return view('profiles.list', compact('users'));
    }

}
