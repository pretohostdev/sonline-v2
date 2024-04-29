<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Moeda;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; // Para pegar o id do usuário autenticado


class MoedaController extends Controller
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
        return view('moeda.create');
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
    public function show(Moeda $moeda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Moeda $moeda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Moeda $moeda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moeda $moeda)
    {
        //
    }

    public function estado()
    {
        $id = Auth::id();
        $cliente = User::find($id);

        // $clientesSolicitaramMoeda = $cliente->moedas;

         // Verificar se o cliente já efectuou algum redirecionamento de produto
         if(isset($cliente->moeda->id)){
            $moeda = (Object)[
                'data' => $redirecionamento->data,
                'estado' => $redirecionamento->estado,
                'valor' => $redirecionamento->valor,
                'paisOrigem' => $redirecionamento->paisOrigem,
                'paisDestino' => $redirecionamento->paisDestino,
                'listaRedirecionamentos' => $clientesComRedirecionamento
            ];
        }
        else{
                $moeda = (Object)[
                    'data' => '',
                    'estado' => '',
                    'valor' => '',
                    'paisOrigem' => '',
                    'paisDestino' => '',
                    'listaRedirecionamentos' => []
                ];
        }

        return view('moeda.show', compact('moeda'));
    }
}
