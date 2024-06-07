<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visto;
use App\Models\Moeda;
use App\Models\ContaWise;
use App\Models\Agendamento;
use App\Models\Redirecionamento;

class EstadoController extends Controller
{
    //
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
    public function show(Endereco $endereco)
    {
        //
    }

    public function getEstado(Request $request)
    {
        $servico = json_decode($request->getContent(), true);

            $id = $servico['id'];
            $modelo = $servico['modelo'];
 
            if($modelo == 'visto'){
                $estadoAtual = Visto::find($id)->estado;
            }
            else if($modelo == 'moeda'){
                $estadoAtual = Moeda::find($id)->estado;
            }
            else if($modelo == 'conta'){
                $estadoAtual = ContaWise::find($id)->estado;
            }
            else if($modelo == 'redirecionamento'){
                $estadoAtual = Redirecionamento::find($id)->estado;
            }
            else if($modelo == 'agendamento'){
                $estadoAtual = Agendamento::find($id)->estado;
            }
            return response()->json($estadoAtual);
    }

    public function updateEstado(Request $request)
    {
        $servico = json_decode($request->getContent(), true);

            $id = $servico['id'];
            $modelo = $servico['modelo'];
            $valorEstado = $servico['valorEstado'];
 
            if($modelo == 'visto'){
                $visto = Visto::find($id);
                $visto->estado = $valorEstado;
                $visto->save();
                return response()->json(true);
            }
            else if($modelo == 'moeda'){
                $moeda = Moeda::find($id);
                $moeda->estado = $valorEstado;
                $moeda->save();
                return response()->json(true);
            }
            else if($modelo == 'conta'){
                $conta = ContaWise::find($id);
                $conta->estado = $valorEstado;
                $conta->save();
                return response()->json(true);
            }
            else if($modelo == 'redirecionamento'){
                $redirecionamento = Redirecionamento::find($id);
                $redirecionamento->estado = $valorEstado;
                $redirecionamento->save();
                return response()->json(true);
            }
            else if($modelo == 'agendamento'){
                $agendamento = Agendamento::find($id);
                $agendamento->estado = $valorEstado;
                $agendamento->save();
                return response()->json(true);
            }
            else{
                 return response()->json(false);
            }
           
    }

    

}
