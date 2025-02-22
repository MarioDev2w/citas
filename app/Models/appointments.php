<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointments extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_completo', 'correo_electronico', 'tipo_vehiculo', 
        'marca_vehiculo', 'placa_vehiculo', 'fecha_cita', 'hora_cita','precio','user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
