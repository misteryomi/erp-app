<?php

namespace App\Http\Controllers\Tickets;


use App\Models\Tickets\Ticket;
use App\Models\Exceptions\Exception;
use App\Models\Tickets\TicketVendor;
use App\Models\Tickets\UserUnit;
use App\Models\LoanRequest;


trait TicketsUser {

    public function getIdAttribute() {
        return $this->laravel_user_id;
    }

    public function getEmailAttribute() {
        return $this->user_email;
    }

    public function getNameAttribute() {
        return $this->display_name;
    }

    //Check if user is a vendor
    public function getIsVendorAttribute() {
        return $this->vendor()->exists();
    }

    /**
     * Returns tickets owned by this user
     */
    public function exceptions() {
        return $this->hasMany(Exception::class, 'assigned_to', 'laravel_user_id');
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


    /**
     * Get supervisor's assigned Tickets
     */
    public function assignedExceptions() {
        return $this->hasMany(Exception::class, 'assigned_to');
    }

    // /**
    //  * Get supervisor's assigned Tickets
    //  */
    // public function supervisorExceptions() {
    //     return $this->hasMany(Exception::class, 'hod_id');
    // }

    /**
      * Check if user is an exception admin
      */
    public function isExceptionAdmin() {
        return (trim($this->department) == 'INTERNAL CONTROL & AUDIT'); // || $this->isGMD();
    }

    /**
      * Check if user is an GMD
      */
    public function isGMD() {
        // return $this->email == 'bolawoye@primera-africa.com';
        return $this->email == env('GMD_EMAIL');
    }
}
