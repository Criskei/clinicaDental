<?php

namespace Database\Seeders;

use App\Models\categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categoria::insert ([
            ['nombre'=>'Instrumental Dental','activo'=>1],
            ['nombre'=>'Restauración','activo'=>1],
            ['nombre'=>'Impresión','activo'=>1],
            ['nombre'=>'Profilaxis','activo'=>1],
            ['nombre'=>'Desinfección y Esterilización','activo'=>1],
            ['nombre'=>'Endodoncia','activo'=>1],
            ['nombre'=>'Ortodoncia','activo'=>1],
            ['nombre'=>'Higiene Bucal','activo'=>1],
            ['nombre'=>'Anestésicos','activo'=>1],
            ['nombre'=>'Protección Personal','activo'=>1],
            ['nombre'=>'Cirugía Oral','activo'=>1],
            ['nombre'=>'Radiología','activo'=>1],
            ['nombre'=>'Blanqueamiento Dental','activo'=>1],
            ['nombre'=>'Accesorios y Consumibles','activo'=>1],
        ]);
    }
}
