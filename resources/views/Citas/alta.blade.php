<form action="{{route('citaguardada')}}" method="post">
    {{csrf_field()}}
    <input type="text" class="form-control" value="{{$idesigue}}" name="idcita" >
    paciente:
    <select name="idpaciente">
        <option selected="selected" value="{{old('idpaciente')}}"> Selecciona un paciente</option>
        @foreach($pacientes as $pac)
        <option value="{{$pac->idpaciente}}">{{$pac->apellidop}} {{$pac->apellidom}} {{$pac->nombre}}</option>
        @endforeach
    </select>


    especialidad:
    <select name="idesp">
        <option selected="selected" value="{{old('idesp')}}"> Selecciona una especialidad</option>
        @foreach($especialidades as $esp)
        <option value="{{$esp->idesp}}">{{$esp->especialidad}}</option>
        @endforeach
    </select> <br>
    fecha : <input type="date" name="fecha" id="fecha"> <br>
    <input type="submit" value="Guardar">
</form>
