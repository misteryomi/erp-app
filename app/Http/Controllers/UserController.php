<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $user;

    function __construct() {
        $this->middleware(function($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }

    public function index(User $user = null) {

        if(!$user) $user = $this->user;

        return view('profiles.show', compact('user'));
    }

    public function list() {
        $users = $this->user->paginate(21);

        return view('profiles.list', compact('users'));
    }


    public function edit() {
        return view('profiles.edit');
    }

    public function updatePassword() {
        return view('profiles.show');
    }

    public function storePassword(Request $request) {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $this->user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->withMessage('Password updated successfully!');
    }

    public function updateAvatar() {
        return view('profiles.show');
    }

    public function storeAvatar(Request $request) {
        $request->validate([
            'avatar' => 'image'
        ]);

        $path = $request->avatar->store('public/avatars/');

        $this->user->update([
            'avatar' => $path,
        ]);

        return redirect()->back()->withMessage('Profile picture updated successfully!');

    }

}
