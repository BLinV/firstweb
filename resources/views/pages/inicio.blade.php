@extends('layout.layout')
@section('title','Inicio')
@section('content')
<table class="table">
    <tr>
        <th></th>
    </tr>
    <tr>
        <th><img id="social-fb" src="{{ Storage::url('images/logo.jpg') }}" style="width: 300px;"> </th>
        <th>
            <h4>Ovatec otorga el mayor grado de satisfacción y confianza a los clientes a través de una asesoría especializada y cercana, ofreciendo tanto una amplia variedad de productos con los precios más competitivos del mercado como con la preocupación de brindar un servicio amigable.</h4>
        </th>
    </tr>
</table>
@endsection