<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LuggageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ticket' => $this->ticket,
            'tag' => $this->tag,
            'size' => $this->size,
            'price' => $this->price,
        ];
    }
}
