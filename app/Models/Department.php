<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DepartmentUnit;
use App\Models\Tickets\TicketVendor;
use App\Models\Tickets\Ticket;

class Department extends Model
{

    protected $guarded = [];

    /**
     * Return the relationship of each department with all associated units
     */
     public function units() {
        return $this->hasMany(DepartmentUnit::class, 'department_id');
    }

    /**
     * Return the relationship of each department with all associated tickets
     */
    public function tickets() {
        return $this->hasMany(Ticket::class, 'department_id');
    }

    /**
     * Return the relationship of each department with it's associated team lead
     */
    public function team_lead() {
        return $this->hasOne(TicketVendor::class, 'id', 'team_lead_id');
    }

}
