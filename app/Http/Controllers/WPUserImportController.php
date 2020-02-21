<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Carbon\Carbon;

class WPUserImportController extends Controller
{
    function __invoke() {
        //Get all users id from wp_users table
        $users = \App\WPUser::all();

        $users->map(function ($user) {
            $department = \App\Models\Department::where('name', $user->department)->first();
            $unit = \App\Models\DepartmentUnit::where('name', $user->sub_unit)->first();

                $_user = \App\User::firstOrCreate(
                    ['email' => $user->user_email],
                    [
                    'id' => $user->ID,
                    'staff_id' => $user->staff_id,
                    'user_pass' => $user->user_pass,
                    'username' => $user->user_nicename,
                    'name' => $user->name ? $user->name : $user->display_name,
                    'password' => $user->user_pass,
                    'avatar' => $this->getFieldValue($user, 8437),
                    'level' => $user->level,
                    'designation' => $user->designation,
                    'dob' => Carbon::parse($this->getFieldValue($user, 10)),
                    'sex' => $user->sex,
                    'remember_token' => $user->token,
                    'created_at' => $user->created_at,
                    'is_active' => 1,
                    'is_activated' => 1,
                    'read_welcome_message' => 1
                ]);

                $_user->details()->create([
                    'user_id' => $_user->id,
                    'department_id' => $department ? $department->id : null,
                    'unit_id' => $unit ? $unit->id : null,
                    'bio' => $this->getFieldValue($user, 8320),
                    'state_of_origin' => $this->getFieldValue($user, 8362), // $details->where('field_id', 8362)->first()->value,
                    'marital_status' => $this->getFieldValue($user, 8358), //$details->where('field_id', 8358)->first()->value,
                    'phone' => $this->getFieldValue($user, 12), //$details->where('field_id', 12)->first()->value,
                    'location' => $this->getFieldValue($user, 8270), //$details->where('field_id', 8270)->first()->value,
                    'emergency_contact_person' => $this->getFieldValue($user, 8419), //$details->where('field_id', 8419)->first()->value,
                    'emergency_contact_phone' => $this->getFieldValue($user, 8420), //$details->where('field_id', 8320)->first()->value,
                    'salary_account_no' => $this->getFieldValue($user, 8423), //$details->where('field_id', 8423)->first()->value,
                    'salary_account_bank' => $this->getFieldValue($user, 8422), //$details->where('field_id', 8422)->first()->value,
                    'salary_account_name' => '',
                    'intl_passport_no' => $this->getFieldValue($user, 8427), //$details->where('field_id', 8427)->first()->value,
                    'pension_pin' => $this->getFieldValue($user, 8424), //$details->where('field_id', 8424)->first()->value,
                    'pension_admin' => $this->getFieldValue($user, 8426), //$details->where('field_id', 8426)->first()->value,
                    'office_phone' => $this->getFieldValue($user, 8426), //$details->where('field_id', 8426)->first()->value,
                    'date_employed' => $this->getFieldValue($user, 8426), //$details->where('field_id', 8426)->first()->value,
                ]);
                

        });

    }


    private function getFieldValue($user, $field) {
        $details = \App\Models\WPUserProfileData::where('user_id', $user->ID)->where('field_id', $field)->first();

        return $details ? $details->value : null ;
    }
}
