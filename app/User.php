<?php

namespace App;

use App\Models\Department;
use App\Models\DepartmentUnit;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;

use App\Models\Tickets\TicketsUser;
use App\Models\Exceptions\ExceptionUser;
use Illuminate\Support\Carbon;
use App\ResetPassword;
use App\Notification;

class User extends Authenticatable
{
    use Notifiable, HasRoles;
    use TicketsUser, ExceptionUser;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password','avatar','admin','department','sub_unit','level','designation','dob','sex', 'staff_id', 'read_welcome_message'
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

    protected $date = ['dob'];


    // public function getIDAttribute() {
    //     return $this->id;
    // }

    /**
     * Merged details of the user's data that could be publicly seen or edited.
     *  @param string $type = null | 'all'
     *  @return array
     */
    public function profile($type = null) {
        $details = $this->details ? $this->details : $this->details()->create();  //Quick hack to create user details record if not existing
        $user = $this->toArray();

        if($user['details']) {
            unset($user['details']);
        }

        $profile = array_merge($user, $details->toArray());

        $profile['department'] = $this->details->department ? $this->details->department->name : $this->department;
        $profile['unit'] = $this->details->unit ? $this->details->unit->name : $this->sub_unit;


        if(!$type) {
            $hideThese = ['id', 'staff_id', 'is_active', 'is_activated', 'sub_unit', 'department_id', 'updated_at', 'user_id', 'user_pass', 'avatar', 'level'];
            $showThese = ['username', 'name', 'email', 'department', 'unit', 'designation', 'sex', 'state_of_origin', 'marital_status', 'bio'];

            $profile = array_filter($profile, function($key) use ($hideThese, $showThese) {
                if(auth()->user()->can('view-full-profile') || (auth()->user()->id == $this->id)) {
                    return !in_array($key, $hideThese);
                }
                return in_array($key, $showThese);
            }, ARRAY_FILTER_USE_KEY) ;
        }

        return $profile;
    }

    /**
     * Relationship between user and user_details table
     *
     * @return collection
     */
    public function details() {
        return $this->hasOne(UserDetails::class, 'user_id');
    }

    public function leaves() {
        return $this->hasMany('App\Leave');
    }

    public function notifications() {
        return $this->hasMany(Notification::class, 'notifiable_id');
    }


    public function passwordReset() {
        return $this->hasOne(ResetPassword::class, 'email', 'email');
    }

    public function token() {
        return $this->hasOne(AccountToken::class, 'email', 'email');
    }

    /**
     * Returns loans requested by by this user
     */
    public function loans() {
        return $this->hasMany(LoanRequest::class, 'staff_id', 'laravel_user_id');
    }


    /**
     * Returns tokenization record for user
     */
    public function tokenization() {
        return $this->hasMany(Flutterwafe::class, 'user_id', 'laravel_user_id');
    }

    /**
     * For routing using {username}
     */
    public function resolveRouteBinding($value)
    {
        return $this->where('username', $value)->firstOrFail();
    }


    public function getUserNicenameAttribute($value) {
        return $this->username;
    }

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }



    public function getAvatarAttribute($value) {

        $avatar = url(Storage::url($value));

        return file_exists(storage_path('app/'.$value)) ? $avatar : asset('assets/img/avatar2.jpg');
    }

    public function getDobAttribute($value) {
        return !is_null($value) ? Carbon::parse($value)->format('M d') : '';
    }

    public function getUserEmailAttribute() {
        return $this->email;
    }


    /**
     * Retrieve upcoming birthdays for the month
     */
    public function upcomingBirthdays($limit = 5) {
        $now = Carbon::now();
        $currentMonth = $now->format('m');
        $currentDay = $now->format('d');

        return $this->whereMonth('dob', $currentMonth)->whereDay('dob', '>=', $currentDay)->orderBy('dob')->take($limit)->get();
    }


    public function isBirthday() {
        return $this->dob != '' ? (Carbon::parse($this->dob)->format('d-m-Y') == Carbon::now()->format('d-m-Y')) : false;
    }

}
