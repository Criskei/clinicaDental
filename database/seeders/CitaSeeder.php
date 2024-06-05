<?php

namespace Database\Seeders;

use App\Models\cita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cita::factory()->count(150)->create();
    }
}
