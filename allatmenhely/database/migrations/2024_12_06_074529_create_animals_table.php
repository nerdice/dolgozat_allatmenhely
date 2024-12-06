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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('sex');
            $table->integer('age');
            $table->unsignedBigInteger('shelter_id');
            $table->foreign('shelter_id')->references('id')->on('shelters')->onDelete('cascade');
            $table->unsignedBigInteger('breed_id');
            $table->foreign('breed_id')->references('id')->on('breeds')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
