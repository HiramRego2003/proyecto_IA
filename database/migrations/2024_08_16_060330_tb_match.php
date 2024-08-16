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
        Schema::create('match', function (Blueprint $table) {
            $table->id('match_id');  // ID único para el match
            $table->unsignedBigInteger('voluntario_id');
            $table->unsignedBigInteger('oportunidad_id');
            $table->timestampTz('fecha_match')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('match');
    }
    
};
