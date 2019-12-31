<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Notification extends Model
{

    protected $guarded = [];

    protected $casts = [
        'read_at' => 'datetime:Y-m-d',
    ];

    public function queue(string $message, string $route, int $user_id = null,  array $params = null) {
        $this->create([
            'id' => Str::uuid(),
            'message' => $message,
            'route' => $route,
            'notifiable_type' => 'App\User',
            'notifiable_id' => $user_id,
            'data' => json_encode($params),
        ]);
    }

    public function getIdAttribute($value) {
        return $value;
    }

    // public function get($user_id = 0, $count = 10) {
    //     $this->userUnreadNotifications($user_id)->take($count)->get();
    // }

    // public function count($user_id = 0) {
    //     return $this->userUnreadNotifications($user_id)->count();
    // }

    // public function unread() {
    //     return $this->where('read_at', NULL);
    // }
}
