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
        Schema::create('organizaciones', function (Blueprint $table) {
            $table->id('organizacion_id');
            $table->text('nombre_organizacion');
            $table->text('descripcion')->nullable();
            $table->foreign('organizacion_id')->references('usuario_id')->on('usuarios');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('organizaciones');
    }
    
};
