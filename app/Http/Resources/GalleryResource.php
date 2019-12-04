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
            'src' => $this->url,
            'srct' => $this->url,
            'title' => $this->folder->name,
            'ID' => $this->id,
            'albumID' => $this->folder->id,
            'kind' => 'album'
        ];
    }
}
