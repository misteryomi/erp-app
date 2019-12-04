<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tickets\DepartmentUnit;
use App\Models\Tickets\TicketVendor;
use App\Models\Tickets\Ticket;

/**
 * App\Models\Department
 *
 * @property int $id
 * @property string $name
 * @property int $team_lead_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Tickets\TicketVendor $team_lead
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tickets\Ticket[] $tickets
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tickets\DepartmentUnit[] $units
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereTeamLeadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Department whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
