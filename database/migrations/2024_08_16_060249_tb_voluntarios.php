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
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->id('voluntario_id');  // ID único para el voluntario
            $table->text('habilidades')->nullable();
            $table->text('intereses')->nullable();
            $table->text('disponibilidad')->nullable();
            $table->text('experiencia')->nullable();
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('voluntarios');
    }
    
};
