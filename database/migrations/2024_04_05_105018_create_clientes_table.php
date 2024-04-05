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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->date('dataNascimento');
            $table->string('contacto');
            $table->enum('genero', ['Masculino', 'Feminino', 'Outro']);
            $table->timestamps();

            $table->foreignId('endereco_id')->constrained('enderecos'); /* Chave Estrangeira */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
