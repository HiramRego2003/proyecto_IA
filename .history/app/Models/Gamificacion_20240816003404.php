<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'voluntario_id',
        'insignias',
        'puntos',
        'nivel',
    ];
}
