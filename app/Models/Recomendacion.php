<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recomendacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'voluntario_id',
        'oportunidad_id',
        'fecha_recomendacion',
    ];
}