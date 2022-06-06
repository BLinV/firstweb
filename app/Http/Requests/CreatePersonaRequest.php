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
            'dni'=>'unique:personas,dni',
            'dni'=>'size:8',
            'nom_per'=>'required',
            'nom_per'=>'between:10,70',
            'fec_nac'=>'required',
            'est_civ'=>'required',
            'num_tel_cel'=>'required',
            'num_tel_cel'=>'unique:personas,num_tel_cel',
            'num_tel_cel'=>'between:6,9',
            'direccion'=>'required',
            'direccion'=>'between:10,100',
            'id_cargo'=>'required',
            'id_tiend'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'dni.required'=>'Se necesita el campo DNI.',
            'dni.unique'=>'El DNI ingresado ya esta registrado.',
            'dni.size'=>'Se necesita que el campo DNI tenga 8 dígitos.',
            'nom_per.required'=>'Se necesita el campo NOMBRE.',
            'nom_per.between'=>'Se necesita el campo NOMBRE tenga entre 10 y 70 caracteres.',
            'fec_nac.required'=>'Se necesita el campo FECHA NACIMIENTO.',
            'est_civ.required'=>'Se necesita el campo ESTADO CIVIL.',
            'num_tel_cel.required'=>'Se necesita el campo NUMERO TELEFONICO.',
            'num_tel_cel.unique'=>'El NUMERO TELEFONICO ingresado ya esta registrado.',
            'num_tel_cel.between'=>'Se necesita que el campo NUMERO TELEFONICO tenga entre 6 y 9 dígitos.',
            'direccion.required'=>'Se necesita el campo DIRECCIÓN.',
            'direccion.between'=>'Se necesita que el campo DIRECCIÓN tenga entre 10 y 100 caracteres.',
            'id_cargo.required'=>'Se necesita el campo CARGO.',
            'id_tiend.required'=>'Se necesita el campo TIENDA.'
        ];
    }
}
