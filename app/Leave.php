<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    //

    protected $fillable = [
        'type', 'no_days', 'start_date', 'end_date', 'leave_category', 'supervisor_id','reliever_id','leave_status',
        'leave_message','laravel_user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    protected $casts = [
        'handover_task' => 'array',
    ];
    /*    protected $dateFormat = 'Y-M-d H:i:s';*/

}
