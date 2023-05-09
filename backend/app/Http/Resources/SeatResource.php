<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SeatResource extends JsonResource
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
            'aircraft' => $this->aircraft->manufacturer . " " . $this->aircraft->model,
            'class' => $this->class->class,
            'seat_row' => $this->seat_row,
            'seat_col' => $this->seat_col,
        ];
    }
}
