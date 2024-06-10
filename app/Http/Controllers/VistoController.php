<?php

namespace App\Http\Controllers;

use App\Models\Visto;
use App\Models\User;
use App\Models\Sistema;
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
        $sistema = Sistema::find(1);
        return view('visto.create', compact('sistema'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacao = Validator::make($request->all(), [
            'documento' => 'required|file|mimes:pdf|max:1024',
            'data' => 'required', 
            'comprovativo' => 'required|file|mimes:pdf|max:1024',
            ],
            [
                'documento.required' => 'O campo B.I/Passport não pode se ficar vazio',
                'documento.mimes' => 'O campo B.I/Passport deve ser um apenas um arquivo pdf.',
                'documento.max' => 'O tamanho máximo do arquivo pdf é de 1M.',
                'data.required' => 'A data de previsão deve ser especificada',

                'comprovativo.required' => 'O campo comprovativo não pode se ficar vazio',
                'comprovativo.mimes' => 'O campo comprovativo deve ser um apenas um arquivo pdf.',
                'comprovativo.max' => 'O tamanho máximo do arquivo pdf é de 1M.',
            ]
        );

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $check = $this->checkRequest();
        if($check){
            return redirect()->back()->withErrors(['mensagem' => 'Já tens uma solicitação pendente!']);
        }

        $documento = $request->file('documento');
        $comprovativo = $request->file('comprovativo');

        $path = $request->file('documento')->store(
            'vistos'
        );

        $pathComprovativo = $request->file('comprovativo')->store(
            'vistos/comprovativos'
        );

        if($request->descricao){
            $descricao = $request->descricao;
        }
        else{
            $descricao = "";
        }

        $visto = Visto::create([
            'tipo' => $request->tipoVisto,
            'estado' => '0',
            'descricao' => $descricao,
            'paisDesejado' => $request->pais,
            'dataPrevista' => $request->data,
            'dataSolicitacao' => $request->data,
            'documento' => $path,
            'comprovativo' => $pathComprovativo,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('visto.estado');
    }

    public function checkRequest(){
        $id = Auth::id();
        $visto = Visto::where('user_id', $id)->latest()->first();
        if($visto){
            $estado = $visto->estado;
            if($estado == "0"){
                return true;
            }
            return false;
        }
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
                'comprovativo' => $visto->comprovativo,
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
                'comprovativo' => '',
                'dataSolicitacao' => '',
                'dataPrevista' => '',
                'paisDesejado' => '',
                'listaSolicitacaoVistos' =>  []
            ];   

        }

        return view('visto.show', compact('visto'));
    }

}
