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
        Schema::create('request_stores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_request');
            $table->foreign('id_request')->references('id')->on('requests');
            $table->bigInteger('id_store');
            $table->foreign('id_store')->references('id')->on('stores');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_stores');
    }
};
