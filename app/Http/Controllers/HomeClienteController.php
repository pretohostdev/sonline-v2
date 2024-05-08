<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth; // Para pegar o id do usuário autenticado


class HomeClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        $cliente = User::find($id);

        // Considerando que a tabela Endereço ainda não foi cadastrada

        $pais = !isset($cliente->endereco->pais) ? "" : $cliente->endereco->pais;
        $cidade = !isset($cliente->endereco->cidade) ? "" : $cliente->endereco->cidade;
        $bairro = !isset($cliente->endereco->bairro) ? "" : $cliente->endereco->bairro;

        // $dia_nascimento = $cliente->dataNascimento;
        $data = Carbon::createFromFormat('Y-m-d', $cliente->dataNascimento); // Cria um objeto Carbon com uma data específica

        $dia = $data->day; // Obtém apenas o dia da data
        $mes = $data->month;
        $ano = $data->year;

        $cliente = (Object)[
            'id' => $cliente->id,
            'nome' => $cliente->name,
            'email' => $cliente->email,
            'genero' => $cliente->genero,
            'contacto' => $cliente->contacto,
            'diaNascimento' => $dia,
            'mesNascimento' =>$mes,
            'anoNascimento' => $ano,
            'pais' => $pais,
            'cidade' => $cidade,
            'bairro' => $bairro,

            // Dados totais
            'totalMoedas' =>  $cliente->moedas->count(),
            'totalContas' =>  $cliente->contaWise->count(),
            'totalRedirecionamentos' => $cliente->redirecionamentos->count()
        ];

        return view('homeCliente', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
