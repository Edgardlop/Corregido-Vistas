
    
    <label for="Nombre"> Nombre</label>
    <input type="text"  name="Nombre"  Value="{{ isset($empleado->Nombre)? $empleado->Nombre: ''}}" id="Nombre">
    <br>
    <label for="ApellidoPaterno"> Apellido Padre</label>
    <input type="text" name="ApellidoPaterno"   Value="{{ isset ($empleado->ApellidoPaterno) ?$empleado->ApellidoPaterno: '' }}" id="ApellidoPaterno">
    <br>
    <label for="ApellidoMaterno"> Apellido Madre</label>
    <input type="text" name="ApellidoMaterno"  Value="{{ isset ( $empleado->ApellidoMaterno)? $empleado->ApellidoMaterno:' ' }}"  id="ApellidoMaterno">
    <br>
    <label for="Correo"> Correo</label>
    <input type="text" name="Correo"  Value="{{ isset($empleado->Correo)?$empleado->Correo:''}}" id="Correo">
    <br>
    <label for="Foto"> Foto</label>
@if (isset($empleado->Foto))
    <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="Foto"  >
@endif
    <input type="file" name="Foto"   id="Foto">
    <br>
    <input type="submit" value="Guardar Datos"><br>

    <a href="{{ url('empleado/')}}">Regresar</a>