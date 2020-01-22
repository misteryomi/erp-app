<?php

namespace App\Http\Controllers;

use App\AccountToken;
use App\Mail\NewUserAccount;
use App\Mail\PasswordResetMail;
use App\Models\Department;
use App\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use MikeMcLin\WpPassword\Facades\WpPassword;
use App\Rules\PrimeraDomain;
use App\Rules\ValidCaptcha;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    private $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register() {
        $departments = Department::all();

        return view('auth.register', compact('departments'));
    }

    public function postRegister(Request $request)
    {

        $validation = Validator::make($request->all(), [
                            'username' => 'required|unique:users',
                            'email' => ['required', 'email', 'unique:users', new PrimeraDomain],
                            'password' => 'required|confirmed',
                            // 'g-recaptcha-response' => ['required', new ValidCaptcha]
                        ]);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $requestData = $request->all();
        $userData = $request->only(['username', 'email', 'password', 'date_registered', 'name', 'level', 'sub_unit', 'designation', 'dob', 'sex']);
        $userData['name'] = $request->first_name .' '. $request->last_name;

        $userData['dob'] = \Carbon\Carbon::now();
        $user = $this->user->create($userData);

        $userDetailsData = \array_diff($requestData, $userData, $request->only(['first_name', 'last_name', '_token', 'dob', 'g-recaptcha-response']));

        $userDetailsData['date_employed'] = \Carbon\Carbon::now();
        $user->details()->create($userDetailsData);

        $token = Str::random(30);

        $user->token()->create(['token' => $token]);

        //Send mail
        Mail::to($user->email)->queue(new NewUserAccount($user, $token));

        return redirect()->route('login')->withMessage('Account created successfully. An activation link has been sent to your account. Please check your mail inbox/spam folder to complete registration.');
    }


    public function completeRegister(Request $request) {
        $token = AccountToken::where('token', $request->token)->first();

        if(!$token) {
            return redirect()->route('login')->withError('Invalid token. Please contact HR to resolve your activation issues');
        }

        $token->user()->update(['is_activated' => 1]);

        $token->delete();

        return redirect()->route('login')->withMessage('Account activated successfully! Please login to continue');
    }


    public function login() {
        return view('auth.login');
    }

    public function postLogin(Request $request){

        $user = $this->user->where('email', $request->username)->orWhere('username', $request->username)->first();


        if (!$user) {
            return redirect()->back()->withError('Invalid username/password');
        }

        if (!$user->is_activated) {
            return redirect()->back()->withError('Your account is yet to be activated. Please check your email inbox/spam folder for activation link or contact HR.');
        }


        //Check first if wordpress password could work
        $this->attemptLoginWithWP($request, $user);

        //Else proceed with normal login
        if(!Auth::attempt(['email' => $user->email, 'password' => $request->password], $request->remember_me)){
            return redirect()->route('login')->withError('Invalid username or password');
        }


        return redirect()->intended(route('home'));
    }



    public function logout() {

        Auth::logout();

        return redirect()->route('login');
    }


    public function forgotPassword(ResetPassword $token = null) {

        if($token) {
            //Check if token has expired too tho...
            return view('auth.reset-password', compact('token'));
        }

        return view('auth.forgot-password');
    }

    public function postForgotPassword(Request $request) {
        $user = $this->user->where('email', $request->username)->orWhere('username', $request->username)->first();


        if (!$user) {
            return redirect()->back()->withError('User account does not exist. Please confirm your details and try again');
        }

        $token = Str::random(40);
        $user->passwordReset()->create(['token' => $token]);

        //Send mail
        Mail::to($user->email)->queue(new PasswordResetMail($user, $token));

        return redirect()->back()->withMessage('A passsword reset link has been sent to your email address. Please check your mail to continue');
    }



    public function storePassword(Request $request) {
        $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required|confirmed',
        ]);

        $user = $this->user->where('email', $request->email)->first();


        $user->update([
            'password' => $request->password
        ]);

        //Delete all tokens for that user
        $user->passwordReset()->delete();

        return redirect()->route('login')->withMessage('Password updated successfully! Please login to continue');
    }


    /**
     * Attempt to log user in with Wordpress password
     */
    private function attemptLoginWithWP(Request $request, $user) {
        if(WpPassword::check($request->password, $user->password)) {
            Auth::loginUsingId($user->id, $request->remember_me);

            return redirect()->intended(route('home'));
        }
    }


}
