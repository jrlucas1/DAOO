<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtividadesRequest extends FormRequest
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
            'desc' => 'required|max:255', 
            'valor' => 'required|numeric', 
            'status' => 'required|max:255', 
        ];
    }

    public function message(): array
    {
        return [
            'desc.required' => 'O campo descrição é obrigatório',
            'valor.required' => 'O campo valor é obrigatório',
            'status.required' => 'O campo status é obrigatório',
        ];
    }
}
