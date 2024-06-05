<?php

namespace Database\Seeders;

use App\Models\alergia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlergiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        alergia::insert([
            ['nombre'=>'Lidocaína', 'activo'=>1],
            ['nombre'=>'Amoxicilina', 'activo'=>1],
            ['nombre'=>'Ibuprofeno', 'activo'=>1],
            ['nombre'=>'Clorhexidina', 'activo'=>1],
            ['nombre'=>'Metrodinazol', 'activo'=>1],
            ['nombre'=>'Ácido acetilsalicílico (aspirina)', 'activo'=>1],
            ['nombre'=>'Tetraciclina', 'activo'=>1],
            ['nombre'=>'Peróxido de hidrógeno', 'activo'=>1],
            ['nombre'=>'Clindamicina', 'activo'=>1],
            ['nombre'=>'Éster etílico de ácido aminobenzoico', 'activo'=>1]
        ]);
    }
}
