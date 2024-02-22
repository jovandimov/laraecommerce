<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'name' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'small_description' => ['nullable', 'string'],
            'description' => ['required', 'string'],
            'selling_price' => ['required', 'integer'],
            'original_price' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
            'trending' => ['nullable'],
            'status' => ['nullable'],
            'meta_title' => ['required', 'string'],
            'meta_keyword' => ['required', 'string'],
            'meta_description' => ['required', 'string'],

            'image' => [
                'nullable',
                // 'image|mimes:jpeg,png,jpg'
            ]

        ];
    }
}
