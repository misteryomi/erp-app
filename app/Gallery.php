<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    protected $guarded = [];

    public function getUrlAttribute($value) {
        return url(Storage::url($value));
        // return 'storage/'.$value;
    }

    public function folder() {
        return $this->belongsTo(GalleryFolder::class);
    }
}
