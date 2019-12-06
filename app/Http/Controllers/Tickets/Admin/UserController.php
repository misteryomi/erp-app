<?php

namespace App\Http\Controllers\Tickets\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserAssignRequest;
use App\Http\Controllers\Controller;
use App\Models\Tickets\Ticket;
use App\Models\Tickets\TicketVendor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use App\Mail\NewAccount;
use \App\User;

class UserController extends Controller
{
    private $user;
    private $ticket;

    function __construct(TicketVendor $user, Ticket $ticket) {
        $this->user = $user;
        $this->ticket = $ticket;
    }

    public function index(Request $request) {

        if($request->has('filter')) {
            $users = $this->user->filterData($this->user, $request);
        } else {
            $users = $this->user->orderBy('name');
        }

        if($request->has('activate')) {
            $this->activateUser($request);
        }

        if($request->has('reset-password')) {
            $this->resetPassword($request);
        }

        $users = $users->paginate(15);
        $departments = \App\Models\Department::all();
        $staffs = \App\User::all(); //Load the list of all users in wp_users table list

        return view('tickets.admin.users.list', compact('users', 'departments', 'staffs'));
    }

    public function show(Request $request, TicketVendor $user) {
        $tickets = $user->assignedTickets();

        //get stats of all ticket statuses
        $stats = (new \App\Models\Tickets\Status)->getUserTicketsStatusStats($user->id, true);

        $departments = \App\Models\Department::all();

        if($request->has('sort')) {
            $tickets = $this->ticket->sortData($tickets, $request);
        }

        if($request->has('export')) {
            return $this->ticket->export($tickets->get());
        }

        $tickets = $tickets ? $tickets->paginate(15) : collect([]);

        return view('tickets.admin.users.show', compact('user', 'tickets', 'stats', 'departments'));
    }


    /**
     * Create a vendor account
     */
    public function store(UserStoreRequest $request) {
        //Generate random password for user
         $password = \str_random(10);

         $request->merge(["password"=> Hash::make($password)]);

         $user = $this->user->create($request->only('name', 'password', 'email'));

         $user->unit()->create([
             'user_id' => $user->id,
             'unit_id' => $request->unit_id
         ]);

        $message = "<p>You have been added as a ticket vendor on IRS. Your login credentials are:</p><p>Username: {$request->email}<br/>Password: {$password}</p>";
        Mail::to($user->email)->cc($user->unit->group_email)->queue(new NewAccount($message, $user->name));


         return response(['status' => true, 'message' => "User created successfully!"]);
    }


    /**
     * Assign staff (wp-users) to a unit as a vendor, and create a vendor account for him.
     */
    public function assignStaff(UserAssignRequest $request) {

        foreach($request->staff_ids as $id) {
            $staff = User::find($id); //Check the list of all users in wp_users table list

            if($staff) {
                $user = $this->user->create([
                    'email' => $staff->email,
                    'name' => $staff->name,
                    'password' => $staff->password,
                    'user_id' => $staff->id,
                    'is_staff' => true,
                ]);

                $user->unit()->create([
                    'user_id' => $user->id,
                    'unit_id' => $request->unit_id
                ]);
            }
        }

         return response(['status' => true, 'message' => "User assigned successfully!"]);
    }


    /**
     * Handle the activation/deactivation of specified user
     * @param $request
     *
     * @return response
     */

    public function activateUser($request) {
        $user = $this->user->find($request->user_id);

        if(!$user) {
            return redirect()->back()->withMessage('User record not found')->withAlertClass('alert-danger');
        }

        $status = $request->activate ? true : false;

        $user->update(['is_active' => $status]);

        $message = $status ? "{$user->name} activated successfully!" : "{$user->name} deactivated successfully!";

        return redirect()->back()->withMessage($message)->withAlertClass('alert-success');

    }



    /**
     * Reset user password and send user activation email with password details
     * @param $request
     *
     * @return response
     */

    public function resetPassword($request) {
        $user = $this->user->find($request->user_id);

        if(!$user) {
            return redirect()->back()->withMessage('User record not found')->withAlertClass('alert-danger');
        }

        //Generate random password for user
        $password = \str_random(10);

        $user->update(["password"=> Hash::make($password)]);

        $message = "<p>Your password has been reset by IRS admininistrator. Your login credentials are:</p><p>Username: {$user->email}<br/>Password: {$password}</p>";
        Mail::to($user->email)->queue(new NewAccount($message, $user->name));

        return redirect()->back()->withMessage("{$user->name}'s password has been successfully reset !")->withAlertClass('alert-success');

    }

    public function update() {

    }

    public function delete() {

    }
}
