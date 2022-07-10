@extends('layout.layout')
@section('title','Productos')
@section('content')
<h2>Lista de Productos</h2>
@auth
    <a href="{{ route('productos.create') }}">Ingresar Personal</a>
@endauth
<!-- https://www.youtube.com/watch?v=Mylh7H844Ro -->
<table class="table">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Proveedor </th>
            <th scope="col"> Nombre </th>
            <th scope="col"> Ficha </th>
            <th scope="col"> Descripci&oacute;n </th>
            <th scope="col"> Categor&iacute;a </th>
            <th scope="col"> Prec. Venta </th>
            <th scope="col"> Prec. Compra </th>
            <th scope="col"> Garant&iacute; </th>
            <th scope="col"> Obsequio </th>
            <th scope="col"> Seg. Mano </th>
            <th scope="col"> Stock Minimo </th>
            <th scope="col"> Stock Actual </th>
            <th scope="col"> Stock M&aacute;ximo </th>
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