<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Encuesta>
 */
class EncuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement([0,1]),
            'carrera' => $this->faker->randomElement(['sistemas','industrial','gestion empresarial']),
            'periodo' => $this->faker->sentence(),

        ];
    }
}
