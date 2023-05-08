<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
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
            //'user' => $this->users->name,
            //"flight" => $this->flights,
            'name' => $this->name,
            'sex' => $this->sex,
            'birth' => $this->birth->format("Y-m-d"),
            'email' => $this->email,
            'phone' => $this->phone,
            'billing_name' => $this->billing_name,
            'country' => $this->country,
            'postcode' => $this->postcode,
            'settlement' => $this->settlement,
            'address' => $this->address,
            'tax_number' => $this->tax_number,
            'price' => $this->price,
            //'seat_id' => $this->seats,
        ];
    }
}
