<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AircraftResource extends JsonResource
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
            'airline' => $this->airline->name,
            'manufacturer' => $this->manufacturer,
            'model' => $this->model,
        ];
    }
}
