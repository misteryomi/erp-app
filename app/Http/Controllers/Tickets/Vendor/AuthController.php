<?php

namespace App\Http\Controllers\Tickets\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tickets\TicketVendor;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;


class AuthController extends Controller
{
    private $vendor;

    function __construct(TicketVendor $vendor) {
        $this->vendor = Auth::guard('vendor');
    }

    public function index() {
        return view('tickets.vendor.auth.login');
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails() || !$this->vendor->attempt($request->only(['email', 'password']))) {
            return redirect()->back()->withMessage('Invalid login credentials')->withAlertClass('alert-danger');
        }

        return redirect()->route('tickets.vendor.dashboard');
    }


    public function resetPassword() {
        return view('tickets.vendor.auth.reset-password');
    }

    public function storePassword(Request $request) {
        $user = $request->user();

        $validator = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);


        if(!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withMessage('Old password is incorrect')->withAlertClass('alert-danger');
        }

        $user->update(["password"=> Hash::make($request->password)]);

        return redirect()->back()->withMessage("Your password has been successfully reset !")->withAlertClass('alert-success');

    }


    public function logout() {

        Auth::guard('vendor')->logout();
        return redirect()->route('tickets.vendor.login');
    }

}
