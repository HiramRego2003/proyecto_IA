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
        Schema::create('recomendaciones', function (Blueprint $table) {
            $table->id('recomendacion_id');  // ID único para la recomendación
            $table->unsignedBigInteger('voluntario_id');
            $table->unsignedBigInteger('oportunidad_id');
            $table->timestampTz('fecha_recomendacion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('recomendaciones');
    }
};
