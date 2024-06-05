<?php

namespace Database\Seeders;

use App\Models\dentista;
use App\Models\paciente;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RolSeeder::class);
        $this->call(AlergiaSeeder::class);
        $this->call(CategoriasDocumentoSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(DienteSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(MetodosPagoSeeder::class);
        $this->call(MotivoSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(TratamientoSeeder::class);
        $this->call(TiposHistorialSeeder::class);
        $this->call(TiposPagoSeeder::class); 
        $this->call(ProductosTratamientoSeeder::class); 
        $this->call(UserSeeder::class); 
        $this->call(PacienteSeeder::class);
        $this->call(DentistaSeeder::class);   
        $this->call(ProveedorSeeder::class);  
        $this->call(CitaSeeder::class);  
        $this->call(HistorialesMedicoSeeder::class);          
    }
}
