@extends('layout.layout')
@section('title','Clientes | Registro')
@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Registrar cliente</th>
    </tr>
    <form action="{{ route('clientes.store') }}" method="post">
        @include('pages.shared.clifrm',['btnText'=>'Guardar'])
    </form>
</table>
@endsection