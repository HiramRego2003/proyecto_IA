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
            $table->text('nombre');
            $table->text('email')->unique();
            $table->text('password');
            $table->text('ubicacion')->nullable();
            $table->enum('tipo', ['voluntario', 'organizacion']);
            $table->timestampTz('fecha_registro')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
    
};
