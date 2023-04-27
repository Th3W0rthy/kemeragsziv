<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFlightRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'number' => "required|string|min:6|max:10",
            'departure' => "required|date",
            'arrival' => "required|date",
            'departure_airport' => "required|integer|exists:airports,id",
            'arrival_airport' => "required|integer|exists:airports,id",
            'airline_id' => "required|integer|exists:airlines,id",
            'aircraft_id' => "required|integer|exists:aircrafts,id",
            'cost' => "required|integer",
            'basic_price' => "required|integer",
            'ground_handler' => "required|string|min:1|max:255",
        ];
    }
}
