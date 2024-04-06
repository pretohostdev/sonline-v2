<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Listando Clientes";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "View de Cadastro de novo Cliente";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Adicionando novo Cliente";
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return "Mostrar um cliente";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return "View de Editar um cliente";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        return "Editar um cliente no banco de dados";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        return "Eliminar um cliente do Banco de dados";
    }
}
