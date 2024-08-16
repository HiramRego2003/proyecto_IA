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
        Schema::create('volunteer_skills', function (Blueprint $table) {
            $table->id();  // ID único para la habilidad del voluntario
            $table->unsignedBigInteger('volunteer_id');
            $table->text('skill');
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('volunteer_skills');
    }
    
};
