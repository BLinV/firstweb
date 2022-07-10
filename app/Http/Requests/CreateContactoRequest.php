<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CreateContactoRequest extends FormRequest
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
            'nombre' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'nombre.required' => 'Se necesita un NOMBRE',
            'email.required' => 'Se necesita un EMAIL',
            'asunto.required' => 'Se necesita un ASUNTO',
            'mensaje.required' => 'Se necesita un MENSAJE'
        ];
    }
}
