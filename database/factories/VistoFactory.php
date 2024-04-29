<?php

namespace Database\Factories;

use App\Models\Pagamento;
use App\Models\Agendamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visto>
 */
class VistoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo' => $this->faker->name,
            'dataPrevista' => $this->faker->name,
            'paisDesejado' => $this->faker->name,

            'pagamento_id'=> function(){
                return Pagamento::factory()->create()->id;
            },

            'agendamento_id'=> function(){
                return Agendamento::factory()->create()->id;
            }
        ];
    }
}
