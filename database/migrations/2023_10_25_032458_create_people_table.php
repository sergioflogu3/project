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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_document_type');
            $table->foreign('id_document_type')->references('id')->on('parameters');
            $table->unsignedBigInteger('id_gender');
            $table->foreign('id_gender')->references('id')->on('parameters');
            $table->string('number_document');
            $table->string('complement')->nullable();
            $table->string('names');
            $table->string('lastname')->nullable();
            $table->string('surname')->nullable();
            $table->date('birth_date');
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
        Schema::dropIfExists('people');
    }
};
