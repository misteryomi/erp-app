<?php

namespace App\Models\Exceptions;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    protected $guarded = [];

    /**
     * Return the relationship of each category with it's specified unit
     */
    public function unit() {
        return $this->belongsTo(DepartmentUnit::class);
    }

}
