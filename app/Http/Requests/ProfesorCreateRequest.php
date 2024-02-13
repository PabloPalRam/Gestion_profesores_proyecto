<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesorCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //'id' => 'required|integer|unique:profesor,id',
            'usuario_seneca' => 'required|string|min:3|max:30|unique:profesor,usuario_seneca',
            'nombre' => 'required|string|min:3|max:30',
            'apellido1' => 'required|string|min:3|max:30',
            'apellido2' => 'nullable|string|min:3|max:30',
            'especialidad' => 'required|string|in:informático,sistema',
        ];
    }

    public function attributes()
    {
        return [
            'usuario_seneca' => 'Usuario de Seneca del Profesor',
            'nombre' => 'Nombre del Profesor',
            'apellido1' => 'Apellido1 del Profesor',
            'apellido2' => 'Apellido2 del Profesor',
            'especialidad' => 'Especialidad del Profesor',
        ];
    }

    public function messages()
    {
        return [

            'usuario_seneca.required' => 'El campo :attribute es requerido',
            'usuario_seneca.string' => 'El campo :attribute debe ser una cadena de texto',
            'usuario_seneca.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'usuario_seneca.max' => 'El campo :attribute no puede tener más de :max caracteres',
            'usuario_seneca.unique' => 'El valor del campo :attribute ya está en uso',

            'nombre.required' => 'El campo :attribute es requerido',
            'nombre.string' => 'El campo :attribute debe ser una cadena de texto',
            'nombre.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'nombre.max' => 'El campo :attribute no puede tener más de :max caracteres',

            'apellido1.required' => 'El campo :attribute es requerido',
            'apellido1.string' => 'El campo :attribute debe ser una cadena de texto',
            'apellido1.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'apellido1.max' => 'El campo :attribute no puede tener más de :max caracteres',

            'apellido2.string' => 'El campo :attribute debe ser una cadena de texto',
            'apellido2.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'apellido2.max' => 'El campo :attribute no puede tener más de :max caracteres',

            'especialidad.required' => 'El campo :attribute es requerido',
            'especialidad.string' => 'El campo :attribute debe ser una cadena de texto',
            'especialidad.in' => 'Los valores permitidos para el campo :attribute son: informático, sistema',
        ];
    }
}
