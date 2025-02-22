<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointments;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

class ContactosController extends Controller
{
    public function index()
{
    // Obtener datos de citas
    $citas = appointments::paginate(4);
    $totalCitas = $citas->total();

    if ($totalCitas > 0) {
        $totalMotocicletas = appointments::where('tipo_vehiculo', 'motocicleta')->count();
        $totalauto = appointments::where('tipo_vehiculo', 'Automovil')->count();
        $totalencurso = appointments::where('estado', 'En curso')
                                     ->whereMonth('fecha_cita', now()->month)
                                     ->whereYear('fecha_cita', now()->year)
                                     ->count();
        $totalCanceladas = appointments::where('estado', 'cancelada')->count();

        // Cálculos de ingresos
        $totalIngresos = appointments::sum('precio');
        $ingresosMotocicletas = appointments::where('tipo_vehiculo', 'motocicleta')->sum('precio');
        $ingresosAutomoviles = appointments::where('tipo_vehiculo', 'Automovil')->sum('precio');
    } else {
        $totalMotocicletas = 0;
        $totalauto = 0;
        $totalencurso = 0;
        $totalCanceladas = 0;
        
        // Ingresos en caso de que no haya citas
        $totalIngresos = 0;
        $ingresosMotocicletas = 0;
        $ingresosAutomoviles = 0;
    }

    $users = User::all();
    $roles = Role::all();

    return view('contactos', compact(
        'totalCitas',
        'totalMotocicletas', 
        'totalauto', 
        'citas',
        'totalencurso',
        'totalCanceladas',
        'totalIngresos',
        'ingresosMotocicletas',
        'ingresosAutomoviles',
        'users',
        'roles'
    ));
}


    public function checkAvailability(Request $request)
    {
        $fecha = $request->fecha;
        $hora = $request->hora;

        if (empty($fecha) || empty($hora)) {
            return response()->json(['disponible' => false, 'mensaje' => 'Fecha y hora son requeridos']);
        }

        // Asegura que la hora tenga el formato correcto
        $fechaHora = Carbon::parse("{$fecha} {$hora}:00");

        if ($fechaHora->isWeekend()) {
            return response()->json(['disponible' => false, 'mensaje' => 'Solo se pueden agendar citas de lunes a viernes']);
        }

        // Validar si la hora está dentro del horario laboral
        if ((int)$fechaHora->format('H') < 6 || (int)$fechaHora->format('H') >= 17) {
            return response()->json(['disponible' => false, 'mensaje' => 'El horario de atención es de 6:00 AM a 5:00 PM']);
        }

        // Validar si ya existe una cita en el mismo horario
        $citaExistente = appointments::where('fecha_cita', $fecha)
            ->where('hora_cita', $fechaHora->format('H:i:s'))
            ->exists();

        return response()->json([
            'disponible' => !$citaExistente,
            'mensaje' => $citaExistente ? 'Horario no disponible' : 'Horario disponible'
        ]);
    }

    public function storeCita(Request $request)
    {
        $request->validate([
            'nombre_completo' => 'required',
            'correo_electronico' => 'required|email',
            'tipo_vehiculo' => 'required',
            'marca_vehiculo' => 'required',
            'placa_vehiculo' => 'required',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required',
        ]);

        $fechaHora = Carbon::parse($request->fecha_cita . ' ' . $request->hora_cita);
        
        if ($fechaHora->isWeekend()) {
            return redirect()->back()->with('error', 'Solo se pueden agendar citas de lunes a viernes');
        }

        $hora = (int)$fechaHora->format('H');
        if ($hora < 6 || $hora >= 17) {
            return redirect()->back()->with('error', 'El horario de atención es de 6:00 AM a 5:00 PM');
        }

        $citaExistente = appointments::where('fecha_cita', $request->fecha_cita)
            ->where('hora_cita', $request->hora_cita)
            ->first();

        if ($citaExistente) {
            return redirect()->back()->with('error', 'Ya existe una cita programada para este horario');
        }

        $precio = $request->tipo_vehiculo === 'motocicleta' ? 218251 : 327219;

        appointments::create([
            'nombre_completo' => $request->nombre_completo,
            'correo_electronico' => $request->correo_electronico,
            'tipo_vehiculo' => $request->tipo_vehiculo,
            'marca_vehiculo' => $request->marca_vehiculo,
            'placa_vehiculo' => $request->placa_vehiculo,
            'fecha_cita' => $request->fecha_cita,
            'hora_cita' => $request->hora_cita,
            'precio' => $precio,
        ]);

        return redirect()->back()->with('success', 'Cita creada exitosamente con precio asignado.');
    }

    public function updateCita(Request $request, $id)
    {
        $request->validate([
            'nombre_completo' => 'required',
            'correo_electronico' => 'required|email',
            'tipo_vehiculo' => 'required',
            'marca_vehiculo' => 'required',
            'placa_vehiculo' => 'required',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required',
        ]);

        $cita = appointments::findOrFail($id);
        $precio = $request->tipo_vehiculo === 'motocicleta' ? 218251 : 327219;

        $cita->update([
            'nombre_completo' => $request->nombre_completo,
            'correo_electronico' => $request->correo_electronico,
            'tipo_vehiculo' => $request->tipo_vehiculo,
            'marca_vehiculo' => $request->marca_vehiculo,
            'placa_vehiculo' => $request->placa_vehiculo,
            'fecha_cita' => $request->fecha_cita,
            'hora_cita' => $request->hora_cita,
            'precio' => $precio,
        ]);

        return redirect()->back()->with('success', 'Cita actualizada correctamente');
    }

    public function destroyCita($id)
    {
        $cita = appointments::findOrFail($id);
        $cita->delete();
        return redirect()->back()->with('success', 'Cita eliminada correctamente');
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name|max:255',
        ]);

        Role::create(['name' => $request->name]);
        return redirect()->back()->with('success', 'Rol creado correctamente.');
    }

    public function editRole(string $id)
    {
        $role = Role::findOrFail($id);
        $roles = Role::all();
        return view('roles.edit', compact('role', 'roles'));
    }

    public function updateRole(Request $request, string $id)
    {
        $role = Role::findOrFail($id);
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id . '|max:255',
        ]);

        $role->update(['name' => $request->name]);
        return redirect()->back()->with('success', 'Rol actualizado correctamente.');
    }

    public function destroyRole(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->back()->with('success', 'Rol eliminado correctamente.');
    }

    public function assignRole(Request $request, $userId)
    {
        $request->validate([
            'role' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($userId);
        $role = Role::findById($request->role);
        $user->syncRoles([$role]);

        return redirect()->back()->with('success', 'Rol asignado correctamente a ' . $user->name);
    }

    
}
