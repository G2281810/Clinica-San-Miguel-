@extends('plantilla')

@section('contenido')
<style>
  table th{
    text-align:center;
  }
  table tr{
    text-align:center;
  }
  .busqueda{
    margin-top:-53px;
    margin-right:280px;
  }
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Reporte medicos</h4>
        </div>
        <div>
          <a href="{{url('exportmedicos')}}">
            <img src="{{ asset('excel.png') }}" width="55" height="55" style="float: right"/>
          </a>
          <a href="{{url('pdfmedicos')}}">
            <img src="{{ asset('pdf.png') }}" width="55" height="55" style="float: right"/>
          </a>
          <a href="{{route('alta_medicos')}}">
            <button type="submit" class="btn btn-primary pull-right">Nuevo medico</button>
          </a>
        </div>
        <div>
          
        <div class="busqueda">
                    <form action="{{ route('buscar')}}" method="GET" class="form-inline my-2 my-lg-1"
                        style="float: right;">
                        <input class="form-control mr-sm-2" type="text" name="criterio" placeholder="Buscar"
                            aria-label="Buscar">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit" value="Buscar"><i
                                class="material-icons">search</i></button>
                    </form>
                </div>


        </div>
        {{-- Guardar --}}
        @if(Session::has('mensaje'))
        <div class="alert alert-success">{{Session::get('mensaje')}}</div>
        @endif

        {{-- Modificar --}}
        @if(Session::has('mensajemodifica'))
        <div class="alert alert-info">{{Session::get('mensajemodifica')}}</div>
        @endif

        {{-- Desactivar --}}
        @if(Session::has('mensajedesactiva'))
        <div class="alert alert-warning">{{Session::get('mensajedesactiva')}}</div>
        @endif

        {{-- Borrar --}}
        @if(Session::has('mensajeerror'))
        <div class="alert alert-danger">{{Session::get('mensajeerror')}}</div>
        @endif

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Clave</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo electronico</th>
                <th>Especialidad</th>
                <th>Horario</th>
                <th>Operaciones</th>
              </thead>

              <tbody>
                @foreach($res as $c)
                  <tr>
                       <td>{{$c->idmedico}}</td>
                        <td> <img src="{{ asset('archivos/'. $c->img)}}" height="70" witd="70">
                            <div align="center">
                                <a href="{{route('descarga_imagen',[$c->img])}}"> <img src="./archivos/iconodes.jpg" height="30" width="30"> </a>
                            </div>
                            </td>
                        <td>{{$c->appaterno}} {{$c->apmaterno}} {{$c->nombre}}</td>
                        <td>{{$c->telefono}}</td>
                        <td>{{$c->correo}}</td>
                        <td>{{$c->especialidad}}</td>
                        <td>{{$c->hora_entrada}} - {{$c->hora_salida}}</td>

                    <td>
                            <a href="{{route('modifica_medicos',['idmedico'=>$c->idmedico])}}">
                                <button type="button"  class="btn btn-info btn-sm">Modificar</button>
                            </a>
                            @if($c -> deleted_at)
                            <a href="{{route('activar_medicos',['idmedico'=>$c->idmedico])}}">
                                <button type="button" class="btn btn-success btn-sm">Activar</button>
                            </a>
                            <a href="{{route('eliminar_medicos',['idmedico'=>$c->idmedico])}}">
                                <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                            </a>
                            @else
                            <a href="{{route('desactivar_medicos',['idmedico'=>$c->idmedico])}}">
                                <button type="button" class="btn btn-warning btn-sm">Desactivar</button>
                            </a>
                            @endif
                        </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
