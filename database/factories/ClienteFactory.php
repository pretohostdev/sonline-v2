<?php

namespace Database\Factories;

use App\Models\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => $this->faker->name,
            'password' => $this->faker->password,
            'email'=> $this->faker->safeEmail,
            'dataNascimento'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'genero'=> $this->faker->randomElement(['masculino', 'feminino', 'outro']),
            'contacto'  =>  $this->faker->phoneNumber,

            // 'endereco_id'=> function(){
            //     return Endereco::factory()->create()->id;
            // }
        ];
    }
}
