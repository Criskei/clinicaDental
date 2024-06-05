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
        Schema::create('citas_historiales', function (Blueprint $table) {
            $table->id('cita_historial_id');
            $table->foreignId('cita_id')->constrained('citas', 'cita_id');
            $table->foreignId('historial_medico_id')->constrained('historiales_medicos', 'historial_medico_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas_historiales');
    }
};
