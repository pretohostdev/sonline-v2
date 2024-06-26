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
            $table->enum('estado', ['0', '1', '2']); 
            $table->string('paisOrigem'); 
            $table->string('paisDestino'); 
            $table->string('comprovativo'); 

            // Novos campos
            $table->double('total'); 
            $table->string('fotoProduto')->nullable();
            $table->string('enderecoEntrega')->nullable();

            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
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
