<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GalleryFolderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $default_image = $this->pictures()->first();
        
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'default_image' => $default_image ? $default_image->url : null
        ];
    }
}
