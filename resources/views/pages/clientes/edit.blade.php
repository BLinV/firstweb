@extends('layout.layout')
@section('title','Clientes | Actualizar')
@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Actualizar datos de cliente</th>
    </tr>
    <form action="{{ route('clientes.update',$cliente) }}" method="post">
        @method('PATCH')
        @include('pages.shared.clifrm',['btnText'=>'Actualizar'])
    </form>
</table>
@endsection