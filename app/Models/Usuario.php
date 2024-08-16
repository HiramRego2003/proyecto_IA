<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'usuarios';

    protected $primaryKey = 'usuario_id';

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'ubicacion',
        'tipo',
        'fecha_registro'
    ];

    protected $hidden = [
        'password',
    ];

    public $timestamps = false;
}
