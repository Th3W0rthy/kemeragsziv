<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Luggage_logResource extends JsonResource
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
            'luggage' => $this->luggage,
            'airport' => $this->airport,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
