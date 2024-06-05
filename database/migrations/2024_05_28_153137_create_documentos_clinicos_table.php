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
        Schema::create('documentos_clinicos', function (Blueprint $table) {
            $table->id('documento_clinico_id');
            $table->foreignId('paciente_id')->constrained('pacientes', 'paciente_id');
            $table->foreignId('dentista_id')->constrained('dentistas', 'dentista_id');
            $table->foreignId('categoria_documento_id')->constrained('categorias_documentos', 'categoria_documento_id');
            $table->string('nombre');
            $table->string('ruta');
            $table->timestamps();
            $table->boolean('activo')->default(1);          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos_clinicos');
    }
};
