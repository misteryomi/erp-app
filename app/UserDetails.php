<?php

namespace App;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $guarded = [];

    public function details() {
        return $this->belongsTo(User::class);
    }

    public function department() {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }


}
