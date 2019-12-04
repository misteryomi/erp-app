<?php

namespace App\Http\Controllers\Tickets\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tickets\Admin;
use Validator;
use Auth;


class AuthController extends Controller
{
    private $admin;

    function __construct(Admin $admin) {
        $this->admin = Auth::guard('admin');
    }

    public function index() {
        return view('tickets.admin.auth.login');
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails() || !$this->admin->attempt($request->only(['email', 'password']))) {
            return redirect()->back()->withMessage('Invalid login credentials')->withAlertClass('alert-danger');
        }

        return redirect()->route('tickets.admin.dashboard');            
    }


    public function logout() {

        Auth::logout();

        return redirect()->route('tickets.admin.login');            
    }

}
