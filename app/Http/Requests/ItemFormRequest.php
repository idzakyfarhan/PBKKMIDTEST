<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemFormRequest extends FormRequest
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

            'items_name' => [
                'required',
                'max:255'
            ],

            'items_type' => [
                'required',
                'max:255'
            ],
            'items_conditions' => [
                'required',
                'max:255'
            ],
            'items_description' => [
                'required',
                'max:255'
            ],
            'items_defects' => [
                'required',
                'max:255'
            ],
            'items_amount' => [
                'required',
                'max:255'
            ],
        ];
    }
}
