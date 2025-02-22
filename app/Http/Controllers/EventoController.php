<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointments;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    public function index()
    {
        return view('Agenda');
    }

    public function store(Request $request)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Crear los datos del evento, incluyendo el user_id
        $datosEvento = $request->all();
        $datosEvento['user_id'] = $user->id; // Asignar el ID del usuario autenticado

        // Crear la cita en la base de datos
        appointments::create($datosEvento);
        
        return response()->json(['success' => 'Evento guardado exitosamente']);
    }

    public function show()
    {
        $events = appointments::all();

        // Formatea los eventos para FullCalendar si es necesario
        $formattedEvents = $events->map(function ($event) {
            return [
                'title' => $event->nombre_completo,
                'start' => $event->fecha_cita . 'T' . $event->hora_cita,
                'extendedProps' => [
                    'placa_vehiculo' => $event->placa_vehiculo,
                    'tipo_vehiculo' => $event->tipo_vehiculo,
                    'marca_vehiculo' => $event->marca_vehiculo,
                ]
            ];
        });

        return response()->json($formattedEvents);
    }

    public function misCitas()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Obtener las citas del usuario
        $citas = appointments::where('user_id', $user->id)->get();

        // Pasar las citas a la vista
        return view('crudU', compact('citas'));
    }
    public function cancelar(Request $request, $id)
{
    $cita = appointments::find($id); // Cambiado a 'appointments'
    if ($cita) {
        $cita->estado = 'cancelada'; // o el estado que uses
        $cita->save();
        return response()->json(['message' => 'Cita cancelada con éxito.']);
    }
    return response()->json(['message' => 'Cita no encontrada.'], 404);
}


public function update(Request $request, $id)
{
    $cita = appointments::findOrFail($id);
    $cita->update($request->all()); // Actualizar con los datos del formulario
    return redirect()->back()->with('success', 'Cita actualizada con éxito.');
}

    
    
}

