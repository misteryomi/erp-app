<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\Tickets\TicketsUser;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;
    use TicketsUser;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    /**
     * For routing using {username}
     */
    public function resolveRouteBinding($value)
    {
        return $this->where('user_nicename', $value)->firstOrFail();
    }


    public function getUsernameAttribute() {
        return $this->user_nicename;
    }

    public function getAvatarAttribute($value) {
        return file_exists($value) ? $value : asset('assets/img/avatar2.jpg');
    }




}
