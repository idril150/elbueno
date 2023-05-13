<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Preguntaphp>
 */
class PreguntaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'texto' => $this->faker->sentence(),
                'tipo' => $this->faker->randomElement([0,1]),
                'encuesta_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
