<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'time_zone' => "required|string|min:3|max:3",
            'phone' => "string|min:1|max:9",
            'email' => "string|min:1|max:12",
            'website' => "string|min:1|max:255",
            'continent' => "required|string|min:1|max:25",
            'country' => "required|string|min:1|max:50",
            'settlement' => "required|string|min:1|max:255",
        ];
    }
}
