<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agendamento>
 */
class AgendamentoFactory extends Factory
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
            'observacao'=> $this->faker->text,

            'cliente_id'=> function(){
                return Cliente::factory()->create()->id;
            }
        ];
    }
}
