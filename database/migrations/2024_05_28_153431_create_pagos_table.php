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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('pago_id');
            $table->foreignId('cita_id')->constrained('citas', 'cita_id');
            $table->foreignId('metodo_pago_id')->constrained('metodos_pagos', 'metodo_pago_id');
            $table->foreignId('tipo_pago_id')->constrained('tipos_pagos', 'tipo_pago_id');
            $table->float('monto');
            $table->dateTime('fecha');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
