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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('titolo')->nullable();
            $table->string('immagine')->nullable();
            $table->longText('descrizione')->nullable();
            $table->string('prezzo')->nullable();
            $table->string('wifi')->default('yes');
            $table->string('tipo')->nullable();

            $table->string('cameras')->default('0');
            $table->string('camerasp')->default('0');
            $table->string('camerad')->default('0');
            $table->string('cameradp')->default('0');
            $table->string('camerat')->default('0');
            $table->string('cameratp')->default('0');
            $table->string('cameraq')->default('0');
            $table->string('cameraqp')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
