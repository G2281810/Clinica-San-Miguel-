@extends('plantilla')

@section('contenido')


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Reportes de cupones</h4>
        </div>
        <div>
        <a href="{{url('exportcupones')}}">
                        <img src="{{ asset('excel.png') }}" width="55" height="55" style="float: right" />
                    </a>
        <a href="{{url('pdfcupones')}}">
                          <img src="{{ asset('pdf.png') }}" width="55" height="55" style="float: right" />
                      </a>
          <a href="{{route('altacupon')}}">
            <button type="submit" class="btn btn-primary pull-right">Nuevo Cupon</button>
          </a>
        </div> 

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th> Clave </th>
                <th> Paciente </th>
                <th> Cupon </th>
                <th> Descuento </th>
                <th> fecha </th>
                <th> Vencimiento </th>
                <th> Descripcion </th>
                <th> Operaciónes</th>
              </thead>

              <tbody>
                @foreach($consulta as $c)
                  <tr>
                    <td>{{$c->idcupon}}</td>
                    <td>{{$c->paciente}} {{$c->apellidop}} {{$c->apellidom}}</td>
                    <td>{{$c->tipocupon}}</td>
                    <td>{{$c->porcentaje}}</td>
                    <td>{{$c->fecha}}</td>
                    <td>{{$c->fechavencimiento}}</td>
                    <td>{{$c->descripcion}}</td>
                    <td>
                      <a href="{{route('modificarcupon',['idcupon'=>$c->idcupon])}}">
                              <button type="button" class="btn btn-info btn-sm">Modificar</button>
                              </a>
                              @if($c->deleted_at)
                              <a href="{{route('activarcupon',['idcupon'=>$c->idcupon])}}">
                              <button type="button" class="btn btn-success btn-sm">Activar</button>
                              <a href="{{route('eliminarcupon',['idcupon'=>$c->idcupon])}}">
                              <button type="button" class="btn btn-danger btn-sm">Borrar</button>
                              </a>
                              @else
                              <a href="{{route('desactivarcupon',['idcupon'=>$c->idcupon])}}">
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