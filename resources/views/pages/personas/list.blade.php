@extends('layout.layout')
@section('title','Personal')
@section('content')
<h2>Lista de Personal Actual</h2>
@auth
    <a href="{{ route('personas.create') }}">Ingresar Personal</a>
@endauth
<!-- https://www.youtube.com/watch?v=Mylh7H844Ro -->
<table class="table">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> DNI </th>
            <th scope="col"> Nombre </th>
            <th scope="col"> Fecha Nacimiento </th>
            <th scope="col"> Estado Civil </th>
            <th scope="col"> Nro Telef&oacute;nico </th>
            <th scope="col"> Direcci&oacute;n </th>
            <th scope="col"> Cargo </th>
            <th scope="col"> Tienda </th>
            <th scope="col"> Fecha Registro </th>
            <th scope="col"> &Uacute;ltima Actualizaci&oacute;n </th>
        </tr>
    </thead>
        @foreach($personas as $item)
        <tr>
            <th scope="row">
                <a href="{{ route('personas.show',$item->id_per) }}">{{ $item->id_per }}</a>
            </th>
            <td>{{ $item->dni }}</td>
            <td>{{ $item->nom_per }}</td>
            <td>{{ $item->fec_nac }}</td>
            <td>{{ $item->est_civ }}</td>
            <td>{{ $item->num_tel_cel }}</td>
            <td>{{ $item->direccion }}</td>
            <td>{{ $item->id_cargo }}</td>
            <td>{{ $item->id_tiend }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
        <tr>
        @endforeach
</table>
<ul class="d-flex justify-content-center">
    {!! $personas->links('layout.paginationlinks') !!}
</ul>
@endsection