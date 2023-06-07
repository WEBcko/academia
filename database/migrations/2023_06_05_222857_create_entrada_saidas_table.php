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
        Schema::create('entrada_saidas', function (Blueprint $table) {
            $table->id();
            $table->boolean('ativo')->default(1);
            $table->dateTime('hora_entrada');
            $table->dateTime('hora_saida');
            $table->foreignId('cliente_id')->constrained('users');
            $table->foreignId('personal_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrada_saidas');
    }
};
