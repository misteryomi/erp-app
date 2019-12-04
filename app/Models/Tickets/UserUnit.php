<?php

namespace App\Models\Tickets;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class UserUnit extends Model
{

    protected $guarded = [];
    public $timestamps = false;

    /**
     * Return the relationship of each user's unit ticket with it's associated user
    */
    public function user() {
        return $this->belongsTo(\App\User::class);
    }

    /**
     * Return the relationship of each unit ticket with it's associated department's unit
    */
    public function unit() {
        return $this->belongsTo(DepartmentUnit::class);
    }

    /**
     * Return the relationship of each unit ticket with it's associated department
    */
    public function department() {
        return $this->hasManyThrough(Department::class, DepartmentUnit::class, 'id', 'id', 'unit_id', 'id');
    }

}
