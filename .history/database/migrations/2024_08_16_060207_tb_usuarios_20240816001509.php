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
            $table->unsignedBigInteger('usuario_id')->primary();
            $table->text('nombre');
            $table->text('email')->unique();
            $table->text('password');
            $table->text('ubicacion')->nullable();
            $table->enum('tipo', ['voluntario', 'organizacion']);
            $table->timestampTz('fecha_registro')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }
    
    
};
