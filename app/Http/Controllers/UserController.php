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

        $user_details = $user->profile();

        return view('profiles.show', compact('user', 'user_details'));
    }

    public function list(Request $request) {

        $limit = 21;
        $users = $this->user->paginate($limit);

        if($request->has('q')) {
            $users = $this->filterResult($request->q)->paginate($limit);
        }

        return view('profiles.list', compact('users'));
    }


    public function edit(User $user) {

        if($this->checkPriviledge('edit-user', $user)) {
            $user_details = $user->profile('all');

            return view('profiles.edit', compact('user', 'user_details'));
        }

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


    public function update(Request $request)
    {

        $requestData = $request->all();
        $userData = $request->only(['username', 'password', 'date_registered', 'name', 'level', 'sub_unit', 'designation', 'dob', 'sex']);
        $userData['name'] = $request->first_name .' '. $request->last_name;

        $user = $this->user->update($userData);

        $userDetailsData = \array_diff($requestData, $userData, $request->only(['first_name', 'last_name', '_token']));

        $user->details()->update($userDetailsData);

        return redirect()->back()->withMessage('Profile fields updated successfully!');
    }


    private function filterResult($q) {

        $filter = (new User)->query();

        $filter->where(function($query) use ($q) {
                    $query->where('username', 'LIKE', "%$q%")
                          ->orWhere('name', 'LIKE', "%$q%");
                        //   ->orWhereHas('department') - But this is later on sha
                });

        return $filter;
    }


    public function manageProfiles() {
        $staff = $this->user->all();

        return view('profiles.index', compact('staff'));
    }


    private function checkPriviledge($priviledge, $user) {
        if($this->user->can($priviledge) || $this->user->id == $user->id) {
            return true;
        }

        abort(403, 'You do not have the priviledge to perform this action');
    }

}
