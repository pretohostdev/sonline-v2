<?php

namespace Database\Factories;

use App\Models\User;
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
            'valor'=> $this->faker->randomElement(['100', '200', '300']),
            'paisOrigem'=> $this->faker->randomElement(['Angola', 'Portugal']),
            'paisDestino'=> $this->faker->randomElement(['Angola', 'Portugal']),

            'user_id'=> function(){
                return User::factory()->create()->id;
            }
            ,
            'produto_id'=> function(){
                return Produto::factory()->create()->id;
            }
        ];
    }
}
