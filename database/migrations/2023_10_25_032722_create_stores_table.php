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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_input');
            $table->foreign('id_input')->references('id')->on('inputs');
            $table->bigInteger('id_image');
            $table->foreign('id_image')->references('id')->on('images');
            $table->bigInteger('id_item_type');
            $table->foreign('id_item_type')->references('id')->on('item_types');
            $table->bigInteger('id_region');
            $table->foreign('id_region')->references('id')->on('regions');
            $table->string('name_article');
            $table->string('unit');
            $table->integer('balance');
            $table->string('number_item');
            $table->boolean('active');
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
        Schema::dropIfExists('stores');
    }
};
