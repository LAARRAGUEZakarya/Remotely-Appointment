<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user()?->role === 'client' or 'admin';
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
            'email' => ['required', 'string', 'email'],
            'phone' => ['required'],
            'adress' => ['required'],
            'image_url' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();
        
        if ($this->hasFile('image_url')) {
           
            $path =$this->file('image_url')->store("image_user");
            $validated['image_url'] = $path;       
        }

        return $validated;
    }
}
