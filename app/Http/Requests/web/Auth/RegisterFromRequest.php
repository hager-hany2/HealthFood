<?php

namespace App\Http\Requests\web\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFromRequest extends FormRequest
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
            'username' => 'required|min:4',
            'email' => 'required|email|min:11|unique:user,id',
            'password' => 'required|min:6',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg,svg.png',

        ];
    }
}
