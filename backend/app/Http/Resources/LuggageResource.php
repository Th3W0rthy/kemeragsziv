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
            'tag' => $this->tag(),
            'luggageData' => $this->luggageData(),
            'luggage_logs' => LogResource::collection($this->luggage_logs),
            'size' => $this->size,
            'desc' => $this->desc,
            'price' => $this->price,
        ];
    }
}
