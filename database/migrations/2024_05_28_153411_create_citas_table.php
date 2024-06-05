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
        Schema::create('citas', function (Blueprint $table) {
            $table->id('cita_id');
            $table->foreignId('paciente_id')->constrained('pacientes', 'paciente_id');
            $table->foreignId('dentista_id')->constrained('dentistas', 'dentista_id');
            $table->foreignId('estado_id')->constrained('estados', 'estado_id');
            $table->date('fecha_cita');
            $table->time('hora_inicio');
            $table->time('hora_fin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
