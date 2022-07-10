        @csrf
        <tr>
            <td colspan="2">
                <div class="custom file">
                    <input type="file" name="foto" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Seleccione archivo:</label>
                </div>
            </td>
        </tr>
        <tr>
            <th>DNI</th>
            <td><input type="text" name="dni" maxlength="8" placeholder="Ingresa el DNI" value="{{ old('dni',$persona->dni) }}"><br>{{ $errors->first('dni') }}</td>
        </tr>
        <tr>
            <th>NOMBRE</th>
            <td><input type="text" name="nom_per" maxlength="70" placeholder="Ingresa el CORREO" value="{{ old('nom_per',$persona->nom_per) }}"><br>{{ $errors->first('nom_per') }}</td>
        </tr>
        <tr>
            <th>FECHA NACIMIENTO</th>
            <td>
                <input type="date" id="fec_nac" name="fec_nac" placeholder="yyyy-mm-dd" value="{{ old('fec_nac',$persona->fec_nac) }}" min="1980-01-01" max="2100-12-31">
                <br>{{ $errors->first('fec_nac') }}
            </td>
        </tr>
        <tr>
            <th>ESTADO CIVIL</th>
            <td><select name="est_civ" id="est_civ">
                    <option value='S' {{ old('est_civ',($persona->est_civ)) == 'S' ? 'selected' : '' }}>SOLTERO(A)</option>
                    <option value='C' {{ old('est_civ',($persona->est_civ)) == 'C' ? 'selected' : '' }}>CASADO(A)</option>
                    <option value='V' {{ old('est_civ',($persona->est_civ)) == 'V' ? 'selected' : '' }}>VIUDO(A)</option>
                    <option value='D' {{ old('est_civ',($persona->est_civ)) == 'D' ? 'selected' : '' }}>DIVORCIADO(A)</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>N&Uacute;MERO TELEF&Oacute;NICO</th>
            <td><input type="text" name="num_tel_cel" maxlength="9" placeholder="Ingresa el TELÉFONO" value="{{ old('num_tel_cel',$persona->num_tel_cel) }}"><br>{{ $errors->first('num_tel_cel') }}</td>
        </tr>
        <tr>
            <th>DIRECCI&Oacute;N</th>
            <td><input type="text" name="direccion" maxlength="100" placeholder="Ingresa la DIRECCIÓN" value="{{ old('direccion',$persona->direccion) }}"><br>{{ $errors->first('direccion') }}</td>
        </tr>
        <tr>
            <th>CARGO</th>
            <td><select name="id_cargo" id="id_cargo">
                    <option value=1 {{ old('id_cargo',($persona->id_cargo)) == '1' ? 'selected' : '' }}>GERENTE</option>
                    <option value=2 {{ old('id_cargo',($persona->id_cargo)) == '2' ? 'selected' : '' }}>EJECUTIVO DE VENTAS</option>
                    <option value=3 {{ old('id_cargo',($persona->id_cargo)) == '3' ? 'selected' : '' }}>ENCARGADO DE SOPORTE T&Eacute;CNICO</option>
                    <option value=4 {{ old('id_cargo',($persona->id_cargo)) == '4' ? 'selected' : '' }}>ENCARGADO DE CAJA</option>
                    <option value=5 {{ old('id_cargo',($persona->id_cargo)) == '5' ? 'selected' : '' }}>OPERADOR LOG&Iacute;STICO</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>TIENDA</th>
            <td><select name="id_tiend" id="id_tiend">
                    @foreach($tiendas as $item)
                    <option value="{{ $item->id_tiend }}">{{ $item->nombre }}</option>
                    @endforeach
                </select></td>
        </tr>
        <!--created_at, updated_at-->
        <tr>
            <td colspan="2" align="center"><button>{{ $btnText }}</button></td>
        </tr>