<?php

namespace Database\Seeders;

use App\Models\tipos_pago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipos_pago::insert([
            ['nombre' => 'Pago pendiente', 'descripcion' => 'El pago para la cita o tratamiento está pendiente.'],
            ['nombre' => 'Pago parcial', 'descripcion' => 'Se ha realizado un pago parcial para la cita o tratamiento.'],
            ['nombre' => 'Pago completado', 'descripcion' => 'El pago para la cita o tratamiento ha sido completado.']
        ]);
    }
}
