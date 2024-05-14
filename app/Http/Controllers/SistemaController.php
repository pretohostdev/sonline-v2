<?php

namespace App\Http\Controllers;

use App\Models\Sistema;
use Illuminate\Http\Request;

class SistemaController extends Controller
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
    public function show(Sistema $sistema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sistema $sistema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $dados = json_decode($request->getContent(), true);
        
        $sistema = Sistema::find(1);

        $sistema->iban = $dados['iban'];
        $sistema->taxa = $dados['taxa'];
        $sistema->precoConta = $dados['precoConta'];
        $sistema->precoAgendamentoDocumento =  $dados['precoDocumento'];
        $sistema->precoAgendamentoVisto = $dados['precoVisto'];
        $sistema->precoConsultoria = $dados['precoConsultoria'];
        $sistema->save();

        if($sistema){
            return response()->json(['atualizado' => 'true'], 200);
        }
        
        return response()->json(['atualizado' => 'false'], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sistema $sistema)
    {
        //
    }
}
