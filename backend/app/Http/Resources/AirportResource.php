<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AirportResource extends JsonResource
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
            'name' => $this->name,
            'time_zone' => $this->time_zone,
            'phone' => $this->phone,
            'email' => $this->email,
            'website' => $this->website,
            'continent' => $this->continent,
            'country' => $this->country,
            'settlement' => $this->settlement,
        ];
    }
}
