<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Para pegar o id do usuário autenticado


class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agendamento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agendamento = Agendamento::create([
            'tipo' => $request->tipo,
            'data' => $request->data,
            'estado' => '0',
            'observacao' => $request->observacao,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('agendamento.estado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agendamento $agendamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agendamento $agendamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agendamento $agendamento)
    {
        //
    }

    public function estado()
    {
        $id = Auth::id();

        $agendamento = Agendamento::where('user_id', $id)->latest()->first();
        
        $cliente = User::find($id);

        // Verificar se o cliente já efectuou algum agendamento de serviço
        if($cliente->agendamentos->count() > 0){

            $clientesAgendamentos = $cliente->agendamentos;
            $agendamento = (Object)[
                'nome' => $cliente->name,
                'data' => $agendamento->data,
                'tipo' => $agendamento->tipo,
                'estado' => $agendamento->estado,
                'observacao' => $agendamento->observacao,
                'listaAgendamentos' =>  $clientesAgendamentos
            ];
        }
        else{

            $agendamento = (Object)[
                'data' => '',
                'tipo' => '',
                'estado' => '',
                'observacao' => '',
                'listaSolicitacaoAgendamentos' => []
            ];   
           
        }

        return view('agendamento.show', compact('agendamento'));
    }

}
