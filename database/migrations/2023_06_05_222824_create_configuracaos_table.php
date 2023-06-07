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
        Schema::create('configuracaos', function (Blueprint $table) {
            $table->id();
            $table->boolean('ativo')->default(1);
            $table->time('horario_funcionamento');
            $table->integer('ocupacao');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuracaos');
    }
};
