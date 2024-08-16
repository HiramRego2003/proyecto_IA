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
            $table->id('feedback_id');
            $table->foreignId('match_id')->constrained('match');
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->text('comentario')->nullable();
            $table->integer('calificacion')->check('calificacion >= 1 and calificacion <= 5');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
    
};
