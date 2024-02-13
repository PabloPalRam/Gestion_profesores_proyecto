<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'curso_escolar' => 'required|integer',
            'curso' => 'required|string|min:3|max:30',
            'denominacion' => 'nullable|string|max:30',
            'turno' => 'required|in:Mañana,Tarde',
        ];
    }

    public function attributes()
    {
        return [
            'curso_escolar' => 'Curso escolar del grupo',
            'curso' => 'Curso del grupo',
            'denominacion' => 'Denominación del grupo',
            'turno' => 'Turno del grupo',
        ];
    }

    public function messages()
    {
        return [

            'curso_escolar.required' => 'El campo :attribute es requerido',
            'curso_escolar.integer' => 'El campo :attribute debe ser un número entero',

            'curso.required' => 'El campo :attribute es requerido',
            'curso.string' => 'El campo :attribute debe ser una cadena de texto',
            'curso.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'curso.max' => 'El campo :attribute no puede tener más de :max caracteres',

            'denominacion.string' => 'El campo :attribute debe ser una cadena de texto',
            'denominacion.max' => 'El campo :attribute no puede tener más de :max caracteres',

            'turno.required' => 'El campo :attribute es requerido',
            'turno.in' => 'El valor del campo :attribute debe ser Mañana o Tarde',
        ];
    }
}
