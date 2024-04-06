<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Agendamento;
use App\Models\Cliente;
use App\Models\ContaWise;
use App\Models\Documento;
use App\Models\Endereco;
use App\Models\Moeda;
use App\Models\Produto;
use App\Models\Pagamento;
use App\Models\Redirecionamento;
use App\Models\Visto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Admin::factory(2)->create();
        Agendamento::factory(2)->create();
        Cliente::factory(2)->create();
        ContaWise::factory(2)->create();
        Documento::factory(2)->create();
        Endereco::factory(2)->create();
        Moeda::factory(2)->create();
        Pagamento::factory(2)->create();
        Produto::factory(2)->create();
        Redirecionamento::factory(2)->create();
        Visto::factory(2)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
