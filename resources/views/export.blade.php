@extends('adminlte::page') @section('title', 'Dashboard')
@section('content_header')

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos opcionales para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Reporte de Citas</h2>

    <table>
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Tipo de Vehículo</th>
                <th>Fecha de Cita</th>
                <th>Hora de Cita</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
                <tr>
                    <td>{{ $cita->nombre_completo }}</td>
                    <td>{{ $cita->tipo_vehiculo }}</td>
                    <td>{{ $cita->fecha_cita }}</td>
                    <td>{{ $cita->hora_cita }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>



@stop @section('content') @stop @section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css" /> --}} @stop
@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop