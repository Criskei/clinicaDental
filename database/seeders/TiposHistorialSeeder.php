<?php

namespace Database\Seeders;

use App\Models\tipos_historial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposHistorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipos_historial::insert([
            ['nombre_tipo_historial'=>'Dentista', 'descripcion'=>'Tratamiento agregado por un dentista'],
            ['nombre_tipo_historial'=>'Paciente', 'descripcion'=>'Tratamiento agregado de manera personal por un paciente'],
        ]);
    }
}
