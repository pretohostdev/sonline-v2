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
        Schema::create('vistos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('estado');
            $table->string('descricao')->nullable();
            $table->string('documento');
            $table->string('comprovativo');
            $table->string('dataPrevista');
            $table->string('paisDesejado');
            $table->string('dataSolicitacao');
            $table->timestamps();

            $table->foreignId('user_id')->nullable()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vistos');
    }
};
