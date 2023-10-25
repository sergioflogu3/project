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
        Schema::create('allocation_assets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_allocation');
            $table->foreign('id_allocation')->references('id')->on('allocations');
            $table->bigInteger('id_asset');
            $table->foreign('id_asset')->references('id')->on('assets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allocation_assets');
    }
};
