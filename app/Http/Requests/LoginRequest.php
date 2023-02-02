<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|string',
            'password' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return[
            'email' => 'Email é obrigatório',
            'email.email' => 'Deve ser um email',
            'password' => 'Senha é obrigatório',
            'password.min' => 'Mínimo: 8 caracteres'
        ];
        
    }
}
