<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuloUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required|integer',
            'denominacion' => 'required|string|min:3|max:30|unique:modulo,denominacion,' . $this->id,
            'siglas' => 'required|string|min:3|max:30|unique:modulo,siglas,' . $this->id,
            'curso' => 'nullable|string|min:3|max:30',
            'especialidad' => 'nullable|string|min:3|max:30',
            'horas' => 'nullable|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'id' => 'ID',
            'denominacion' => 'Denominación del módulo',
            'siglas' => 'Siglas del módulo',
            'curso' => 'Curso del módulo',
            'especialidad' => 'Especialidad del módulo',
            'horas' => 'Horas del módulo',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'El campo :attribute es requerido',
            'id.integer' => 'El campo :attribute debe ser un número entero',

            'denominacion.required' => 'El campo :attribute es requerido',
            'denominacion.string' => 'El campo :attribute debe ser una cadena de texto',
            'denominacion.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'denominacion.max' => 'El campo :attribute no puede tener más de :max caracteres',
            'denominacion.unique' => 'El valor del campo :attribute ya está en uso',

            'siglas.required' => 'El campo :attribute es requerido',
            'siglas.string' => 'El campo :attribute debe ser una cadena de texto',
            'siglas.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'siglas.max' => 'El campo :attribute no puede tener más de :max caracteres',
            'siglas.unique' => 'El valor del campo :attribute ya está en uso',

            'curso.string' => 'El campo :attribute debe ser una cadena de texto',
            'curso.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'curso.max' => 'El campo :attribute no puede tener más de :max caracteres',

            'especialidad.string' => 'El campo :attribute debe ser una cadena de texto',
            'especialidad.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'especialidad.max' => 'El campo :attribute no puede tener más de :max caracteres',

            'horas.numeric' => 'El campo :attribute debe ser un número',
        ];
    }
}
