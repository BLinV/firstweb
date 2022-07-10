@extends('layout.layout') <!-- cambiar a detail -->
@section('title','Cliente | Detalle '. $cliente->id_per)
@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <td colspan="4">{{ $cliente->dni }} {{ $cliente->nom_per }}
            @auth
                <a href="{{ route('clientes.edit',$cliente) }}">Editar</a>
            @endauth
        </td>
        <td colspan="4">
            <form action="{{ route('clientes.destroy',$cliente) }}" method='POST'>
                @csrf @method('DELETE')
                <button>Eliminar</button>
            </form>
        </td>
    </tr>
    <tr>
        <th>Numero Telef.</th>
        <td>{{ $cliente->num_tel_cel }}</td>
    </tr>
</table>
@endsection