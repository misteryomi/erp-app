<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WPUserImportController extends Controller
{
    function __invoke() {
        $users = \App\WPUser::all();

        $users->map(function ($user) {
            $department = \App\Models\Department::where('name', $user->department)->first();
            $unit = \App\Models\DepartmentUnit::where('name', $user->sub_unit)->first();

            \App\User::create([
                'id' => $user->ID,
                'staff_id' => $user->staff_id,
                'user_pass' => $user->user_pass,
                'username' => $user->user_nicename,
                'display_name' => $user->display_name,
                'name' => $user->name,
                'email' => $user->user_email,
                'password' => $user->user_pass,
                'avatar' => '',
                'department' => $department ? $department->id : null,
                'sub_unit' => $unit ? $unit->id : null,
                'level' => $user->level,
                'designation' => $user->designation,
                ''

            ]);
            // "designation" => "Software Developer"
            // "dob" => ""
            // "sex" => "Male"
            // "remember_token" => "9IU1VesrBXTdLxG8yzxwV8NcldqqV7jFuqffBlkSfyRnByOnTYy0zbdlwXFt"
            // "created_at" => null
            // "updated_at" => null            
            // dd($user->department);
            // "ID" => 1
            // "laravel_user_id" => 1
            // "staff_id" => "PC_0203"
            // "user_login" => "kchukwuemeka@primeramfbank.com"
            // "user_pass" => "$P$B9KWK0zlcVInW1kJ0ZLqUnAWZhwFEx1"
            // "user_nicename" => "kchukwuemeka"
            // "user_email" => "kchukwuemeka@primeramfbank.com"
            // "user_url" => "http://www.primeramfbank.com"
            // "user_registered" => "0000-00-00 00:00:00"
            // "user_activation_key" => "1548056030:$P$BFfg0xUoODnj8LK.32gO.xyrB8Qtcm/"
            // "user_status" => 0
            // "display_name" => "KINGSLEY CHUKWUEMEKA"
            // "name" => "KINGSLEY CHUKWUEMEKA"
            // "email" => "kchukwuemeka@primeramfbank.com"
            // "password" => "$2y$10$rOCyFBAL75LZmw.7wwPBFONNq2aPyjsqbhQfrFlbwF1.16HlGzCzq"
            // "avatar" => "http://irs.primeramfbank.com/avatars/avatar.jpg"
            // "admin" => 0
            // "department" => "INTERNAL CONTROL & AUDIT"
            // "sub_unit" => "STRATEGY"
            // "level" => "Senior Banking Officer"
            // "designation" => "Software Developer"
            // "dob" => ""
            // "sex" => "Male"
            // "remember_token" => "9IU1VesrBXTdLxG8yzxwV8NcldqqV7jFuqffBlkSfyRnByOnTYy0zbdlwXFt"
            // "created_at" => null
            // "updated_at" => null            
            // dd($user->department);
        });

    }
}
