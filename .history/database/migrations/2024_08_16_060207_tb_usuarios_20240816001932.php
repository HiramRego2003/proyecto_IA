<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('usuario_id');  // ID único para el usuario
            $table->text('nombre');  // Nombre del usuario
            $table->text('email')->unique();  // Email único
            $table->text('password');  // Contraseña del usuario
            $table->text('ubicacion')->nullable();  // Ubicación del usuario (opcional)
            $table->enum('tipo', ['voluntario', 'organizacion']);  // Tipo de usuario (voluntario o organización)
            $table->timestampTz('fecha_registro')->default(DB::raw('CURRENT_TIMESTAMP'));  // Fecha de registro con marca de tiempo
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }php artisan migrate

    
};
