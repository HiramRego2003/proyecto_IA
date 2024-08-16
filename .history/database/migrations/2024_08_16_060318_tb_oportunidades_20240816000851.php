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
        Schema::create('oportunidades', function (Blueprint $table) {
            $table->id('oportunidad_id');
            $table->foreignId('organizacion_id')->constrained('organizaciones');
            $table->text('titulo');
            $table->text('descripcion')->nullable();
            $table->text('requisitos')->nullable();
            $table->text('duracion')->nullable();
            $table->text('ubicacion')->nullable();
            $table->timestampTz('fecha_publicacion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('oportunidades');
    }
    
};
