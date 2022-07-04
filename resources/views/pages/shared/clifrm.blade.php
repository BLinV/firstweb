        @csrf
        <tr>
            <th>DNI</th>
            <td><input type="text" name="dni" maxlength="8" placeholder="Ingresa el DNI" value="{{ old('dni',$cliente->dni) }}"><br>{{ $errors->first('dni') }}</td>
        </tr>
        <tr>
            <th>NOMBRE</th>
            <td><input type="text" name="nom_cli" maxlength="70" placeholder="Ingresa el CORREO" value="{{ old('nom_cli',$cliente->nom_cli) }}"><br>{{ $errors->first('nom_cli') }}</td>
        </tr>
        <tr>
            <th>N&Uacute;MERO TELEF&Oacute;NICO</th>
            <td><input type="text" name="num_tel_cel" maxlength="9" placeholder="Ingresa el TELÉFONO" value="{{ old('num_tel_cel',$cliente->num_tel_cel) }}"><br>{{ $errors->first('num_tel_cel') }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button>{{ $btnText }}</button></td>
        </tr>