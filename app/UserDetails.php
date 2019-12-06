<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $guarded = [];

    public function details() {
        return $this->belongsTo(User::class);
    }
}
