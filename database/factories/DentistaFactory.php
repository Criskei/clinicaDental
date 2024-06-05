<?php

namespace Database\Factories;

use App\Models\dentista;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dentista>
 */
class DentistaFactory extends Factory
{
    protected $model = dentista::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [            
            'disponibilidad' => 1
        ];
    }
}
