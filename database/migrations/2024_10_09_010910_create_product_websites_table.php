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
        Schema::create('product_websites', function (Blueprint $table) {
            $table->id();
            $table->string('pcode');
            $table->string('pname');
            $table->string('module');
            $table->string('country');
            $table->string('terms_condition');
            $table->string('terms_condition_url');
            $table->string('outlet_id');
            $table->string('url');
            $table->string('title');
            $table->string('price');
            $table->string('specs')->nullable();
            $table->string('user_id')->nullable();
            $table->string('location')->nullable();
            $table->string('icp_product')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_websites');
    }
};
