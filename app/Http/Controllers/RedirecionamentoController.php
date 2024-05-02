<?php

namespace App\Http\Controllers;

use App\Models\Redirecionamento;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;



use Carbon\Carbon; // Classe para lidar a data actual em Laravel

use Illuminate\Support\Facades\DB; // Para fazer o controlo da transação do banco de dados
use Illuminate\Support\Facades\Auth; // Para pegar o id do usuário autenticado

class RedirecionamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        
        return $id;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user_id = Auth::id();
        return view('redirecionamento.create', compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Adicionar dados a tabela Produto
        $id = Auth::id();

        $dados = json_decode($request->getContent(), true);

        try {

            $produto = Produto::create([
                'nome' => $dados['nomeProduto'],
                'descricao' => $dados['descricao'],
            ]);

            // Iniciando a transação
            DB::beginTransaction();

            // try{
                
                // $usuarioId = Auth::id();  // Obter o ID do usuário autenticado
                $idProduto = $produto->latest()->value('id');  // Obter o último ID do produto
                $data = Carbon::today()->format('Y-m-d'); 


                try {
                    
                    $redirecionamento = Redirecionamento::create([
                        'data' => $data,
                        'estado' => '0',
                        'valor' => $dados['valor'],
                        'paisOrigem' => $dados['paisOrigem'],
                        'paisDestino' => $dados['paisDestino'],
                        'user_id' => $dados['user_id'],
                        'produto_id' => $idProduto
                    ]);

                    DB::commit();  // Commit da transação se todas as operações forem bem-sucedidas
                    return response()->json(['cadastrado' => 'true'], 200);

                } catch (\Exception $e) {

                    DB::rollback();
                    return response()->json(['cadastrado' => $e]);
                }
                
                
            // }
            // catch (\Exception $e) {
            //     return response()->json(['cadastrado' => $e]);
            // }
           
        } catch (\Exception $error) {
            return response()->json(['cadastrado' => $error]);
        }

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

    public function estado()
    {
        $id = Auth::id();

        
        $redirecionamento = Redirecionamento::where('user_id', $id)->latest()->first();
        
        $cliente = User::find($id);

        $clienteRedirecionamento = User::with('redirecionamentos.produto')->find($id);

        // Verificar se o cliente já efectuou algum redirecionamento de produto
        if($clienteRedirecionamento->redirecionamentos->count() > 0){

            $listaRedirecionamento = $clienteRedirecionamento->redirecionamentos;

            $redirecionamento = (Object)[
                'id' => $redirecionamento->id,
                'data' => $redirecionamento->data,
                'estado' => $redirecionamento->estado,
                'valor' => $redirecionamento->valor,
                'paisOrigem' => $redirecionamento->paisOrigem,
                'paisDestino' => $redirecionamento->paisDestino,
                'listaRedirecionamentos' => $listaRedirecionamento
            ];
            
        }
        else{
            
            $redirecionamento = (Object)[
                'data' => '',
                'estado' => '',
                'valor' => '',
                'paisOrigem' => '',
                'paisDestino' => '',
                'listaRedirecionamentos' => []
            ];
        }

        return view('redirecionamento.show', compact('redirecionamento'));
    }
}
