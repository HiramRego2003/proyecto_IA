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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();  // ID único para el voluntario
            $table->text('name');
            $table->text('email')->unique();
            $table->text('phone_number')->nullable();
            $table->text('social_media_handle')->nullable();
            $table->text('location')->nullable();
            $table->text('availability')->nullable();
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
    
};
