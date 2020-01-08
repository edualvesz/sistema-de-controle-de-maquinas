<?php

namespace sisManutencao\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AguardoFormRequest extends FormRequest
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
            'regiao'=>'max:256',
            'unidade'=>'max:256',
            'marca'=>'max:256',
            'patrimonio'=>'required|max:256',
            'ip'=>'max:256',
            'data_chegada'=>'max:20',
            'situacao'=>'max:256',
            'problema'=>'max:256',
            'tecnico'=>'max:256',
            'liberado_em'=>'max:20',
            'enviado_em'=>'max:20',
        ];
    }
}
