<?php

namespace Database\Seeders;

use App\Models\productos_tratamiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosTratamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        productos_tratamiento::insert([
            ['tratamiento_id' => 1, 'producto_id' => 1, 'cantidad' => 1],
            ['tratamiento_id' => 1, 'producto_id' => 2, 'cantidad' => 1],
            ['tratamiento_id' => 1, 'producto_id' => 11, 'cantidad' => 1],
            ['tratamiento_id' => 1, 'producto_id' => 12, 'cantidad' => 1],
            ['tratamiento_id' => 1, 'producto_id' => 21, 'cantidad' => 1],
            ['tratamiento_id' => 1, 'producto_id' => 22, 'cantidad' => 1],

            ['tratamiento_id' => 2, 'producto_id' => 3, 'cantidad' => 1],
            ['tratamiento_id' => 2, 'producto_id' => 4, 'cantidad' => 1],
            ['tratamiento_id' => 2, 'producto_id' => 11, 'cantidad' => 1],
            ['tratamiento_id' => 2, 'producto_id' => 12, 'cantidad' => 1],
            ['tratamiento_id' => 2, 'producto_id' => 21, 'cantidad' => 1],
            ['tratamiento_id' => 2, 'producto_id' => 22, 'cantidad' => 1],

            ['tratamiento_id' => 3, 'producto_id' => 7, 'cantidad' => 1],
            ['tratamiento_id' => 3, 'producto_id' => 8, 'cantidad' => 1],
            ['tratamiento_id' => 3, 'producto_id' => 11, 'cantidad' => 1],
            ['tratamiento_id' => 3, 'producto_id' => 12, 'cantidad' => 1],
            ['tratamiento_id' => 3, 'producto_id' => 21, 'cantidad' => 1],
            ['tratamiento_id' => 3, 'producto_id' => 22, 'cantidad' => 1],
        ]);
    }
}
