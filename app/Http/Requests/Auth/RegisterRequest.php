<?php

namespace App\Http\Requests\Auth;

use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:20'],
            'last_name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                 'string'
                //,
                // Password::min(8)
                //     ->letters()
                //     ->numbers()
                //     ->symbols(),
            ],
            'phone' => ['required', 'numeric', 'digits:10', 'unique:users'],
            'termes' => ['required']
        ];
    }
}
