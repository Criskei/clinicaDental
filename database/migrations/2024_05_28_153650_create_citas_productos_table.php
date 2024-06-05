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
        Schema::create('citas_productos', function (Blueprint $table) {
            $table->id('cita_producto_id');
            $table->foreignId('cita_id')->constrained('citas', 'cita_id');
            $table->foreignId('producto_id')->constrained('productos', 'producto_id');
            $table->integer('cantidad');
            $table->boolean('activo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas_productos');
    }
};
