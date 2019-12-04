<?php

namespace App\Models\Tickets;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TicketVendor extends Authenticatable
{

    protected $guarded = [];

    /**
     * Returns vendors's assigned Tickets
     */
    public function assignedTickets() {
        return $this->hasMany(Ticket::class, 'assigned_to');
    }

    /**
     * Returns all tickets ever assigned to a user
     */
    public function assignedTo() {
        return $this->hasMany(TicketAssignedUser::class, 'user_id');
    }


    /**
     * Returns unit this user belongs to
     */
    public function unit() {
        return $this->hasOne(UserUnit::class, 'user_id', 'id');
    }


    /**
     * Filter the record of ticket vendors
     * @param $users - collection
     * @param $request
     * 
     * @return collection
     */
    public function filterData($users, $request) {

        if($request->name) {
            $users = $users->where('name', 'like', '%'.$request->name.'%');
        }

        if($request->department) {
            $department = $request->department;

            //Retrieve array of units' ids in the department
            $units = DepartmentUnit::whereHas('department', function($query) use ($department) {
                        $query->where('name', $department);
                    })->pluck('id')->toArray();

            //retreive the users assigned to that unit
            $users = $users->whereHas('unit', function($query) use ($units) {
                            $query->whereIn('id', $units);            
                        });
        }

            //Sort by latest or oldest
        if($request->has('by')) {
            $status = $request->by;
            switch ($status) {
                case 'Oldest':
                    $users = $users->oldest();
                    break;
                case 'Newest':
                    $users = $users->latest();
                    break;            
                case 'A-Z':
                    $users = $users->orderBy('display_name');
                    break;
                case 'Z-A':
                    $users = $users->orderBy('display_name', 'desc');
                    break;            
                case 'Highest Assigned Tickets':
                    $users = $users->withCount('assignedTickets')->orderBy('assigned_tickets_count', 'desc');
                    break;
                case 'Lowest Assigned Tickets':
                    $users = $users->withCount('assignedTickets')->orderBy('assigned_tickets_count');
                    break;   

                default:
                    break;
            }
        }

        return $users;
    }
            
}
