<?php

namespace App\Models\Tickets;

use Illuminate\Database\Eloquent\Model;
use App\Models\DepartmentUnit;

class Category extends Model
{

    protected $guarded = [];

    /**
     * Return the relationship of each category with it's specified unit
     */
    public function unit() {
        return $this->belongsTo(DepartmentUnit::class);
    }

    /**
     * Return the relationship of each category with all it's associated tickets
     */
    public function tickets() {
        return $this->hasMany(Ticket::class, 'category_id');
    }

}
