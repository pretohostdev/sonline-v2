<?php

namespace Database\Factories;


use App\Models\Cliente;
use App\Models\Pagamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContaWise>
 */
class ContaWiseFactory extends Factory
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
            'estado'=>$this->faker->randomElement(['1', '2', '3']),

            'cliente_id'=> function(){
                return Cliente::factory()->create()->id;
            },

            'pagamento_id'=> function(){
                return Pagamento::factory()->create()->id;
            }
        ];
    }
}
