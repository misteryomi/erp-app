<?php

namespace App;

use App\Models\Department;
use App\Models\DepartmentUnit;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $guarded = [];

    protected $date = ['date_employed'];

    public function details() {
        return $this->belongsTo(User::class);
    }

    public function department() {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }

    public function unit() {
        return $this->hasOne(DepartmentUnit::class, 'id', 'unit_id');
    }


}
