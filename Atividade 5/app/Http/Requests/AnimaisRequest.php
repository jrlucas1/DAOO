<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'sexo.required' => 'O campo sexo é obrigatório',
            'peso.required' => 'O campo peso é obrigatório',
            'idade.required' => 'O campo idade é obrigatório',
        ];
    }
}