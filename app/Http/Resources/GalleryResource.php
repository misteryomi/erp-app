<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
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
            'id' => $this->id,
            'src' => $this->url,
            'thumbnail' => $this->url,
            'thumbnailWidth' => 320,
            'thumbnailHeight' => 213,
            'caption' => $this->caption
        ];
    }
}
