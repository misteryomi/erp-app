<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LoanRequest
 *
 * @mixin \Eloquent
 */
class LoanRequest extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'staff_id');
    }

    public function supervisor() {
        return $this->belongsTo(User::class, 'hod_id');
    }

    public function getLoanIdAttribute() {
        return sprintf("%04s", $this->id);
    }

}
