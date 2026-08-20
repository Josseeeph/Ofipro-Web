<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    // Los campos que permitimos guardar masivamente
    protected $fillable = [
        'nombre', 
        'correo', 
        'servicio', 
        'detalle'
    ];
}