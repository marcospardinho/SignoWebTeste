<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCliente extends FormRequest
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
     *
     */

    public function rules()
    {
        return [
            'nome' => 'required',
            'cpfcnpj' => 'required|min:11',
            'endereco' => 'required',
            'cidade' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'telefone' => 'required',
            'cep' => 'required',
            'uf' => 'required',
            'bairro' => 'required',
            'numero' => 'required',
            'cidade' => 'required',
            'dt_nascimento' => 'required',
        ];
    }
}
