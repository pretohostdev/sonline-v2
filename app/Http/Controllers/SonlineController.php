<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moeda;
use App\Models\Cliente;
use App\Models\Agendamento;

use Illuminate\Support\Carbon; // Essa classe vai ajudar a trabalhar com datas


class SonlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ano = Carbon::now()->year; // Pega o ano actual
        $mes = Carbon::now()->month; // Pega o mes actual

        // Obter todos os clientes que efectuaram a agendamento no ano e mes em curso
       
        $totalClientesAgendados = Cliente::whereHas('agendamento', function ($query) use ($ano, $mes) {
            $query->whereYear('data', '=', $ano)
            ->whereMonth('data', '=', $mes);
        })->get();

        $totalAgendados = $totalClientesAgendados->count() > 0 ? $totalClientesAgendados->count() : 0;

        // Obter todos os clientes que solicitaram a abertura de conta no ano e mes em curso

        $totalClientesConta = Cliente::whereHas('contaWise', function ($query) use ($ano, $mes) {
            $query->whereYear('data', '=', $ano)
            ->whereMonth('data', '=', $mes);
        })->get();

        $totalConta = $totalClientesConta->count()? $totalClientesConta->count(): 0;

        // Obter todos os clientes que solicitaram moedas

        $totalClientesMoeda = Cliente::whereHas('moedas', function ($query) use ($ano, $mes) {
            $query->whereYear('data', '=', $ano)
            ->whereMonth('data', '=', $mes);
        })->get();

        $totalMoeda = $totalClientesMoeda->count() > 0 ? $totalClientesMoeda->count(): 0;


        // Total de clientes inscritos no mes em curso

        $totalClientes = Cliente::all()->count() > 0 ?  Cliente::all()->count() : 0;

         $dados = [
            'totalClientesAgendados' => $totalAgendados,
            'totalConta' => $totalConta,
            'totalMoedas' => $totalMoeda,
            'totalClientes' => $totalClientes
        ];

        return view('sonline', $dados);
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
