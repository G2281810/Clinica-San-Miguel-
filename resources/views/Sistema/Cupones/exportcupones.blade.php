<table>
    <thead>
        <tr>
        <th> Clave </th>
        <th> Paciente </th>
        <th> Cupon </th>
        <th> Descuento </th>
        <th> fecha </th>
        <th> Vencimiento </th>
        <th> Descripcion </th>
        </tr>
    </thead>
    <tbody>
        @foreach($cupones as $cup)
            <tr>
                    <td>{{$cup->idcupon}}
                    <td>{{$cup->paciente}} {{$cup->apellidop}} {{$cup->apellidom}}</td>
                    <td>{{$cup->tipocupon}}</td>
                    <td>{{$cup->porcentaje}}</td>
                    <td>{{$cup->fecha}}</td>
                    <td>{{$cup->fechavencimiento}}</td>
                    <td>{{$cup->descripcion}}</td>
            </tr>
        @endforeach
    </tbody>
</table>