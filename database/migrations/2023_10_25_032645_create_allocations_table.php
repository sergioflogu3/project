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
        Schema::create('allocations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_staff');
            $table->foreign('id_staff')->references('id')->on('staff');
            $table->bigInteger('id_project');
            $table->foreign('id_project')->references('id')->on('projects');
            $table->bigInteger('id_region');
            $table->foreign('id_region')->references('id')->on('regions');
            $table->date('date_allocation');
            $table->boolean('active')->default(true);
            $table->string('user_register');
            $table->string('ip_register');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allocations');
    }
};
