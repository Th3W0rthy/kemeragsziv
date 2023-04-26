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
            'id' => $this->id,
            'number' => $this->number,
            'departure' => $this->departure->format("Y-m-d H:i"),
            'arrival' => $this->arrival->format("Y-m-d H:i"),
            'duration' => $this->duration()->format("%H:%i"),
            'departure_airport' => $this->departureAirport->name,
            'departure_country' => $this->departureAirport->country,
            'departure_settlement' => $this->departureAirport->settlement,
            'departure_iata' => $this->departureAirport->iata,
            'arrival_airport' => $this->arrivalAirport->name,
            'arrival_country' => $this->arrivalAirport->country,
            'arrival_settlement' => $this->arrivalAirport->settlement,
            'arrival_iata' => $this->arrivalAirport->iata,
            'airline' => $this->airline->name,
            'airline_website' => $this->airline->website,
            'airline_phone' => $this->airline->phone,
            'airline_email' => $this->airline->email,
            'iata' => $this->airline->iata,
            'icao' => $this->airline->icao,
            'aircraft' => $this->aircraft->manufacturer . " " . $this->aircraft->model,
            'basic_price' => $this->basic_price,
            'ground_handler' => $this->ground_handler,
        ];
    }
}