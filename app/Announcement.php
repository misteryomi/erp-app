<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $guarded = [];

    protected $date = ['expiry'];


    public function seen() {
        return $this->hasMany(AnnouncementsSeen::class, 'announcement_id');
    }
}
