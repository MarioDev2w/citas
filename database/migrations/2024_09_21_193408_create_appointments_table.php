<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            
            
                $table->id(); // ID autoincremental para la cita
                $table->string('nombre_completo'); // Nombre del cliente
                $table->string('correo_electronico'); // Correo electrónico del cliente
                $table->string('tipo_vehiculo'); // Tipo de vehículo (ej: Automóvil)
                $table->string('marca_vehiculo'); // Marca del vehículo
                $table->string('placa_vehiculo'); // Placa del vehículo
                $table->date('fecha_cita'); // Fecha de la cita
                $table->time('hora_cita'); // Hora de la cita
                $table->timestamps();
        
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
