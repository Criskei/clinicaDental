<?php

namespace Database\Seeders;

use App\Models\historiales_medico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorialesMedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        historiales_medico::factory()->count(150)->create();
    }
}
