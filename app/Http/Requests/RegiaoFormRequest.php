<?php

namespace sisManutencao\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegiaoFormRequest extends FormRequest
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
            'nome'=>'required|max:256',
            'regiao'=>'max:256',
            'id_regiao'=>'max:256',
        ];
    }
}
