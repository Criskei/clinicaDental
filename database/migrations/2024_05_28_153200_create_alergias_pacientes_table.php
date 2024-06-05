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
        Schema::create('alergias_pacientes', function (Blueprint $table) {
            $table->id('alergia_paciente_id');
            $table->foreignId('alergia_id')->constrained('alergias', 'alergia_id');
            $table->foreignId('paciente_id')->constrained('pacientes', 'paciente_id');
            $table->boolean('activo')->default(1); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alergias_pacientes');
    }
};
