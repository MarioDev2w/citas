@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')



@stop

@section('content')

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
    <script src="{{asset('js/agenda.js')}}"defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
</head>

<button class="btn-exportar">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
  <span>Reporte de citas</span>
</button>
<body>


  <div id="calendar"></div>




<!-- Modal -->
<div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Detalles de la Fecha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- Contenedor desplazable -->
      <div class="modal-body">
        <div class="container">
          <h2>Agendar Cita</h2>
          <form id="form-agendar-cita" action="/Agenda" method="POST">
            @csrf
            <!-- Campo Nombre -->
            <div class="mb-3">
              <label for="name" class="form-label">Nombre Completo</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- Campo Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Campo Tipo de Vehículo -->
            <div class="mb-3">
              <label for="tipo_vehiculo" class="form-label">Tipo de Vehículo</label>
              <select class="form-select" id="tipo_vehiculo" name="tipo_vehiculo" required>
                <option value="Automóvil">Automóvil</option>
                <option value="Motocicleta">Motocicleta</option>
              </select>
            </div>

            <!-- Campo Marca del Vehículo -->
            <div class="mb-3">
              <label for="marca" class="form-label">Marca del Vehículo</label>
              <input type="text" class="form-control" id="marca" name="marca" required>
            </div>

            <!-- Campo Placa del Vehículo -->
            <div class="mb-3">
              <label for="placa" class="form-label">Placa del Vehículo</label>
              <input type="text" class="form-control" id="placa" name="placa" required>
            </div>

            <!-- Campo Fecha de la Cita -->
            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha de la Cita</label>
              <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>

            <!-- Campo Hora de la Cita -->
            <div class="mb-3">
              <label for="hora" class="form-label">Hora de la Cita</label>
              <input type="time" class="form-control" id="hora" name="hora" required>
            </div>

            <!-- Campo Precio -->
         <!-- Campo Precio -->
<div class="mb-3">
  <label for="precio" class="form-label">Precio</label>
  <input type="text" class="form-control" id="precio" name="precio" readonly>
  <input type="hidden" id="precio_raw" name="precio_raw"> <!-- Campo oculto para el precio real -->
</div>


            <!-- Botón para enviar el formulario -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Agendar Cita</button>
            </div>
          </form>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script>

document.addEventListener('DOMContentLoaded', function () {
    const tipoVehiculoSelect = document.getElementById('tipo_vehiculo');
    const precioInput = document.getElementById('precio');
    const precioRawInput = document.getElementById('precio_raw'); // Campo oculto para precio sin formato

    // Función para actualizar el precio según el tipo de vehículo
    function actualizarPrecio() {
      const tipoVehiculo = tipoVehiculoSelect.value;
      let precio = 0;

      if (tipoVehiculo === 'Motocicleta') {
        precio = 218251; // Precio para motocicletas
      } else if (tipoVehiculo === 'Automóvil') {
        precio = 327219; // Precio para automóviles
      }

      // Mostrar el precio en formato moneda
      precioInput.value = new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP'
      }).format(precio);

      // Asignar el valor sin formato al campo oculto
      precioRawInput.value = precio;
    }

    // Actualizar el precio al cambiar el tipo de vehículo
    tipoVehiculoSelect.addEventListener('change', actualizarPrecio);

    // Inicializar el precio cuando se cargue la página
    actualizarPrecio();
});

</script>

<script>
  var urlAgenda = "{{ url('/Agenda') }}";
  
</script>
<script src="{{ asset('js/agenda.js') }}"></script>


<script>
  
</script>

<script>
        document.querySelector('.btn-exportar').addEventListener('click', function() {
            window.location.href = "{{ route('exportar.citas') }}"; // Comillas dobles para evitar errores
        });
    </script>

<script>
    var canViewEvents = {!! json_encode(auth()->user()->can('export data')) !!};
</script>

<style>

.fc-event {
  background-color: #9f25f3; /* Color de fondo azul */
  color: white; /* Color del texto en blanco */
  border: none; /* Quitar bordes */
  border-radius: 5px; /* Bordes redondeados */
  padding: 5px; /* Espaciado interno */
  font-size: 14px; /* Tamaño de fuente */
  cursor: pointer; /* Cambiar el cursor al pasar sobre el evento */
}

.fc-event:hover {
  background-color: #f4f4f4; /* Color más oscuro al pasar el ratón */
}


.btn-exportar {
  display: inline-flex;
  align-items: center;
  padding: 10px 20px;
  background-color:#9f25f3 ; /* Color azul */
  color: white;
  font-size: 14px;
  font-weight: 500;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-exportar:hover {
  background-color: #2779bd; /* Color azul más oscuro al hacer hover */
}

.btn-exportar:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(52, 144, 220, 0.4); /* Sombra sutil en el foco */
}

.btn-exportar svg {
  width: 16px;
  height: 16px;
  margin-right: 8px;
  fill: currentColor; /* Hace que el ícono herede el color */
}

.btn-exportar span {
  margin-left: 5px;
}



</style>


  
</body>
</html>



@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css" /> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop
