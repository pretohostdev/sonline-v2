<?php

namespace App\Http\Controllers;

use App\Models\Moeda;
use Illuminate\Http\Request;

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
}
