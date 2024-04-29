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
            $table->string('dataPrevista');
            $table->string('paisDesejado');
            $table->timestamps();

            $table->foreignId('pagamento_id')->nullable()->constrained('pagamentos');
            $table->foreignId('agendamento_id')->nullable()->constrained('agendamentos');
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
