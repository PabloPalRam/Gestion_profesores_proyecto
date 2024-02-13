<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeccionCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'horas' => 'nullable|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'horas' => 'Horas',
        ];
    }

    public function messages()
    {
        return [
            'horas.numeric' => 'El campo :attribute debe ser un número',
        ];
    }
}
