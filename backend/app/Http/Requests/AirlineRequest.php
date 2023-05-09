<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirlineRequest extends FormRequest
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
            'name' => "required|string|min:1|max:255",
            'phone' => "string|min:1|max:12",
            'email' => "string|min:1|max:255",
            'website' => "string|min:1|max:255",
            'iata' => "string|min:2|max:2",
            'icao' => "string|min:3|max:3",
        ];
    }
}
