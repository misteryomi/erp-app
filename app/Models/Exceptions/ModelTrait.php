<?php

namespace App\Models\Exceptions;

use \Carbon\Carbon;

trait ModelTrait
{
    public function getFormatedDateAttribute() {
        return $this->created_at ? $this->created_at->toDayDateTimeString() : null;
    }

    public function formatDate($date) {
        return Carbon::parse($date)->toDayDateTimeString();;
    }
}
