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
        Schema::create('dentistas_especialidades', function (Blueprint $table) {
            $table->id('dentista_especialidad_id');
            $table->foreignId('dentista_id')->constrained('dentistas', 'dentista_id');
            $table->foreignId('especialidad_id')->constrained('especialidades', 'especialidad_id');
            $table->boolean('activo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentistas_especialidades');
    }
};
