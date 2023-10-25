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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_person');
            $table->foreign('id_person')->references('id')->on('people');
            $table->unsignedBigInteger('id_staff_type');
            $table->foreign('id_staff_type')->references('id')->on('parameters');
            $table->unsignedBigInteger('id_position');
            $table->foreign('id_position')->references('id')->on('parameters');
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
        Schema::dropIfExists('staff');
    }
};
