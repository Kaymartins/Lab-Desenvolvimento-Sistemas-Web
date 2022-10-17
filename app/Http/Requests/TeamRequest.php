<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'subject' => 'string|required|min:3',
            'year' => 'required|numeric|min:4',
        ];
    }

    public function attributes()
    {
        return [
            'subject' => 'disciplina',
            'year' => 'ano'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'numeric' => 'O campo :attribute deve ser preenchido por numeros',
            'min' => 'O campo :attribute deve ter mais que :min caracteres',
        ];
    }
}
