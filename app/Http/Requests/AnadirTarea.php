<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnadirTarea extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
        ];
    }

    public function messages() {
        return [
            'nombre.required' => '¡Debes rellenar el campo nombre para poder crear un usuario!',
            'nombre.max' => '¡El campo nombre no puede tener más de 255 caracteres!',
            'apellido.required' => '¡Debes rellenar el campo apellido para poder crear un usuario!',
            'apellido.max' => '¡El campo apellido no puede tener más de 255 caracteres!',
        ];
    }
}
