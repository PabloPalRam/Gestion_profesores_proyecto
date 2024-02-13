<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormacionUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'denominacion' => 'required|string|min:3|max:30|unique:formacion,denominacion',
            'siglas' => 'required|string|min:3|max:30|unique:formacion,siglas',
        ];
    }

    public function attributes()
    {
        return [
            'denominacion' => 'Denominación de formación',
            'siglas' => 'Siglas de formación',
        ];
    }

    public function messages()
    {
        return [

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
        ];
    }
}
