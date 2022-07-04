<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CreateClienteRequest extends FormRequest
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
            'dni'=>'unique:clientes,dni',
            'dni'=>'size:8',
            'nom_cli'=>'required',
            'nom_cli'=>'between:10,70',
            'num_tel_cel'=>'required',
            'num_tel_cel'=>'unique:clientes,num_tel_cel',
            'num_tel_cel'=>'between:6,9'
        ];
    }
    public function messages()
    {
        return[
            'dni.required'=>'Se necesita el campo DNI.',
            'dni.unique'=>'El DNI ingresado ya esta registrado.',
            'dni.size'=>'Se necesita que el campo DNI tenga 8 dígitos.',
            'nom_cli.required'=>'Se necesita el campo NOMBRE.',
            'nom_cli.between'=>'Se necesita el campo NOMBRE tenga entre 10 y 70 caracteres.',
            'num_tel_cel.required'=>'Se necesita el campo NUMERO TELEFONICO.',
            'num_tel_cel.unique'=>'El NUMERO TELEFONICO ingresado ya esta registrado.',
            'num_tel_cel.between'=>'Se necesita que el campo NUMERO TELEFONICO tenga entre 6 y 9 dígitos.'
        ];
    }
}
