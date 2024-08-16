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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('feedback_id');  // ID único para el feedback
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('usuario_id');
            $table->text('comentario')->nullable();
            $table->integer('calificacion')->check('calificacion >= 1 AND calificacion <= 5');
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
    
};
