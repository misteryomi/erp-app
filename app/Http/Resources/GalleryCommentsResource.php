<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GalleryCommentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            // 'id' => $this->id,
            'comment' => $this->comment,
            'user' => $this->is_anonymous ? null : new UserResource($this->user),
            'created_at' => $this->created_at,
        ];
    }
}
