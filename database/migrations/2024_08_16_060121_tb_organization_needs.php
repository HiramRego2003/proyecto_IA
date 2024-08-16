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
        Schema::create('organization_needs', function (Blueprint $table) {
            $table->id();  // ID único para la necesidad de la organización
            $table->unsignedBigInteger('organization_id');
            $table->text('need');
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('organization_needs');
    }
    
};
