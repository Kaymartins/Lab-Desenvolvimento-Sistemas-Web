<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradeRequest extends FormRequest
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
            'task' => 'string|min:3|required',
            'grade' => 'numeric|required',
        ];
    }

    public function attributes()
    {
        return [
            'task' => 'tarefa',
            'grade' => 'nota'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'numeric' => 'O campo :attribute deve ser preenchido por numeros',
            'min' => 'O campo :attribute deve ter mais que 3 caracteres',
        ];
    }
}
