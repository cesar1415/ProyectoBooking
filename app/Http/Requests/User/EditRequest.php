<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
        $user = $this->route('user');
        return [
            'name' => 'required',
            'username' => ['required','unique:users,username,' . $user->id],
            'email' => 'required|unique:users,email,' . request()->route('user')->id,
            'password' => 'sometimes',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'El campo nombre es requerido',

            'username.required'=>'El campo usuario es requerido',
            'username.unique'=>'Este usuario ya esta en uso',

            'email.required'=>'El campo email es requerido',
            'email.unique'=>'Este email ya esta siendo usado por otro usuario',
        ];
    }
}
