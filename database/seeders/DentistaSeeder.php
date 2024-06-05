<?php

namespace Database\Seeders;

use App\Models\dentista;
use App\Models\especialidad;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DentistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidades = especialidad::all();

        User::factory()
            ->count(5)
            ->state(['rol_id' => 2])
            ->has(
                dentista::factory()
                    ->afterCreating(function (dentista $dentista) use ($especialidades) {
                        $dentista->especialidades()->attach($especialidades->random(5));
                    })
            )
            ->create();
    }
}
