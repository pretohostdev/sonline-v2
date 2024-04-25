<?php

namespace App\Http\Controllers;

use App\Models\ContaWise;
use Illuminate\Http\Request;

class ContaWiseController extends Controller
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
        return view('contaWise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $dados = json_decode($request->getContent(), true);

        // try {
        //     ContaWise::create([
        //         'data' => $dados['data'],
        //         'estado' => '0'
        //     ]);
        // } catch (\Exception $e) {
        //     return response()->json($e);
        // }

        // Retornar uma resposta, se necessário
        return response()->json(['message' => 'Dados salvos com sucesso'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(ContaWise $contaWise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContaWise $contaWise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContaWise $contaWise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContaWise $contaWise)
    {
        //
    }
}
