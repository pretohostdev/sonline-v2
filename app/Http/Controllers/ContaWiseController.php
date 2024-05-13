<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sistema;
use App\Models\ContaWise;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; // Para pegar o id do usuário autenticado



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
        $sistema = Sistema::find(1);
        return view('contaWise.create', compact('sistema'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validacao = Validator::make($request->all(), [
                'comprovativo' => 'required|file|mimes:pdf|max:2048',
            ],
            [
                'comprovativo.required' => 'O campo comprovativo não pode se ficar vazio',
                'comprovativo.mimes' => 'O campo comprovativo deve ser um apenas um arquivo pdf.',
                'comprovativo.max' => 'O tamanho máximo do arquivo pdf é de 2M.',
            ]
        );

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $comprovativo = $request->file('comprovativo');

        $path = $request->file('comprovativo')->store(
            'contas'
        );

        $conta = ContaWise::create([
            'tipo' => $request->tipo,
            'data' => $request->data,
            'comprovativo' => $path,
            'estado' => '0',
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('conta.estado');
        
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

    public function estado()
    {

        // return "Clicou no estado de solicitação da conta";
        $id = Auth::id();

        $conta = ContaWise::where('user_id', $id)->latest()->first();

        $cliente = User::find($id);

        // Verificar se o cliente já efectuou alguma solicitação de abertura de conta
        if($cliente->contaWise->count() > 0){

            $clientesComSolicitacaoConta = $cliente->contaWise;

            $conta = (Object)[
                'id' => $cliente->id,
                'tipo' => $conta->tipo,
                'nome' => $cliente->name,
                'data' => $conta->data,
                'estado' => $conta->estado,
                'comprovativo' => $conta->comprovativo,
                'listaSolicitacaoConta' =>  $clientesComSolicitacaoConta
            ];
        }
        else{

            $conta = (Object)[
                'id' => '',
                'tipo',
                'nome' => '',
                'data' => '',
                'estado' => '',
                'comprovativo' => '',
                'listaSolicitacaoConta' => []
            ];   
           
        }

        return view('contaWise.show', compact('conta'));
    }

}
