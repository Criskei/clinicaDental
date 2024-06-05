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
        Schema::create('historiales_medicos', function (Blueprint $table) {
            $table->id('historial_medico_id');
            $table->foreignId('paciente_id')->constrained('pacientes', 'paciente_id');
            $table->foreignId('dentista_id')->constrained('dentistas', 'dentista_id');
            $table->foreignId('tratamiento_id')->constrained('tratamientos', 'tratamiento_id');
            $table->foreignId('diente_id')->constrained('dientes', 'diente_id');
            $table->foreignId('receta_medica_id')->nullable()->constrained('recetas_medicas', 'receta_medica_id');
            $table->foreignId('estado_id')->constrained('estados', 'estado_id');
            $table->foreignId('tipo_historial_id')->constrained('tipos_historiales', 'tipo_historial_id');
            $table->string('nota');
            $table->timestamps();
            $table->boolean('activo')->default(1); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiales_medicos');
    }
};
