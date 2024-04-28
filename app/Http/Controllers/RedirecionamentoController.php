<?php

namespace App\Http\Controllers;

use App\Models\Redirecionamento;
use Illuminate\Http\Request;

class RedirecionamentoController extends Controller
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
        return view('redirecionamento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json(['message' => 'Dados salvos com sucesso'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Redirecionamento $redirecionamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Redirecionamento $redirecionamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Redirecionamento $redirecionamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Redirecionamento $redirecionamento)
    {
        //
    }
}
