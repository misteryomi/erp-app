<?php

namespace App\Http\Controllers\Tickets\User;

use App\Http\Controllers\Controller;
use App\User;
use App\Http\Resources\UserResource;

class UsersController extends Controller
{
    public function __invoke() {
        $users = User::get();
        
        return response(['status' => true, 'data' => UserResource::collection($users)]);
    }
}
