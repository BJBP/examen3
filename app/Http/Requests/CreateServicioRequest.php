<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
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
            //
            'nombres' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'fono' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'Se necesita los nombres del cliente',
            'email.required' => 'Se necesita el email del cliente',
            'direccion.required' => 'Se necesita la dirección del cliente',
            'fono.required' => 'Se necesita el teléfono del cliente',
        ];
    }
}
