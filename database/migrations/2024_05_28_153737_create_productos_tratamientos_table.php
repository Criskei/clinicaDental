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
        Schema::create('productos_tratamientos', function (Blueprint $table) {
            $table->id('producto_tratamiento_id');
            $table->foreignId('tratamiento_id')->constrained('tratamientos', 'tratamiento_id');
            $table->foreignId('producto_id')->constrained('productos', 'producto_id');
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_tratamientos');
    }
};
