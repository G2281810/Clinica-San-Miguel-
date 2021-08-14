<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PDF | Cupones</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- css estilos -->
	<style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td{
        border: 1px solid #dddddd;
        text-align: left;
        font-size: 11px;
        padding: 8px;
        }

        th {
        border: 1px solid #dddddd;
        text-align: left;
        font-size: 11px;
        padding: 8px;
        }

        tr {

        }

        thead{
            border: 2px solid #dddddd;
            background:#E5E7E9;

        }


        img{
            height: 60px;
            width: 200px;
            float:right;
            margin-right:40px;
        }

        </style>

</head>

<body>
    <div class="container">
        <img src="{{ asset('Login/images/clinicalogo.png') }}" />
        <h2 class="mb-4"> REGISTRO DE RECETAS</h2> <hr>
        <table class="table table-striped table-hover" border="1">
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
                @foreach($pdfcupones as $pdfc)
                <tr>
                    <td>{{$pdfc->idcupon}}</td>
                    <td>{{$pdfc->paciente}} {{$pdfc->apellidop}} {{$pdfc->apellidom}}</td>
                    <td>{{$pdfc->tipocupon}}</td>
                    <td>{{$pdfc->porcentaje}}</td>
                    <td>{{$pdfc->fecha}}</td>
                    <td>{{$pdfc->fechavencimiento}}</td>
                    <td>{{$pdfc->descripcion}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
