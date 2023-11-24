<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Contracts\Validation\Validator;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Altere para true para permitir que este request seja processado
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'descricao' => 'required',
            'preco' => 'required|numeric|min:0.01',
            'quantidade' => 'required|numeric',
        ];
    }

    public function message()
    {
        if($this->input('preco') < 0.01){
            return [
                'preco.min' => 'O preço deve ser maior que 0',
            ];
        }
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'descricao.required' => 'O campo descrição é obrigatório',
            'preco.required' => 'O campo preço é obrigatório',
            'quantidade.required' => 'O campo quantidade é obrigatório',
        ];
    }

    protected function failedValidation(Validator $validator){
        $response = response()->json([
            'message' => 'Erro de validação',
            'errors' => $validator->errors()
        ], 422);
        throw new \Illuminate\Validation\ValidationException($validator, $response);
    }
}