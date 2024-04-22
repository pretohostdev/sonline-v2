<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */

 use App\Models\Cliente;
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pais' => $this->faker->country,
            'cidade'=> $this->faker->city,
            'bairro'=> $this->faker->streetAddress,

            'cliente_id'=> function(){
                return Cliente::factory()->create()->id;
            }
        ];
    }
}
