<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class TicketRequest extends FormRequest
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
            'user' =>  "required|integer|exists:users,id",
            "flight" =>  "required|integer|exists:flights,id",
            'name' => "required|string|min:1|max:255",
            'sex' => ["required", ValidationRule::in("male", "female"), "min:1", "max:255"],
            'birth' => "required|date",
            'email' => "required|string|min:1|max:255",
            'phone' => "required|string|min:1|max:12",
            'billing_name' => "required|string|min:1|max:255",
            'country' => "required|string|min:1|max:255",
            'postcode' => "required|integer",
            'settlement' => "required|string|min:1|max:255",
            'address' => "required|string|min:1|max:255",
            'tax_number' => "integer",
            'price' => "required|integer",
            'seat' => "required|integer|exists:seats,id",
        ];
    }
}
