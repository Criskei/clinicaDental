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
        Schema::create('ausencias', function (Blueprint $table) {
            $table->id('ausencia_id');
            $table->foreignId('dentista_id')->constrained('dentistas', 'dentista_id');
            $table->foreignId('motivo_id')->constrained('motivos', 'motivo_id');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ausencias');
    }
};
