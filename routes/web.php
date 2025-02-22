<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use App\Exports\CitasExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactosController;

// Rutas básicas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/edit.blade.php', function () {
    return view('profile.partials.edit.blade.php');
});

Route::get('/resources/views/soat.blade.php', function () {
    return view('soat');
});

Route::get('/resources/views/peritajes.blade', function () {
    return view('peritajes');
});

Route::get('/resources/views/TarifasTecno.blade', function () {
    return view('TarifasTecno');
});



Route::get('/mis-citas', [EventoController::class, 'misCitas'])->name('mis.citas');
// Rutas para citas
Route::post('/citas/{id}/cancelar', [EventoController::class, 'cancelar'])->name('citas.cancelar');
Route::put('/citas/{id}', [EventoController::class, 'update'])->name('citas.update');












// Ruta para exportar
Route::get('/exportar-citas', function () {
    return Excel::download(new CitasExport, 'citas.xlsx');
})->name('exportar.citas');

// Rutas combinadas de citas y roles
Route::get('/contactos', [ContactosController::class, 'index'])->name('contactos.index');

// Rutas para citas
Route::post('/citas', [ContactosController::class, 'storeCita'])->name('citas.store');
Route::put('/citas/{id}/update', [ContactosController::class, 'updateCita'])->name('citas.update');
Route::delete('/citas/{id}/delete', [ContactosController::class, 'destroyCita'])->name('citas.destroy');

// Rutas para roles
Route::post('/roles', [ContactosController::class, 'storeRole'])->name('roles.store');
Route::get('/roles/{id}/edit', [ContactosController::class, 'editRole'])->name('roles.edit');
Route::put('/roles/{id}', [ContactosController::class, 'updateRole'])->name('roles.update');
Route::delete('/roles/{id}', [ContactosController::class, 'destroyRole'])->name('roles.destroy');

// Ruta para asignar rol a usuario
Route::post('/users/{userId}/assign-role', [ContactosController::class, 'assignRole'])->name('users.assignRole');

// Rutas de agenda y eventos
Route::resource('/Agenda', EventoController::class);
Route::get('/eventos', [EventoController::class, 'show']);
Route::get('/export', [ExcelController::class, 'export']);
Route::get('/verificar-disponibilidad', [ContactosController::class, 'checkAvailability'])->name('verificar.disponibilidad');

// Rutas de autenticación y perfil
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';