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
        Schema::create('conta_wises', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('comprovativo');
            $table->enum('estado', [0, 1, 2]);
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('pagamento_id')->constrained('pagamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conta_wises');
    }
};
