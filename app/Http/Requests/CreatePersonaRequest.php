<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CreatePersonaRequest extends FormRequest
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
            'dni'=>'required',
            'nom_per'=>'required',
            'fec_nac'=>'required',
            'num_tel_cel'=>'required',
            'direccion'=>'required',
            'id_cargo'=>'required',
            'id_tiend'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'dni.required'=>'Se necesita el campo DNI.',
            'nom_per.required'=>'Se necesita el campo NOMBRE.',
            'fec_nac.required'=>'Se necesita el campo FECHA NACIMIENTO.',
            'num_tel_cel.required'=>'Se necesita el campo NUMERO TELEFONICO.',
            'direccion.required'=>'Se necesita el campo DIRECCIÓN.',
            'id_cargo.required'=>'Se necesita el campo CARGO.',
            'id_tiend.required'=>'Se necesita el campo TIENDA.'
        ];
    }
}
