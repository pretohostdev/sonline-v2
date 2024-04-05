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
        Schema::create('redirecionamentos', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->enum('estado', [0, 1, 2]); 
            $table->timestamps();

            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('produto_id')->constrained('produtos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redirecionamentos');
    }
};
