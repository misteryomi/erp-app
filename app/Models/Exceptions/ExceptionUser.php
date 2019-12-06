<?php

namespace App\Models\Exceptions;



trait ExceptionUser {


    /**
     * Returns tickets owned by this user
     */
    public function exceptions() {
        return $this->hasMany(Exception::class, 'assigned_to', 'laravel_user_id');
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
