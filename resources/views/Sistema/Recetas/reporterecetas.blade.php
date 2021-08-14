@extends('plantilla')

@section('contenido')
<style>
  table th{
    text-align:center;
  }
  table tr{
    text-align:center;
  }
</style>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Reporte Recetas</h4>
        </div>
        <div>
        </div>
        <div>
        <a href="{{url('exportrecetas')}}">
                        <img src="{{ asset('excel.png') }}" width="55" height="55" style="float: right" />
                    </a>
          <a href="{{url('pdfrecetas')}}">
                          <img src="{{ asset('pdf.png') }}" width="55" height="55" style="float: right" />
                      </a>
          <a href="{{route ('vistareceta')}}">
              <button type="submit" class="btn btn-primary pull-right">Nueva receta</button>
            </a>
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
                <th> Médico </th>
                <th> Medicamento </th>
              
                <th> Periodo </th>
                <th> Total a pagar </th>
                <th> Operaciones </th>
              </thead>

              <tbody>
                @foreach($consulta as $c)
                  <tr>
                    <td>{{$c->idreceta}}</td>
                    <td>{{$c->fecha}}</td>
                    <td>{{$c->paciente}}</td>
                    <td>{{$c->medico}}</td>
                    <td>{{$c->medicamento}} </td>
                   
                    <td>{{$c->periodo}} </td>
                    <td>{{$c->totalpagar}}</td>
                    <td>
                              <a href="{{route('unicareceta',['idreceta'=>$c->idreceta])}}">
                              <button type="button" class="btn btn-success btn-sm">Imprimir Receta</button>
                              </a>
                              <a href="{{route('borrarreceta',['idreceta'=>$c->idreceta])}}">
                              <button type="button" class="btn btn-danger btn-sm">Borrar</button>
                              </a>
                              
                              
                              
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
