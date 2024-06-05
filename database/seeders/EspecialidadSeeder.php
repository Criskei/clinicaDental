<?php

namespace Database\Seeders;

use App\Models\especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        especialidad::insert([
            ['nombre' => 'Endodoncia', 'descripcion' => 'Especialidad que se ocupa del tratamiento de los conductos radiculares y de la pulpa dental.', 'activo' => 1],
            ['nombre' => 'Periodoncia', 'descripcion' => 'Especialidad que trata las enfermedades de las encías y los huesos que soportan los dientes.', 'activo' => 1],
            ['nombre' => 'Ortodoncia', 'descripcion' => 'Especialidad que corrige las irregularidades de los dientes y de la mandíbula.', 'activo' => 1],
            ['nombre' => 'Odontopediatría', 'descripcion' => 'Especialidad que se ocupa de la salud dental de los niños y adolescentes.', 'activo' => 1],
            ['nombre' => 'Prostodoncia', 'descripcion' => 'Especialidad que se encarga de la restauración y el reemplazo de los dientes perdidos mediante prótesis.', 'activo' => 1],
            ['nombre' => 'Cirugía Oral y Maxilofacial', 'descripcion' => 'Especialidad que se dedica a la cirugía de la boca, la mandíbula y la cara.', 'activo' => 1],
            ['nombre' => 'Odontología General', 'descripcion' => 'Especialidad que abarca la prevención, diagnóstico y tratamiento de una amplia variedad de condiciones y enfermedades dentales.', 'activo' => 1],
            ['nombre' => 'Odontología Estética', 'descripcion' => 'Especialidad que se centra en mejorar la apariencia de los dientes, encías y la sonrisa.', 'activo' => 1],
            ['nombre' => 'Implantología', 'descripcion' => 'Especialidad que se dedica a la colocación de implantes dentales.', 'activo' => 1],
            ['nombre' => 'Patología Oral y Maxilofacial', 'descripcion' => 'Especialidad que se encarga del diagnóstico y tratamiento de las enfermedades de la boca y estructuras maxilofaciales.', 'activo' => 1],
            ['nombre' => 'Radiología Oral y Maxilofacial', 'descripcion' => 'Especialidad que utiliza técnicas de imagen para el diagnóstico de enfermedades y condiciones orales y maxilofaciales.', 'activo' => 1],
            ['nombre' => 'Odontología Geriátrica', 'descripcion' => 'Especialidad que se ocupa de la salud dental de las personas mayores.', 'activo' => 1],
            ['nombre' => 'Odontología Forense', 'descripcion' => 'Especialidad que aplica conocimientos dentales en investigaciones criminales y legales.', 'activo' => 1],
            ['nombre' => 'Odontología Deportiva', 'descripcion' => 'Especialidad que se ocupa de la salud dental y las lesiones orales relacionadas con la práctica deportiva.', 'activo' => 1]
        ]);
    }
}
