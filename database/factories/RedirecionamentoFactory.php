<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Redirecionamento>
 */
class RedirecionamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'data' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'estado'=> $this->faker->randomElement(['1', '2', '3']),

            'cliente_id'=> function(){
                return Cliente::factory()->create()->id;
            }
            ,
            'produto_id'=> function(){
                return Produto::factory()->create()->id;
            }
        ];
    }
}
