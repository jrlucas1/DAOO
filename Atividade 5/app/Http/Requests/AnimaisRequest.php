<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Contracts\Validation\Validator;

class AnimaisRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Change to true to allow this request to be processed
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
            'sexo' => 'required|max:2',
            'peso' => 'required|numeric',
            'idade' => 'required|integer',
        ];
    }

    public function message()
    {
        if($this->input('idade') < 0){
            return [
                'idade.min' => 'A idade deve ser maior que 0',
            ];
        }
        if($this->input('peso') < 0){
            return [
                'peso.min' => 'O peso deve ser maior que 0',
            ];
        }

        return [
            'nome.required' => 'O campo nome é obrigatório',
            'sexo.required' => 'O campo sexo é obrigatório',
            'peso.required' => 'O campo peso é obrigatório',
            'idade.required' => 'O campo idade é obrigatório',
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