<?php

namespace App\Http\Resources;

use App\Models\Aircraft;
use App\Models\Airline;
use App\Models\Airport;
use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
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
            'number' => $this->number,
            'departure' => $this->departure,
            'arrival' => $this->arrival,
            'departure_airport' => Airport::findOrFail($this->departure_airport)->name,
            'arrival_airport' => Airport::findOrFail($this->arrival_airport)->name,
            'airline_id' => Airline::findOrFail($this->airline_id)->name,
            'aircraft_id' => Aircraft::findOrFail($this->aircraft_id)->model,
            'ground_handler' => $this->ground_handler,
        ];
    }
}
