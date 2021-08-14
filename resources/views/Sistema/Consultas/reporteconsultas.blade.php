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
          <h4 class="card-title ">Reportes de consulta</h4>
        </div>
        <div>
        
          
          <a href="{{url('pdfconsultas')}}">
            <img src="{{ asset('pdf.png') }}" width="55" height="55" style="float: right"/>
          </a>
          <?php $sessiontipou = session('sessiontipo'); ?>
          @if($sessiontipou=="administrador")
          <a href="{{url('export')}}">
            <img src="{{ asset('excel.png') }}" width="55" height="55" style="float: right"/>
          </a> 
          @endif
          <a href="{{route ('altaconsulta')}}">
            <button type="submit" class="btn btn-primary pull-right">Nueva consulta</button>
          </a>
          
        </div>
        
        <div class="busqueda">
                    <form action="{{ route('buscarconsulta')}}" method="GET" class="form-inline my-2 my-lg-1"
                        style="float: right;">
                        <input class="form-control mr-sm-2" type="text" name="criterio" placeholder="Buscar"
                            aria-label="Buscar">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit" value="Buscar"><i
                                class="material-icons">search</i></button>
                    </form>
                </div>

        

        {{-- GUARDAR --}}
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
        @if(Session::has('mensajeborrar'))
        <div class="alert alert-danger">{{Session::get('mensajeborrar')}}</div>
        @endif

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th> Clave </th>
                <th> Fecha </th>
                <th> Paciente </th>
                <th> Hora </th>
                <th> Área </th>
                <th> Médico </th>
                <th> Estatus </th>
                <th> Operaciones </th>
              </thead>

              <tbody>
                @foreach($res as $c)
                  <tr>
                    <td>{{$c->idconsulta}}</td>
                    <td>{{$c->fecha_consulta}}</td>
                    <td>{{$c->paciente}}</td>
                    <td>{{$c->hora_consulta}}</td>
                    <td>{{$c->especialidad}}</td>
                    <td>{{$c->nombre}} {{$c->appaterno}} {{$c->apmaterno}}</td>
                    <td>{{$c->estatuscon}}</td>
                    <td>
                    
                    @if($sessiontipou=="administrador")
                              <a href="{{route('modificarconsulta',['idconsulta'=>$c->idconsulta])}}"
                              <button type="button" class="btn btn-info btn-sm">Modificar</button>
                              </a>
                              @if($c->deleted_at)
                              <a href="{{route('activarconsulta',['idconsulta'=>$c->idconsulta])}}"
                              <button type="button" class="btn btn-success btn-sm">Activar</button>
                              <?php $sessiontipou = session('sessiontipo'); ?>
                              
                              <a href="{{route('borraconsulta',['idconsulta'=>$c->idconsulta])}}"
                              <button type="button" class="btn btn-danger btn-sm">Borrar</button>
                              </a>
                              
                              @else
                              
                      
                              <a href="{{route('desactivaconsulta',['idconsulta'=>$c->idconsulta])}}"
                              <button type="button" class="btn btn-warning btn-sm">Desactivar</button>
                              </a>
                              @endif
                              
                              @else
                              <a href="#"
                              <button type="button" class="btn btn-success btn-sm">Ver consulta</button>
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
