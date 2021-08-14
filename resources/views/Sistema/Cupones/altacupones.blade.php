@extends('plantilla')

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 ml-auto mr-auto">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Alta Cupon</h4>
                    <p class="card-category">Completa este formulario</p>
                </div>
                <div class="card-body">
                    <form action="{{ route ('guardarcupon')}}" method="POST">
                        {{csrf_field()}}
                    <div class="row">
                         <div class="col-md-2">
                          <div class="form-group">
                            <label class="bmd-label-floating">Clave Cupon:</label>
                            <input type="text" class="form-control" value="{{$idesigue}}"  name="idcupon" disabled>
                          </div>
                        </div>

                     <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Seleccione paciente:</label>
                      <select class="custom-select" name="idpaciente" >
                        <option selected="selected" class="txtselect" value="{{old('idpaciente')}}"> Selecciona un paciente</option>
                          @foreach($pacientes as $paciente)
                          <option value="{{$paciente->idpaciente}}">{{$paciente->nombre}} {{$paciente->apellidop}} {{$paciente->apellidom}}</option>
                          @endforeach
                      </select>
                      @if($errors->first('idpaciente'))
                        <p class='text-danger'>{{$errors->first('idpaciente')}}</p>
                      @endif
                    </div>
                  </div>

                  <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Tipo de cupon</label>
                  <select class="custom-select" name="tipocupon">
                    <option selected="selected" class="txtselect" value=""> Selecciona un tipo de cupon</option>
                    <option class="txtselect" value="descuento consulta">Descuento en consulta</option>
                    <option class="txtselect" value="descuento medicamneto">Descuento en medicamento</option>
                    <option class="txtselect" value="descuento estudios">Descuento en estudios</option>
                  </select>
                    @if($errors->first('tipocupon'))
                        <p class='text-danger'>{{$errors->first('tipocupon')}}</p>
                    @endif
                </div>
              </div>
              </div>
              <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>¿Que cantidad de descuento se otorgara?</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> </label>
                    <input type="text" class="form-control" rows="3" value="{{old('descuento')}}" name="descuento">
                    @if($errors->first('descuento'))
                        <p class='text-danger'>{{$errors->first('descuento')}}</p>
                      @endif
                  </div>
                </div>
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <label>Fecha</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> </label>
                    <input type="date" class="form-control" rows="3" value="{{old('fecha')}}" name="fecha">
                    @if($errors->first('fecha'))
                        <p class='text-danger'>{{$errors->first('fecha')}}</p>
                      @endif
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Fecha vencimiento</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> </label>
                    <input type="date" class="form-control" rows="3" value="{{old('fechaven')}}" name="fechaven">
                    @if($errors->first('fechaven'))
                        <p class='text-danger'>{{$errors->first('fechaven')}}</p>
                      @endif
                  </div>
                </div>
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <label>Descripcion</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> </label>
                    <input type="text" class="form-control" rows="3" value="{{old('descripcion')}}" name="descripcion">
                    @if($errors->first('idpaciente'))
                        <p class='text-danger'>{{$errors->first('descripcion')}}</p>
                      @endif
                  </div>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right">Guardar cupon</button>
            <a href="{{route('reportecupon')}}"
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
