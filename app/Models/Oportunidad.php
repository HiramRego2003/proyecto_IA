<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'organizacion_id',
        'titulo',
        'descripcion',
        'requisitos',
        'duracion',
        'ubicacion',
        'fecha_publicacion',
    ];
}
