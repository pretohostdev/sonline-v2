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
        Schema::create('moedas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('data');
            $table->double('valorPagar');
            $table->string('documento');
            $table->string('montante');
            $table->enum('estado', ['0', '1', '2']); 
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moedas');
    }
};
