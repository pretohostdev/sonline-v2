<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pagamento>
 */
class PagamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'valor' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
            'data'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'estado'=> $this->faker->randomElement(['1', '2', '3']),
            'dataVencimento'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),

            'cliente_id'=> function(){
                return Cliente::factory()->create()->id;
            }
        ];
    }
}
