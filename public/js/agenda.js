document.addEventListener('DOMContentLoaded', function() { 
    var calendarEl = document.getElementById('calendar');
  

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek',
        },

        slotMinTime: '06:00:00',
        slotMaxTime: '17:00:00',
        slotDuration: '01:00:00',
        businessHours: {
            daysOfWeek: [1, 2, 3, 4, 5],
            startTime: '06:00',
            endTime: '17:00',
        },

        events: function(fetchInfo, successCallback, failureCallback) {
            $.ajax({
                url: '/eventos',
                type: 'GET',
                success: function(response) {
                    var events = response.map(function(evento) {
                        return {
                            title: evento.title,
                            start: evento.start,
                            allDay: false,
                            extendedProps: evento.extendedProps
                        };
                    });
                    successCallback(events);
                },
                error: function() {
                    failureCallback({ message: 'Error al cargar los eventos' });
                }
            });
        },

        dateClick: function(info) {
            document.getElementById('fecha').value = info.dateStr;

            var myModal = new bootstrap.Modal(document.getElementById('calendarModal'));
            myModal.show();

            document.querySelector('.btn-close').addEventListener('click', function() {
                myModal.hide();
            });

            document.querySelector('.btn-secondary').addEventListener('click', function() {
                myModal.hide();
            });

            $('.btn-success').one('click', function(event) {
                event.preventDefault();

                var objetoEvento = datos();

                const selectedDate = new Date(objetoEvento.fecha_cita + 'T' + objetoEvento.hora_cita);
                const hour = selectedDate.getHours();

                if (hour < 6 || hour >= 17) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Horario no disponible',
                        text: 'El horario de atención es de 6:00 AM a 5:00 PM.'
                    });
                    return;
                }

                verificarDisponibilidad(objetoEvento.fecha_cita, objetoEvento.hora_cita, function(disponible) {
                    if (disponible) {
                        enviar('', objetoEvento);

                        calendar.addEvent({
                            title: objetoEvento.nombre_completo,
                            start: objetoEvento.fecha_cita + 'T' + objetoEvento.hora_cita,
                            allDay: false,
                            extendedProps: {
                                placa_vehiculo: objetoEvento.placa_vehiculo,
                                tipo_vehiculo: objetoEvento.tipo_vehiculo,
                                marca_vehiculo: objetoEvento.marca_vehiculo
                            }
                        });

                        myModal.hide();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Horario no disponible',
                            text: 'Ya existe una cita programada para esta hora. Por favor seleccione otro horario.'
                        });
                    }
                });
            });
        },

        eventClick: function(info) {
            if (canViewEvents) { // Verifica si el usuario tiene el permiso para ver los detalles
                var evento = info.event;
                Swal.fire({
                    title: 'Detalles del Evento',
                    html: `
                        <strong>Nombre:</strong> ${evento.title} <br>
                        <strong>Fecha:</strong> ${evento.start.toLocaleDateString()} <br>
                        <strong>Hora:</strong> ${evento.start.toLocaleTimeString()} <br>
                        <strong>Placa:</strong> ${evento.extendedProps.placa_vehiculo} <br>
                        <strong>Tipo de Vehículo:</strong> ${evento.extendedProps.tipo_vehiculo} <br>
                        <strong>Marca:</strong> ${evento.extendedProps.marca_vehiculo} <br>
                    `,
                    icon: 'info',
                    confirmButtonText: 'Cerrar'
                });
            } else {
                Swal.fire({
                    title: 'Acceso Denegado',
                    text: 'No tienes permisos para ver los detalles de este evento.',
                    icon: 'error',
                    confirmButtonText: 'Cerrar'
                });
            }
        }
    });

    calendar.render();

    function verificarDisponibilidad(fecha, hora, callback) {
        $.ajax({
            url: '/verificar-disponibilidad',
            type: 'GET',
            data: {
                fecha: fecha,
                hora: hora
            },
            success: function(response) {
                callback(response.disponible);
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Error al verificar disponibilidad'
                });
                callback(false);
            }
        });
    }

    function datos() {
        var tipoVehiculo = $("#tipo_vehiculo").val();
        var precio = (tipoVehiculo === 'motocicleta') ? 218251 : 327219;

        return {
            nombre_completo: $("#name").val(),
            correo_electronico: $("#email").val(),
            tipo_vehiculo: tipoVehiculo,
            marca_vehiculo: $("#marca").val(),
            placa_vehiculo: $("#placa").val(),
            fecha_cita: $("#fecha").val(),
            hora_cita: $("#hora").val(),
            precio: precio
        };
    }

    function enviar(accion, objetoEvento) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: urlAgenda + accion,
            data: objetoEvento,
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Cita Agendada',
                    text: 'Tu cita ha sido agendada exitosamente.',
                    confirmButtonText: 'OK'
                });
                calendar.refetchEvents();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error:', textStatus, errorThrown);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un problema al agendar tu cita. Por favor, intenta de nuevo.',
                    confirmButtonText: 'OK'
                });
            }
        });
    }
});
