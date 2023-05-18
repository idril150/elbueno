<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Respuesta>
 */
class RespuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'inciso' => $this->faker->randomNumber(1,4),
                'texto' => $this->faker->sentence(),  
                'estado' => $this->faker->randomElement([0,1]),              
                'pregunta_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
