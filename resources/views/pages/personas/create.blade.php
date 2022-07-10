@extends('layout.layout')
@section('title','Personal | Registro')
@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Registrar colaborador</th>
    </tr>
    <form action="{{ route('personas.store') }}" method="post" enctype="multipart/form-data">
        @include('pages.shared.perfrm',['btnText'=>'Guardar'])
    </form>
</table>
@endsection