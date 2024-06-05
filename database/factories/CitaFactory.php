<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cita>
 */
class CitaFactory extends Factory
{
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
            'estado_id' => $this->faker->numberBetween(1, 7),
            'fecha_cita' => fake()->dateTimeBetween('-1 year', 'now'),
            'hora_inicio' => fake()->dateTimeBetween('-1 year', 'now'),
            'hora_fin' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
