<?php

namespace sisManutencao\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RedeFormRequest extends FormRequest
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
 
            'unidade'=>'max:256',
            'marca'=>'max:256',
            'patrimonio'=>'required|max:256',
            'ip'=>'max:256',
            'mascara'=>'max:256',
            'gateway'=>'max:256',
        ];
    }
}
