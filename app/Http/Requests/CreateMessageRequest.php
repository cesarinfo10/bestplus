<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateMessageRequest extends Request
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
            'nombre'=>'required',
            //para añadar mas de una regla sw separa con |
            'email'=>'required|email',
            //min:5 son las letras minimas
            'mensaje'=>'required|min:5'
        ];
    }
}
