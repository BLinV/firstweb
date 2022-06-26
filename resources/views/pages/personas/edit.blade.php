@extends('layout.layout')
@section('title','Personal | Actualizar')
@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Actualizar datos de colaborador</th>
    </tr>
    <form action="{{ route('personas.update',$persona) }}" method="post">
        @method('PATCH')
        @include('pages.shared.perfrm',['btnText'=>'Actualizar'])
    </form>
</table>
@endsection