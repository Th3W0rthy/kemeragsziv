<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LuggageRequest extends FormRequest
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
            'ticket_id' => "required|integer",
            'tag' => "required|string|min:1|max:255",
            'size' => "required|string|min:1|max:1",
            'price' => "required|integer|min:1",
        ];
    }
}
