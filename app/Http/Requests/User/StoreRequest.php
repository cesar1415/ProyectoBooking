<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'El campo nombre es requerido',

            'username.required'=>'El campo usuario es requerido',
            'username.unique'=>'El campo usuario tiene que ser unico',

            'email.required'=>'El campo email es requerido',
            'email.unique'=>'Este campo tiene que ser unico',

            'password.required'=>'La contraseña es requerida',
        ];
    }
}
