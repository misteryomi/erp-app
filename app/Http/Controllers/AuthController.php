<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
                            'password' => 'required'
                        ]);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $requestData = $request->all();
        $requestData['password'] = Hash::make($requestData['password']);
        $user = $this->user->create($requestData);

        $user->details()->create();

        return redirect()->route('login')->withMessage('Account created successfully. Please login to continue');
    }

    public function login() {
        return view('auth.login');
    }

    public function postLogin(Request $request){

        $user = $this->user->where('email', $request->username)->orWhere('user_nicename', $request->username)->first();

        if (!$user) {
            return redirect()->back()->withError('Invalid username/password');
        }

        if(!Auth::attempt(['email' => $user->email, 'password' => $request->password], $request->remember_me)){
            return redirect()->route('login')->withError('Invalid username or password');
        }

        return redirect()->intended(route('home'));
    }


    public function logout() {

        Auth::logout();

        return redirect()->route('login');
    }
}
