<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:1', 'max:255'],
            'description' => ['required', 'string', 'min:1'],
            'category_id' => ['required', 'string', 'min:-2147483648', 'max:2147483647'],
            'address' => ['required', 'string', 'min:1', 'max:255'],
            'image' => ['required', 'mimes:jpg,png,jpeg', 'max:2048', 'min:10'],
            'start_date' => ['required', 'string', 'min:1', 'max:255'],
            'end_date' => ['required', 'string', 'min:1', 'max:255'],
            'price' => ['required', 'integer', 'min:-9223372036854775808', 'max:9223372036854775807'],
        ];
    }
}
