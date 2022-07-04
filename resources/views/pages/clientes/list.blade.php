@extends('layout.layout')
@section('title','Personal')
@section('content')
<h2>Lista de Clientes Actuales</h2>
@auth
    <a href="{{ route('clientes.create') }}">Ingresar Cliente</a>
@endauth
<table class="table">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> DNI </th>
            <th scope="col"> Nombre </th>
            <th scope="col"> Nro Telef&oacute;nico </th>
            <th scope="col"> Fecha Registro </th>
            <th scope="col"> &Uacute;ltima Actualizaci&oacute;n </th>
        </tr>
    </thead>
        @foreach($clientes as $item)
        <tr>
            <th scope="row">
                <a href="{{ route('clientes.show',$item->id_cli) }}">{{ $item->id_cli }}</a>
            </th>
            <td>{{ $item->dni }}</td>
            <td>{{ $item->nom_cli }}</td>
            <td>{{ $item->num_tel_cel }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
        <tr>
        @endforeach
</table>
<ul class="d-flex justify-content-center">
    {!! $clientes->links('layout.paginationlinks') !!}
</ul>
@endsection