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
        Schema::create('productos_proveedores', function (Blueprint $table) {
            $table->id('producto_proveedor_id');
            $table->foreignId('producto_id')->constrained('productos', 'producto_id');
            $table->foreignId('proveedor_id')->constrained('proveedores', 'proveedor_id');
            $table->float('precio');
            $table->integer('cantidad');
            $table->dateTime('fecha_entrada');
            $table->dateTime('fecha_vencimiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_proveedors');
    }
};
