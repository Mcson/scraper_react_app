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
        Schema::table('household_outlets', function (Blueprint $table) {
            $table->id();
            $table->string('ocode');
            $table->string('oname');
            $table->string('ccode');
            $table->string('lvl2',2)->default('00');
            $table->string('lvl3',2)->default('00');
            $table->string('lvl4',2)->default('00');
            $table->string('lvl5',3)->default('000');
            $table->string('address');
            // $table->integer('otype');
            // $table->integer('loctype');
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('household_outlets', function (Blueprint $table) {
            //
        });
    }
};
