<?php

namespace App\Models\Tickets;


use App\Models\UserUnit;
use App\Models\LoanRequest;


trait TicketsUser {


    //Check if user is a vendor
    public function getIsVendorAttribute() {
        return $this->vendor()->exists();
    }


    /**
     * Returns tickets owned by this user
     */
    public function tickets() {
        return $this->hasMany(Ticket::class, 'user_id', 'laravel_user_id');
    }


    public function vendor() {
        return $this->hasOne(TicketVendor::class, 'user_id', 'laravel_user_id');
    }

    public function unit() {
        return $this->hasOne(UserUnit::class, 'user_id', 'laravel_user_id');
    }

    /**
     * Returns loans requested by by this user
     */
    public function loans() {
        return $this->hasMany(LoanRequest::class, 'staff_id', 'laravel_user_id');
    }

    /**
     * Get vendors's assigned Tickets
     */
    public function assignedTickets() {
        if($this->isVendor) {
            return $this->hasMany(Ticket::class, 'assigned_to');
        }
    }


}
