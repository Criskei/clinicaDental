<?php

namespace Database\Seeders;

use App\Models\categorias_documento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categorias_documento::insert([
            ['nombre'=>'Radiografias','activo'=>1],
            ['nombre'=>'Fotografias','activo'=>1],
            ['nombre'=>'Laboratorios','activo'=>1 ]
        ]);
    }
}
