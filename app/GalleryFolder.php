<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryFolder extends Model
{
    protected $guarded = [];

    public function pictures() {
        return $this->hasMany(Gallery::class, 'folder_id');
    }
}
