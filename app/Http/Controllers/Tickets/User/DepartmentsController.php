<?php

namespace App\Http\Controllers\Tickets\User;

use App\Http\Controllers\Controller;
use App\Models\Department;

class DepartmentsController extends Controller
{
    public function __invoke() {
        $departments = Department::with('units', 'units.categories', 'units.staff')->get();
        
        return response(['status' => true, 'data' => $departments]);
    }
}
