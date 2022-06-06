@extends('layout.layout')
@section('title','Personal | Registro')
@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Registro de personas</th>
    </tr>
    <form action="{{ route('personas.store') }}" method="post">
        @csrf
        <tr>
            <th>DNI</th>
            <td><input type="text" name="dni" maxlength="8"><br>{{ $errors->first('dni') }}</td>
        </tr>
        <tr>
            <th>NOMBRE</th>
            <td><input type="text" name="nom_per" maxlength="70"><br>{{ $errors->first('nom_per') }}</td>
        </tr>
        <tr>
            <th>FECHA NACIMIENTO</th>
            <td>
                <label for="fec_nac">Seleccione fecha:</label>
                <input type="date" id="fec_nac" name="fec_nac" placeholder="yyyy-mm-dd" value="" min="1980-01-01" max="2100-12-31">
                <br>{{ $errors->first('fec_nac') }}
            </td>
        </tr>
        <tr>
            <th>ESTADO CIVIL</th>
            <td><select name="est_civ" id="est_civ">
                    <option value='S'>SOLTERO(A)</option>
                    <option value='C'>CASADO(A)</option>
                    <option value='V'>VIUDO(A)</option>
                    <option value='D'>DIVORCIADO(A)</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>N&Uacute;MERO TELEF&Oacute;NICO</th>
            <td><input type="text" name="num_tel_cel" maxlength="9"><br>{{ $errors->first('num_tel_cel') }}</td>
        </tr>
        <tr>
            <th>DIRECCI&Oacute;N</th>
            <td><input type="text" name="direccion" maxlength="100"><br>{{ $errors->first('direccion') }}</td>
        </tr>
        <tr>
            <th>CARGO</th>
            <td><select name="id_cargo" id="id_cargo">
                    <option value=1>GERENTE</option>
                    <option value=2>EJECUTIVO DE VENTAS</option>
                    <option value=3>ENCARGADO DE SOPORTE T&Eacute;CNICO</option>
                    <option value=4>ENCARGADO DE CAJA</option>
                    <option value=5>OPERADOR LOG&Iacute;STICO</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>TIENDA</th>
            <td><select name="id_tiend" id="id_tiend">
                    @foreach($tiendas as $item)
                    <option value="{{ $item->id_tiend }}">{{ $item->direccion }}</option>
                    @endforeach
                </select></td>
        </tr>
        <!--created_at, updated_at-->
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>
@endsection