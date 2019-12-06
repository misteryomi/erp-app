<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Department;
use App\Models\Tickets\Ticket;
use App\Models\Tickets\TicketVendor;
use App\Models\Tickets\Category;

class DepartmentUnit extends Model
{

    protected $guarded = [];


    /**
     * Return the relationship of each unit with it's associated department
    */
    public function department() {
        return $this->belongsTo(Department::class);
    }

    /**
     * Return the relationship of each unit with it's associated categories
    */
     public function categories() {
        return $this->hasMany(Category::class, 'unit_id');
    }

    /**
     * Return the relationship of each unit with it's associated tickets
    */
    public function tickets() {
        return $this->hasMany(Ticket::class, 'unit_id');
    }

    /**
     * Retrieves all staff of current unit
     */
    public function staff() {
        return $this->hasManyThrough(TicketVendor::class, UserUnit::class, 'unit_id', 'id', 'id', 'user_id');
    }

    /**
     * Retrieves all user of current unit
     */
    public function user() {
        return $this->hasManyThrough(User::class, UserUnit::class, 'unit_id', 'laravel_user_id', 'id', 'user_id');
    }


    /**
     * Get assignable staff in the current unit
     */
    public function getAssignableStaff() {
        /**
         * Get all members of this unit, retrieve and count all tickets they've been assigned to,
         * And order by the count of their assignments. Then return the staff with the least number
         * of assigned tickets.
         */

        $assignable = $this->staff()->withCount('assignedTo')->having('is_active', 1)->orderBy('assigned_to_count')->first();

        return $assignable;
    }


    /**
     * Return the relationship of each unit with it's associated team lead
     */
    public function team_lead() {
        return $this->hasOne(TicketVendor::class, 'id', 'team_lead_id');
    }

}
