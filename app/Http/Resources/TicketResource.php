<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryResource;

class TicketResource extends JsonResource
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
        return [
            'id' => $this->id,
            'ticket_id' => $this->ticket_id,
            'is_assigned' => $this->is_assigned,
            'department' => new DepartmentResource($this->department),
            'unit' => new UnitResource($this->unit),
            'category' => new CategoryResource($this->category),
            'message' => $this->message,
            'assigned_to' => $this->is_assigned ? $this->assignedTo : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
