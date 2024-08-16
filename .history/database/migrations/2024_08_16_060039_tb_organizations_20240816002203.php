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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();  // ID único para la organización
            $table->text('name');
            $table->text('contact_email')->unique();
            $table->text('location')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();  // Marca de tiempo para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('organizations');
    }
    
};
