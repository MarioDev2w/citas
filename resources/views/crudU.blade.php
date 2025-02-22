@extends('adminlte::page') @section('title', 'Dashboard')
@section('content_header')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <title>Mis Citas</title>
    <style>
        .badge {
            padding: 0.5em 1em;
            font-size: 1em;
            position: absolute;
            top: 15px;
            right: 15px;
        }
        .badge-primary {
            background-color: #007bff;
        }
        .badge-danger {
            background-color: #dc3545;
        }
        .card {
            position: relative;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Mis Citas</h2>
    <div class="row">
        @foreach($citas as $cita)
        <div class="col-12 mb-3">
            <div class="card">
                <span class="badge {{ $cita->estado === 'cancelada' ? 'badge-danger' : 'badge-primary' }}">
                    {{ $cita->estado }}
                </span>
                <div class="card-body">
                    <h5 class="card-title">{{ $cita->nombre_completo }}</h5>
                    <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($cita->fecha_cita)->format('d/m/Y') }}</p>
                    <p><strong>Hora:</strong> {{ $cita->hora_cita }}</p>
                    <p><strong>Placa:</strong> {{ $cita->placa_vehiculo }}</p>
                    <p><strong>Tipo de Vehículo:</strong> {{ $cita->tipo_vehiculo }}</p>
                    <button class="btn btn-danger" onclick="cancelarCita({{ $cita->id }})">Cancelar Cita</button>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $cita->id }}">Editar</button>
                </div>
            </div>
        </div>

        <!-- Modal para editar la cita -->
        <div class="modal fade" id="editModal{{ $cita->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar Cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('citas.update', $cita->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input type="text" name="nombre_completo" value="{{ $cita->nombre_completo }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input type="email" name="correo_electronico" value="{{ $cita->correo_electronico }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tipo de Vehículo</label>
                                <select name="tipo_vehiculo" class="form-control" required>
                                    <option value="motocicleta" {{ $cita->tipo_vehiculo == 'motocicleta' ? 'selected' : '' }}>Motocicleta</option>
                                    <option value="Automovil" {{ $cita->tipo_vehiculo == 'Automovil' ? 'selected' : '' }}>Automóvil</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Marca de Vehículo</label>
                                <input type="text" name="marca_vehiculo" value="{{ $cita->marca_vehiculo }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Placa de Vehículo</label>
                                <input type="text" name="placa_vehiculo" value="{{ $cita->placa_vehiculo }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Fecha</label>
                                <input type="date" name="fecha_cita" value="{{ $cita->fecha_cita }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Hora</label>
                                <input type="time" name="hora_cita" value="{{ $cita->hora_cita }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Precio</label>
                                <input type="number" name="precio" value="{{ $cita->precio }}" class="form-control" required step="0.01">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    function cancelarCita(citaId) {
        const urlCancelar = `{{ route('citas.cancelar', ':id') }}`.replace(':id', citaId);
        
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¿Deseas cancelar esta cita?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: urlCancelar,
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire(
                            'Cancelada!',
                            'La cita ha sido cancelada.',
                            'success'
                        );
                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('Error:', textStatus, errorThrown);
                        Swal.fire(
                            'Error!',
                            'Error al cancelar la cita. Por favor, intenta de nuevo.',
                            'error'
                        );
                    }
                });
            }
        });
    }
</script>

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