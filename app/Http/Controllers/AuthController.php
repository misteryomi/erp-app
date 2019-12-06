<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MikeMcLin\WpPassword\Facades\WpPassword;


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
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $validation = Validator::make($request->all(), [
                            'username' => 'required|unique:users',
                            'email' => 'required|email|unique:users',
                            'password' => 'required|confirmed'
                        ]);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $requestData = $request->all();
        $userData = $request->only(['username', 'password', 'date_registered', 'name', 'level', 'sub_unit', 'designation', 'dob', 'sex']);
        $userData['name'] = $request->first_name .' '. $request->last_name;

        $user = $this->user->create($userData);

        $userDetailsData = \array_diff($requestData, $userData, $request->only(['first_name', 'last_name', '_token']));

        $user->details()->create($userDetailsData);

        return redirect()->route('login')->withMessage('Account created successfully. Please login to continue');
    }

    public function login() {
        return view('auth.login');
    }

    public function postLogin(Request $request){

        $user = $this->user->where('email', $request->username)->orWhere('username', $request->username)->first();


        if (!$user) {
            return redirect()->back()->withError('Invalid username/password');
        }

        //Check first if wordpress password could work
        $this->attemptLoginWithWP($request, $user);

        //Else proceed with normal login
        if(!Auth::attempt(['email' => $user->email, 'password' => $request->password], $request->remember_me)){
            return redirect()->route('login')->withError('Invalid username or password');
        }

        return redirect()->intended(route('home'));
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


    public function logout() {

        Auth::logout();

        return redirect()->route('login');
    }
}
