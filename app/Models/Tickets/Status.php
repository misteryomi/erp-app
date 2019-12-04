<?php

namespace App\Models\Tickets;

use Illuminate\Database\Eloquent\Model;


class Status extends Model
{

    /**
     * Returns a relationship of all tickets belonging to each status
     */
    public function tickets() {
        return $this->hasMany(Ticket::class, 'status_id');
    }

    /**
     * Returs an ID of the specified status's name
     * @param $name - name of status
     * 
     * @return $id
     */
    public function findStatus($name) {
        $status = Self::where('name', $name)->first();
        
        return $status->id;
    }
    
    /**
     * Returns each status ticket_count for specified user
     * 
     * @param $user_id
     * @param $is_vendor - boolean
     * 
     * @return collection
     */
    public function getUserTicketsStatusCount($user_id, $is_vendor) {

        if(!is_null($user_id)) {
            $stats = Self::withCount(['tickets' => function($query) use ($user_id, $is_vendor) {
                            $is_vendor ? $query->where('assigned_to', $user_id) : $query->where('user_id', $user_id);
                        }])->get();

        } else {
            $stats = Self::withCount('tickets')->get();
        }

        return $stats;
    }
    

    /**
     * Returns actual statistics of each status's ticket counts [for specified user]
     * 
     * @param $user_id
     * @param $is_vendor - boolean
     * 
     * @return collection
     */

    public function getUserTicketsStatusStats($user_id = NULL, $is_vendor) {
        $stats = [];

        $statuses = $this->getUserTicketsStatusCount($user_id, $is_vendor);

        foreach($statuses as $status) {
            $stats[$status->name] = $status->tickets_count;
        }
        
        return $stats;
    }
}
