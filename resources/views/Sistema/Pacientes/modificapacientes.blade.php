@extends('plantilla')

@section('contenido')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-11 ml-auto mr-auto">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Editar Paciente</h4>
          <p class="card-category">Completa este formulario</p>
        </div>
        <div class="card-body">
          <form action="{{ route ('guardacambiospaciente')}}" method="POST">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label class="bmd-label-floating">Clave paciente</label>
                  <input type="text" class="form-control" value="{{$consulta->idpaciente}}" readonly="readonly" name="idpaciente" >
                </div>
              </div>

            </div>

              <div class="row">

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Nombre</label>
                  <input type="text" class="form-control" value="{{$consulta->nombre}}" name="nombre">
                  @if($errors->first('nombre'))
                        <p class="text-danger"> {{$errors->first('nombre')}} </p>
                        @endif
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Apellido Paterno</label>
                  <input type="text" class="form-control" value="{{$consulta->apellidop}}" name="apellidop">
                  @if($errors->first('apellidop'))
                        <p class="text-danger"> {{$errors->first('apellidop')}} </p>
                        @endif
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Apellido Materno</label>
                  <input type="text" class="form-control" value="{{$consulta->apellidom}}" name="apellidom">
                  @if($errors->first('apellidom'))
                    <p class="text-danger">{{$errors->first('apellidom')}}</p>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Edad</label>
                  <input type="text" class="form-control" value="{{$consulta->edad}}" name="edad">
                  @if($errors->first('edad'))
                    <p class="text-danger">{{$errors->first('edad')}}</p>
                  @endif
                </div>
              </div>
            </div>

            <div class="row">

              <div class="col-md-3">
                <div class="form-group">
                  <label class="">Sexo</label>
                  @if($consulta->sexo=='M')
                  <div>
                      <input type="radio" id="sexo1" name="sexo"  value = "M" checked=""> Masculino
                      <input type="radio" id="sexo2" name="sexo"  value = "F"> Femenino
                  </div>
                  @else
                  <div>
                    <input type="radio" id="sexo1" name="sexo"  value = "M" > Masculino
                    <input type="radio" id="sexo2" name="sexo"  value = "F" checked=""> Femenino
                  </div>
                  @endif
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Tipo de sangre</label>
                  <input type="text" class="form-control" value="{{$consulta->tiposangre}}" readonly="readonly" name="tiposangre" >
                  @if($errors->first('tiposangre'))
                    <p class="text-danger">{{$errors->first('tiposangre')}}</p>
                  @endif
                </div>
              </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Telefono</label>
                    <input type="text" class="form-control" value="{{$consulta->telefono}}" name="telefono">
                    @if($errors->first('telefono'))
                          <p class="text-danger"> {{$errors->first('telefono')}} </p>
                          @endif
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Correo electronico</label>
                    <input type="text" class="form-control" value="{{$consulta->correo}}" name="correo">
                    @if($errors->first('correo'))
                          <p class="text-danger"> {{$errors->first('correo')}} </p>
                          @endif
                  </div>
                </div>



            </div>


            <button type="submit" class="btn btn-primary pull-right">Guardar paciente</button>
            <a href="{{route('reportepacientes')}}"
              <button type="submit" class="btn btn-primary pull-right">Salir</button>
            </a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@stop
