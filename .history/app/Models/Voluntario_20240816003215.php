<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;


    protected $fillable = [
        'habilidades',
        'intereses',
        'disponibilidad',
        'experiencia',
    ];
}
