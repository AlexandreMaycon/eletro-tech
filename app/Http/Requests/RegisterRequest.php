<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nome' => 'required|string',
            'email' => 'required|email|string',
            'cpf' => 'required',
            'endereco' => 'required|string',
            'telefone' => 'required',
            'password' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'nome' => 'Nome é obrigatório',
            'nome.string' => 'Nome deve ser letras exemplo: Alexandre',
            'email' => 'Email é obrigatorio',
            'email.email' => 'Deve ser um email',
            'cpf' => 'CPF é obrigatório',
            // 'cpf.integer' => 'Somente números',
            
            'endereco' => 'Endereço é obrigatório',
            'telefone' =>  'Telefone é obrigatório',
            // 'telefone.integer' =>  'Somente números',
            
            'password' => 'Senha é obrigatorio',
            'password.min' => 'Mínimo: 8 caracteres'
        ];
    }
}
