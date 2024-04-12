<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'primerNombre' => 'required|max:60',
            'segundoNombre' => 'nullable|max:60',
            'primerApellido' => 'required|max:60',
            'segundoApellido' => 'required|max:60',
            'correo' => 'required|email|max:60',
            //'noCuenta' => 'required|max:7',
            'noCuenta' => 'required|min:7|max:7',
            'estado' => 'nullable|numeric|min:0|max:1',
            'fecha_registro' => 'required|date_format:Y-m-d\TH:i',
        ];
    }
}
