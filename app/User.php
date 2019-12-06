<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;

use App\Models\Tickets\TicketsUser;
use App\Models\Exceptions\ExceptionUser;
use Illuminate\Support\Carbon;

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
        'name', 'email', 'password','avatar','admin','department','sub_unit','level','designation','dob','sex', 'staff_id'
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

        if(!$type) {
            $hideThese = ['id', 'staff_id', 'is_active', 'is_activated', 'updated_at', 'user_id', 'user_pass', 'avatar'];

            $profile = array_filter($profile, function($key) use ($hideThese) {
                return !in_array($key, $hideThese);
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


    /**
     * Returns loans requested by by this user
     */
    public function loans() {
        return $this->hasMany(LoanRequest::class, 'staff_id', 'laravel_user_id');
    }

    /**
     * For routing using {username}
     */
    public function resolveRouteBinding($value)
    {
        return $this->where('username', $value)->firstOrFail();
    }


    public function setUserNicenameAttribute($value) {
        $this->attributes['username'] = $value;
    }

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }


    public function getAvatarAttribute($value) {

        $avatar = url(Storage::url($value));

        return file_exists(storage_path('app/'.$value)) ? $avatar : asset('assets/img/avatar2.jpg');
    }

    public function getDobAttribute($value) {
        return Carbon::parse($value)->toFormattedDateString();
    }

    public function upcomingBirthdays() {
        $now = Carbon::now();
        $currentMonth = $now->format('m');
        $currentDay = $now->format('d');

        return $this->whereMonth('dob', $currentMonth)->whereDay('dob', '>=', $currentDay)->orderBy('dob')->take(5)->get();
    }


}
