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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volunteer_id')->constrained('volunteers');
            $table->foreignId('organization_id')->constrained('organizations');
            $table->timestampTz('matched_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('matches');
    }
    
};
