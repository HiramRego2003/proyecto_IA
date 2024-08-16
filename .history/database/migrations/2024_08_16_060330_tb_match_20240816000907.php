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
            $table->id('match_id');
            $table->foreignId('voluntario_id')->constrained('voluntarios');
            $table->foreignId('oportunidad_id')->constrained('oportunidades');
            $table->timestampTz('fecha_match')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('match');
    }
    
};
