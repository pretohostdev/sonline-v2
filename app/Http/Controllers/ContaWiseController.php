<?php

namespace App\Http\Controllers;

use App\Models\ContaWise;
use Illuminate\Http\Request;

use App\Models\User;
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
        return view('contaWise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $comprovativo = $request->file('comprovativo');

        $extensao = $comprovativo->getClientOriginalExtension();

        // dd($extensao);

        $path = $request->file('comprovativo')->storeAs(
            'comprovaticosBancarios', 1 . ".{$extensao}"
        );

        $conta = ContaWise::create([
            'data' => $request->data,
            'comprovativo' => $path,
            'estado' => '0',
            'user_id' => 1,
            'pagamento_id' => 1
        ]);

        return "Suceso";
        // $request->comprovativo->store('contas');
        // try {
        //     ContaWise::create([
        //         'data' => $dados['data'],
        //         'estado' => '0'
        //     ]);
        // } catch (\Exception $e) {
        //     return response()->json($e);
        // }

        // Retornar uma resposta, se necessário
        // return response()->json(['message' => 'Dados salvos com sucesso'], 200);
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
                'nome' => $cliente->name,
                'data' => $conta->data,
                'estado' => $conta->estado,
                'comprovativo' => $conta->comprovativo,
                'listaSolicitacaoConta' =>  $clientesComSolicitacaoConta
            ];
        }
        else{

            $conta = (Object)[
                'nome' => '',
                'data' => '',
                'estado' => '',
                'listaSolicitacaoConta' => []
            ];   
           
        }

        return view('contaWise.show', compact('conta'));
    }

}
