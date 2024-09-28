<?php

namespace App\Http\Requests\web;

use Illuminate\Foundation\Http\FormRequest;

class ContactFromRequest extends FormRequest
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
            'name' => 'required|min:4',
            'phone' => 'required|min:11',
            'info' => 'required|min:20',


        ];
    }
}
