<?php

namespace App\Models\Exceptions;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tickets\Category
 *
 * @property int $id
 * @property int $unit_id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Tickets\DepartmentUnit $unit
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Category whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
