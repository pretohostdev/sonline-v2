<?php

namespace App\Http\Controllers;

use App\Models\Visto;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; // Para pegar o id do usuário autenticado


class VistoController extends Controller
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
        return view('visto.create');
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
    public function show(Visto $visto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visto $visto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visto $visto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visto $visto)
    {
        //
    }

    public function estado()
    {
        $id = Auth::id();

        // return $id;

        $visto = Visto::find($id);
        $cliente = User::find($id);

        // Verificar se o cliente já efectuou algum redirecionamento de produto
        if($cliente->vistos->count() > 0){

            $clientesComSolicitaVisto = $cliente->vistos;

            $visto = (Object)[
                'tipo' => $visto->tipo,
                'dataSolicitacao' => $visto->dataSolicitacao,
                'dataPrevista' => $visto->dataPrevista,
                'paisDesejado' => $visto->paisDesejado,
                'listaSolicitacaoVistos' =>  $clientesComSolicitaVisto
            ];
        }
        else{
            
            $visto = (Object)[
                'tipo' => '',
                'dataSolicitacao' => '',
                'dataPrevista' => '',
                'paisDesejado' => '',
                'listaSolicitacaoVistos' =>  []
            ];   

        }

        return view('visto.show', compact('visto'));
    }

}
