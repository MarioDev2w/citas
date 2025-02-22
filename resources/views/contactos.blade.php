@extends('adminlte::page') @section('title', 'Dashboard')
@section('content_header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard with Charts</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .card {
            border-radius: 10px;
            margin: 20px;
        }

        .small-box {
            position: relative;
            display: block;
            padding: 20px;
            color: white;
            border-radius: 5px;
        }

        .small-box .icon {
            font-size: 50px;
            position: absolute;
            top: 5px;
            right: 10px;
        }

        .small-box .inner {
            margin-left: 10px;
        }

        .small-box h3 {
            font-size: 30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Cards -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $totalCitas }}</h3> <!-- Mostrar el total de citas -->
                        <p>Total Citas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cog"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                    <h3>{{ $totalCanceladas }}</h3> <!-- Mostrar total de motocicletas -->
                    <p>Total citas canceladas</p>
                    </div>
                    <div class="icon">
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $totalMotocicletas }}</h3> <!-- Mostrar total de motocicletas -->
                        <p>Total Motocicletas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $totalauto }}</h3> <!-- Mostrar total de motocicletas -->
                        <p>Total Automoviles</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$totalencurso}}</h3> <!-- Mostrar el total de citas en curso -->
                        <p>citas en curso</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cog"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
        <div class="inner">
            <h3>${{ number_format($totalIngresos, 0, ',', '.') }}</h3>
            <p>Total ingresos</p>
        </div>
        <div class="icon">
            <i class="fas fa-shopping-cart"></i>
        </div>
    </div>
</div>

<div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
        <div class="inner">
            <h3>${{ number_format($ingresosAutomoviles, 0, ',', '.') }}</h3>
            <p>Ingresos por automóviles</p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
    </div>
</div>

<div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>${{ number_format($ingresosMotocicletas, 0, ',', '.') }}</h3>
            <p>Ingresos por motocicletas</p>
        </div>
        <div class="icon">
            <i class="fab fa-google-plus-g"></i>
        </div>
    </div>
</div>


        </div>

        <div class="row">
            <!-- Gráfico de Línea para Total y Citas en Curso -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Total y Citas en Curso</h3>
                        <span>Reporte de Citas</span>
                    </div>
                    <div class="card-body">
                        <h4>Reporte de Citas</h4>
                        <p>Totales vs En Curso</p>
                        <canvas id="citasChart" class="chart-size"></canvas> <!-- Gráfico de líneas -->
                    </div>
                </div>
            </div>

            <!-- Gráfico de Torta para Categorías de Citas -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Total Citas: Categorías</h3>
                        <span>View Report</span>
                    </div>
                    <div class="card-body">
                        <h4>Reporte de Citas</h4>
                        <p>Categorías de Citas</p>
                        <canvas id="citasPieChart" class="chart-size"></canvas> <!-- Gráfico de torta -->
                    </div>
                </div>
            </div>
        </div>

        <style>
            .chart-size {
                width: 100% !important;
                height: 300px !important;
                /* Establece la altura fija para ambos gráficos */
            }
        </style>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            // Obtener los datos del backend
            var totalCitas = {{ $totalCitas }};
            var totalMotocicletas = {{ $totalMotocicletas }};
            var totalAutomoviles = {{ $totalauto }};
            var citasEnCurso = {{ $totalencurso }};

            var total = totalCitas + totalMotocicletas + totalAutomoviles + citasEnCurso; // Calcular el total para los porcentajes

            var ctx = document.getElementById('citasPieChart').getContext('2d');
            var citasPieChart = new Chart(ctx, {
                type: 'pie', // Gráfico de torta
                data: {
                    labels: ['Total Citas', 'Motocicletas', 'Automóviles', 'Citas en Curso'], // Etiquetas de los datos
                    datasets: [{
                        label: 'Citas',
                        data: [totalCitas, totalMotocicletas, totalAutomoviles, citasEnCurso], // Datos desde el backend
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)', // Color para "Total Citas"
                            'rgba(255, 99, 132, 0.2)', // Color para "Motocicletas"
                            'rgba(75, 192, 192, 0.2)', // Color para "Automóviles"
                            'rgba(153, 102, 255, 0.2)'  // Color para "Citas en Curso"
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)', // Borde para "Total Citas"
                            'rgba(255, 99, 132, 1)', // Borde para "Motocicletas"
                            'rgba(75, 192, 192, 1)', // Borde para "Automóviles"
                            'rgba(153, 102, 255, 1)'  // Borde para "Citas en Curso"
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true, // Hace el gráfico adaptable al tamaño de la pantalla
                    plugins: {
                        legend: {
                            position: 'top', // Posición de la leyenda
                        },
                        tooltip: {
                            callbacks: {
                                label: function (tooltipItem) {
                                    var dataset = tooltipItem.dataset.data; // Obtener los datos del dataset
                                    var currentValue = dataset[tooltipItem.dataIndex]; // Valor actual
                                    var percentage = ((currentValue / total) * 100).toFixed(2); // Calcular el porcentaje
                                    return currentValue + ' citas (' + percentage + '%)'; // Mostrar el valor con porcentaje
                                }
                            }
                        }
                    }
                }
            });
        </script>






        <script>
            // Obtener los datos del backend desde el Blade
            var totalCitas = {{ $totalCitas }};
            var citasEnCurso = {{ $totalencurso }};

            var ctx = document.getElementById('citasChart').getContext('2d');
            var citasChart = new Chart(ctx, {
                type: 'line', // Gráfico de líneas
                data: {
                    labels: ['Total de Citas', 'Citas en Curso'], // Etiquetas para los datos
                    datasets: [{
                        label: 'Citas',
                        data: [totalCitas, citasEnCurso], // Datos obtenidos desde el controlador
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: false, // Para no rellenar el área bajo la línea
                        tension: 0.1 // Suavizado de la línea
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true // Comenzar desde el valor 0 en el eje Y
                        }
                    }
                }
            });
        </script>







</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tables</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Margen inferior para separar la tabla de usuarios y la de citas */
        .card.mb-4 {
            margin-bottom: 20px;
        }

        /* Estilos de la tabla para evitar que se desborde */
        .table-custom {
            width: 100%;
            table-layout: fixed;
            word-wrap: break-word;
            margin-top: 20px;
        }

        .table-custom th,
        .table-custom td {
            vertical-align: middle;
            text-align: center;
        }

        /* Botones de la tabla con margen */
        .table-custom .btn {
            margin: 0 5px;
        }

        /* Estilos para la paginación */
        .pagination {
            justify-content: center;
        }

        .pagination .page-item .page-link {
            color: #007bff;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <!-- Sección de Gestión de Roles -->
        <h2 class="mb-4">Gestión de Roles</h2>
    
        <!-- Mensajes de éxito -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    
        <!-- Tabla de roles -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre del Rol</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($roles) && $roles->count() > 0)
                @foreach($roles as $role)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $role->name }}</td>
                    <td class="text-center">
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este rol?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="3" class="text-center">No hay roles disponibles.</td>
                </tr>
                @endif
            </tbody>
        </table>
    
        <!-- Formulario para agregar un nuevo rol -->
        <h3 class="mb-4">Agregar nuevo rol</h3>
        <form action="{{ route('roles.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="form-group">
                <label for="roleName">Nombre del Rol</label>
                <input type="text" name="name" id="roleName" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Rol</button>
        </form>
    
        <!-- Sección de Gestión de Usuarios -->
        <h2 class="mt-5 mb-4">Gestión de Usuarios</h2>
        @if(isset($users) && $users->count() > 0)
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol Actual</th>
                    <th>Asignar Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->roles->count() > 0)
                            {{ $user->roles->first()->name }}
                        @else
                            Sin rol asignado
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('users.assignRole', $user->id) }}" method="POST" class="d-flex gap-2">
                            @csrf
                            <select name="role" class="form-control form-control-sm" required>
                                <option value="">Seleccionar rol...</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary btn-sm">
                                Asignar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>No hay usuarios para mostrar.</p>
        @endif
    </div>

    <style>
        .gap-2 {
            gap: 0.5rem;
        }
        .d-flex {
            display: flex;
        }
        select.form-control-sm {
            width: auto;
            min-width: 150px;
        }
    </style>
        



    </div>

    <div class="card-body">
        <table class="table table-striped table-custom">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Correo Electrónico</th>
                    <th>Tipo de Vehículo</th>
                    <th>Marca de Vehículo</th>
                    <th>Placa de Vehículo</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Precio</th> <!-- Columna para mostrar el precio -->
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="citasTable">
                @foreach($citas as $cita)
                <tr>
                    <td>{{ $cita->nombre_completo }}</td>
                    <td>{{ $cita->correo_electronico }}</td>
                    <td>{{ $cita->tipo_vehiculo }}</td>
                    <td>{{ $cita->marca_vehiculo }}</td>
                    <td>{{ $cita->placa_vehiculo }}</td>
                    <td>{{ \Carbon\Carbon::parse($cita->fecha_cita)->format('d/m/Y') }}</td>
                    <td>{{ $cita->hora_cita }}</td>
                    <td>{{ number_format($cita->precio, 0, ',', '.') }} COP</td> <!-- Mostrar el precio -->
                    <td>
                        <!-- Botón Editar (abre el modal) -->
                        <button class="btn btn-warning btn-sm" data-toggle="modal"
                            data-target="#editModal{{ $cita->id }}">
                            <i class="fas fa-edit"></i>
                        </button>

                        <!-- Botón para eliminar con SweetAlert2 -->
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $cita->id }})">
                            <i class="fas fa-trash"></i>
                        </button>

                        <!-- Formulario para eliminar -->
                        <form id="delete-form-{{ $cita->id }}" action="{{ route('citas.destroy', $cita->id) }}"
                            method="POST" style="display:none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>

                <!-- Modal para editar -->
                <div class="modal fade" id="editModal{{ $cita->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="editModalLabel" aria-hidden="true">
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
                                    <!-- Campos del formulario -->
                                    <div class="form-group">
                                        <label>Nombre Completo</label>
                                        <input type="text" name="nombre_completo" value="{{ $cita->nombre_completo }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Correo Electrónico</label>
                                        <input type="email" name="correo_electronico"
                                            value="{{ $cita->correo_electronico }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tipo de Vehículo</label>
                                        <select name="tipo_vehiculo" id="tipo_vehiculo_{{ $cita->id }}"
                                            class="form-control" required>
                                            <option value="motocicleta" {{ $cita->tipo_vehiculo == 'motocicleta' ?
                                                'selected' : '' }}>Motocicleta</option>
                                            <option value="Automovil" {{ $cita->tipo_vehiculo == 'Automovil' ?
                                                'selected' : '' }}>Automóvil</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Marca de Vehículo</label>
                                        <input type="text" name="marca_vehiculo" value="{{ $cita->marca_vehiculo }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Placa de Vehículo</label>
                                        <input type="text" name="placa_vehiculo" value="{{ $cita->placa_vehiculo }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" name="fecha_cita" value="{{ $cita->fecha_cita }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Hora</label>
                                        <input type="time" name="hora_cita" value="{{ $cita->hora_cita }}"
                                            class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Precio</label>
                                        <input type="number" name="precio" id="precio_{{ $cita->id }}"
                                            value="{{ $cita->precio }}" class="form-control" required step="0.01">
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
            </tbody>
        </table>
    </div>
    @if ($citas->count() > 0)
    @foreach ($citas as $cita)
       

        
        <script>
            // Agregar listener solo si el elemento existe
            var tipoVehiculoElement = document.getElementById('tipo_vehiculo_{{ $cita->id }}');
            if (tipoVehiculoElement) {
                tipoVehiculoElement.addEventListener('change', function () {
                    var tipoVehiculo = this.value;
                    var precioField = document.getElementById('precio_{{ $cita->id }}');

                    // Definir precios para cada tipo de vehículo
                    var precioMotocicleta = 218251;
                    var precioAutomovil = 327219;

                    // Ajustar el precio automáticamente según el tipo de vehículo
                    if (tipoVehiculo === 'motocicleta') {
                        precioField.value = precioMotocicleta;
                    } else if (tipoVehiculo === 'Automovil') {
                        precioField.value = precioAutomovil;
                    }
                });
            }
        </script>
    @endforeach
@else
    <p>No hay citas disponibles.</p>
@endif


    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: "Estás seguro?",
                text: "No podras revertir esta acción!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si,eliminar!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Enviar el formulario de eliminación si se confirma la alerta
                    document.getElementById('delete-form-' + id).submit();

                    // Mostrar la alerta de éxito después de la eliminación
                    Swal.fire({
                        title: "Eliminado!",
                        text: "La cita ha sido eliminada.",
                        icon: "success"
                    });
                }
            });
        }

        $('#searchInput').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $('#citasTable tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>


    <!-- Paginación -->
    <div class="mt-3 d-flex justify-content-center">
        {{ $citas->links('pagination::bootstrap-4') }}
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


@stop @section('content') @stop @section('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css" /> --}} @stop
@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop