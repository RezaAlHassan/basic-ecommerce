<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:250',
            'description' => 'required|string|min:3|max:6000',
            'category' => 'required|string|min:3|max:6000',
            'price' => 'required|integer',
            'image' => 'required|image|max:1024|mimes:jpg,jpeg,png',
        ];
    }
}
