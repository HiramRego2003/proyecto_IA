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
                $table->id('organizacion_id');  // ID único para la organización
                $table->text('nombre_organizacion');
                $table->text('descripcion')->nullable();
                $table->timestamps();  // Marca de tiempo para created_at y updated_at
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('organizaciones');
        }
    
};
