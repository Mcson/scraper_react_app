<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('webscrapper_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('date')->nullable();
            $table->string('time_hh')->nullable();
            $table->string('time_mm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webscrapper_schedules');
    }
};
