<?php

namespace App\Http\Controllers;

use App\Models\Visto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validacao = Validator::make($request->all(), [
            'documento' => 'required|file|mimes:pdf|max:2048',
            'data' => 'required'
            ],
            [
                'documento.required' => 'O campo documento não pode se ficar vazio',
                'documento.mimes' => 'O campo documento deve ser um apenas um arquivo pdf.',
                'documento.max' => 'O tamanho máximo do arquivo pdf é de 2M.',
                'data.required' => 'A data de previsão deve ser especificada',
            ]
        );

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $documento = $request->file('documento');

        $path = $request->file('documento')->store(
            'vistos'
        );

        if($request->descricao){
            $descricao = $request->descricao;
        }
        else{
            $decricao = "";
        }

        $visto = Visto::create([
            'tipo' => $request->tipoVisto,
            'estado' => '0',
            'descricao' => $descricao,
            'paisDesejado' => $request->pais,
            'dataPrevista' => $request->data,
            'dataSolicitacao' => $request->data,
            'documento' => $path,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('visto.estado');
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

        $visto = Visto::where('user_id', $id)->latest()->first();
        $cliente = User::find($id);

        // Verificar se o cliente já efectuou alguma solicitação de visto
        if($cliente->vistos->count() > 0){

            $clientesComSolicitaVisto = $cliente->vistos;

            $visto = (Object)[
                'id' => $visto->id,
                'estado' => $visto->estado,
                'tipo' => $visto->tipo,
                'documento' => $visto->documento,
                'dataSolicitacao' => $visto->dataSolicitacao,
                'dataPrevista' => $visto->dataPrevista,
                'paisDesejado' => $visto->paisDesejado,
                'listaSolicitacaoVistos' =>  $clientesComSolicitaVisto
            ];
        }
        else{
            
            $visto = (Object)[
                'id' => '',
                'estado' => '',
                'tipo' => '',
                'documento' => '',
                'dataSolicitacao' => '',
                'dataPrevista' => '',
                'paisDesejado' => '',
                'listaSolicitacaoVistos' =>  []
            ];   

        }

        return view('visto.show', compact('visto'));
    }

}
