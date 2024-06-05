<?php

namespace Database\Seeders;

use App\Models\metodos_pago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetodosPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        metodos_pago::insert([
            ['nombre' => 'Tarjeta de crédito', 'descripcion' => 'Pago realizado mediante tarjeta de crédito.', 'activo' => 1],
            ['nombre' => 'Tarjeta de débito', 'descripcion' => 'Pago realizado mediante tarjeta de débito.', 'activo' => 1],            
            ['nombre' => 'QR', 'descripcion' => 'Pago realizado mediante escaneo de código QR.', 'activo' => 1],
            ['nombre' => 'Efectivo', 'descripcion' => 'Pago realizado en efectivo.', 'activo' => 1]
        ]);
    }
}
