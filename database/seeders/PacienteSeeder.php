<?php

namespace Database\Seeders;

use App\Models\paciente;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->state([
                'rol_id' => 4,
            ])
            ->count(50)
            ->has(paciente::factory())
            ->create();
    }
}
