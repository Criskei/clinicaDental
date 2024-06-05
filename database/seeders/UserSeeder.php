<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombres' => 'Cristel Keiko',
            'apellidos' => 'Herrera Antezana',
            'celular' => 65626528,
            'email' => 'cristel.herrera.a22@gmail.com',
            'password' => 'administrador',
            'rol_id' => 1,
        ]);
    }
}
