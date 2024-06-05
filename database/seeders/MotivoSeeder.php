<?php

namespace Database\Seeders;

use App\Models\motivo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        motivo::insert([
            ['nombre' => 'Vacaciones', 'descripcion' => 'El dentista está de vacaciones.', 'activo' => 1],
            ['nombre' => 'Enfermedad', 'descripcion' => 'El dentista está enfermo.', 'activo' => 1],
            ['nombre' => 'Asuntos personales', 'descripcion' => 'El dentista tiene asuntos personales que atender.', 'activo' => 1],
            ['nombre' => 'Capacitación', 'descripcion' => 'El dentista está participando en una capacitación o curso.', 'activo' => 1],
            ['nombre' => 'Emergencia familiar', 'descripcion' => 'El dentista tiene una emergencia familiar.', 'activo' => 1],
            ['nombre' => 'Licencia médica', 'descripcion' => 'El dentista tiene una licencia médica.', 'activo' => 1],
            ['nombre' => 'Otro motivo', 'descripcion' => 'Otro motivo no especificado para la ausencia del dentista.', 'activo' => 1]
        ]);
    }
}
