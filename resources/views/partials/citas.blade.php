@extends('adminlte::page') @section('title', 'Dashboard')
@section('content_header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard with Charts</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <h3>41,410</h3>
                    <p>Likes</p>
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
    </div>

    <!-- Charts -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Online Store Visitors</h3>
                    <span>View Report</span>
                </div>
                <div class="card-body">
                    <h4>820</h4>
                    <p>Visitors Over Time</p>
                    <canvas id="visitorsChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Sales</h3>
                    <span>View Report</span>
                </div>
                <div class="card-body">
                    <h4>$18,230.00</h4>
                    <p>Sales Over Time</p>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Chart.js for Visitors Chart
    const ctx1 = document.getElementById('visitorsChart').getContext('2d');
    const visitorsChart = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
            datasets: [{
                label: 'This Week',
                data: [120, 140, 160, 180, 200, 180, 160],
                borderColor: 'blue',
                backgroundColor: 'rgba(0, 0, 255, 0.1)',
                fill: true
            }, {
                label: 'Last Week',
                data: [80, 100, 110, 90, 120, 110, 100],
                borderColor: 'gray',
                backgroundColor: 'rgba(128, 128, 128, 0.1)',
                fill: true
            }]
        }
    });

    // Chart.js for Sales Chart
    const ctx2 = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'This Year',
                data: [1000, 2000, 3000, 2500, 2000, 2500, 3000],
                backgroundColor: 'blue'
            }, {
                label: 'Last Year',
                data: [800, 1500, 2000, 1800, 1500, 1900, 2500],
                backgroundColor: 'gray'
            }]
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

.table-custom th, .table-custom td {
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

<div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Usuarios</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-custom">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Pérez</td>
                                <td>juan@example.com</td>
                                <td>
                                    <button class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>María García</td>
                                <td>maria@example.com</td>
                                <td>
                                    <button class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> Añadir Usuario
                    </button>
                </div>
            </div>
        </div>

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
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($citas as $cita)
            <tr>
                <td>{{ $cita->nombre_completo }}</td>
                <td>{{ $cita->correo_electronico }}</td>
                <td>{{ $cita->tipo_vehiculo }}</td>
                <td>{{ $cita->marca_vehiculo }}</td>
                <td>{{ $cita->placa_vehiculo }}</td>
                <td>{{ \Carbon\Carbon::parse($cita->fecha_cita)->format('d/m/Y') }}</td>
                <td>{{ $cita->hora_cita }}</td>
                <td>
                    <button class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Paginación con AJAX -->
<div class="mt-3 d-flex justify-content-center">
    {{ $citas->links('pagination::bootstrap-4') }}
</div>




@stop @section('content') @stop @section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css" /> --}} @stop
@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop