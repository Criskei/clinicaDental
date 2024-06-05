<?php

namespace Database\Factories;

use App\Models\historiales_medico;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\historiales_medico>
 */
class historiales_medicoFactory extends Factory
{
    protected $model = historiales_medico::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'paciente_id' => $this->faker->numberBetween(1, 50),
            'dentista_id' => $this->faker->numberBetween(1, 5),
            'tratamiento_id' => $this->faker->numberBetween(1, 29),
            'diente_id' => $this->faker->numberBetween(1, 35),            
            'estado_id' => $this->faker->numberBetween(1, 7),
            'tipo_historial_id' => 1,
            'nota' => $this->faker->paragraph(1),
        ];
    }
}
