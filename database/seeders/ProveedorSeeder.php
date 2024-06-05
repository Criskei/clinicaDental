<?php

namespace Database\Seeders;

use App\Models\producto;
use App\Models\proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = producto::all();

        proveedor::factory()
            ->count(4)
            ->afterCreating(function (proveedor $proveedor) use ($productos) {
                $proveedor->productos()->attach(
                    $productos->random(6),
                    [
                        'precio' => fake()->randomFloat(2, 0, 100),
                        'cantidad' => fake()->numberBetween(30, 250),
                        'fecha_entrada' => fake()->dateTimeBetween('-1 year', 'now'),
                        'fecha_vencimiento' => fake()->dateTimeBetween('now', '+1 year'),
                    ]
                );
            })
            ->create();
    }
}
