@extends('layout.layout')
@section('title','Personal | Detalle '. $persona->id_per)
@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <td colspan="4">{{ $persona->dni }} {{ $persona->nom_per }}
            @auth
                <a href="{{ route('personas.edit',$persona) }}">Editar</a>
            @endauth
        </td>
        <td colspan="4">
            <form action="{{ route('personas.destroy',$persona) }}" method='POST'>
                @csrf @method('DELETE')
                <button>Eliminar</button>
            </form>
        </td>
    </tr>
    <tr>
        <th>Direcci&oacute;n</th>
        <td>{{ $persona->direccion }}</td>
        <th>Fecha Nacimiento</th>
        <td>{{ $persona->fec_nac }}</td>
        <th>Estado Civil</th>
        <td>{{ $persona->est_civ }}</td>
    </tr>
    <tr>
        <th>Numero Telef.</th>
        <td>{{ $persona->num_tel_cel }}</td>
        <th>Cargo</th>
        <td>{{ $persona->id_cargo }}</td>
        <th>Tienda</th>
        <td>{{ $persona->id_tiend }}</td>
    </tr>
</table>
@endsection