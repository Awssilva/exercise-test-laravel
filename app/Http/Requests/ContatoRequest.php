<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        switch($this->method()) {
            case "POST": // CRIAÇÃO DE UM NOVO REGISTRO
                return [
                    'nome' => 'required|max:100',
                    'telefone' => 'required|max:15',
                    'email' => 'email|max:200|unique:contatos',
                ];
                break;

            case "PUT": // ATUALIZAÇÃO DE UM REGISTRO EXISTENTE
                return [
                    'nome' => 'required|max:100',
                    'telefone' => 'required|max:15',
                    'email' => 'email|max:200|unique:contatos,email,'.$this->id,
                ];
                break;
            default:break;
        }
    }
    
    public function messages()
    {
        return [
            'telefone.required' => 'O campo telefone é obrigatório',
            'nome.required' => 'O campo Nome é obrigatório',
            'email.email' => 'Informe um e-mail válido',
        ];
    }
}
