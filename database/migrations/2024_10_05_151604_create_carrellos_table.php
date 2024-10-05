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
        Schema::create('carrellos', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('room_id')->nullable();
            $table->string('room_nome')->nullable();
            $table->string('immagine')->nullable();
            $table->string('room_prezzo')->nullable();
            $table->string('room_quantità')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrellos');
    }
};
