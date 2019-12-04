<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryResource;

use \Carbon\Carbon;

class TicketExportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        $assignment = $this->assignment($this->user_id);
        return [
            'ticket_id' => "$this->ticket_id",
            'department' => $this->department->name,
            'unit' => $this->unit->name,
            'category' => $this->category->name,
            'issue' => $this->title,
            'details' => $this->message,
            'created_by' => $this->user->name,
            'is_assigned' => $this->is_assigned ? 'Assigned' : 'Not yet assigned',
            'assigned_to' => $this->is_assigned ? $this->assignedTo->name : '-',
            'assigned_at' => $this->is_assigned && $assignment ? $this->formatDate($assignment->created_at) : '-',
            'created_at' => $this->formated_date,
            'solved_at' => $this->solved_at ? $this->formatDate($this->solved_at) : '-',
            'turn_around_time' => $this->solved_at ? Carbon::parse($this->assignedTo->created_at)->diff(Carbon::parse($this->solved_at))->format('%H:%I:%S') : '',
        ];
    }
}
