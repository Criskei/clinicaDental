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
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id('tratamiento_id');
            $table->foreignId('especialidad_id')->constrained('especialidades', 'especialidad_id');
            $table->string('nombre_tratamiento');
            $table->string('descripcion');
            $table->float('precio');
            $table->integer('duracion');
            $table->boolean('activo')->default(1); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tratamientos');
    }
};
