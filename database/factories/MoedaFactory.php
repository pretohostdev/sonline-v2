<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Moeda>
 */
class MoedaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'codigo'=> $this->faker->randomNumber($nbDigits = 5, $strict = false),
            'simbolo' => $this->faker->currencyCode,
            'pais' => $this->faker->country,

            'cliente_id'=> function(){
                return Cliente::factory()->create()->id;
            }
            
        ];
    }
}
