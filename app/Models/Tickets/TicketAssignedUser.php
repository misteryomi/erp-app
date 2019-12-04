<?php

namespace App\Models\Tickets;

use Illuminate\Database\Eloquent\Model;


/**
 * Model helps track the record of all vendors ever assigned to specified tickets
 */
class TicketAssignedUser extends Model
{
    use \App\Models\ModelTrait;

    protected $fillable = ['user_id', 'ticket_id'];
    
    /**
     * Return the relationship of each assigned ticket with it's associated user
    */
    public function user() {
        return $this->belongsTo(TicketVendor::class);
    }

    /**
     * Return the relationship of each assigned vendor with it's associated ticket
    */
    public function ticket() {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }
}
