<?php

namespace Database\Factories;

use App\Models\User;
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
            'montante' => $this->faker->name,
            'data' => $this->faker->date($format = 'Y-m-d', $max = 'now'),


            'user_id'=> function(){
                return User::factory()->create()->id;
            }
            
        ];
    }
}
