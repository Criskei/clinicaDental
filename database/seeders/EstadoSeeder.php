<?php

namespace Database\Seeders;

use App\Models\estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        estado::insert([
            ['nombre_estado' => 'Pendiente', 'descripcion' => 'Cita o tratamiento está pendiente de realizarse.'],
            ['nombre_estado' => 'Confirmado', 'descripcion' => 'Cita o tratamiento ha sido confirmado.'],
            ['nombre_estado' => 'En progreso', 'descripcion' => 'Cita o tratamiento está actualmente en progreso.'],
            ['nombre_estado' => 'Completado', 'descripcion' => 'Cita o tratamiento ha sido completado satisfactoriamente.'],
            ['nombre_estado' => 'Cancelado', 'descripcion' => 'Cita o tratamiento ha sido cancelado.'],
            ['nombre_estado' => 'Reprogramado', 'descripcion' => 'Cita o tratamiento ha sido reprogramado para otra fecha y/o hora.'],
            ['nombre_estado' => 'No asistió', 'descripcion' => 'El paciente no asistió a la cita programada.'],
        ]);
    }
}
