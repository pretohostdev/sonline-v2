<?php

namespace App\Http\Controllers;

use App\Models\Redirecionamento;
use App\Models\Produto;
use App\Models\Sistema;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

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
        $sistema = Sistema::find(1);
        return view('redirecionamento.create', ['sistema'=>$sistema,'user_id'=> $user_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacao = Validator::make($request->all(), [
            'comprovativo' => 'required|file|mimes:pdf|max:2048',
            'fotoProduto' => 'file|mimes:jpg,jpeg,png|max:2048',
        ],
        [
            'comprovativo.required' => 'O campo comprovativo não pode se ficar vazio',
            'comprovativo.mimes' => 'O campo comprovativo deve ser apenas um arquivo pdf.',
            'comprovativo.max' => 'O tamanho máximo do arquivo pdf é de 2M.',

            'fotoProduto.mimes' => 'O campo foto deve ser apenas no formato jpg, jpeg e png',
            'fotoProduto.max' => 'O tamanho máximo da foto é de 2M.',
        ]
        );

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $comprovativo = $request->file('comprovativo');

        $path = $request->file('comprovativo')->store(
            'redirecionamentos'
        );

        if($request->fotoProduto){

            $fotoProduto = $request->file('fotoProduto');

            $path_foto = $request->file('comprovativo')->store('redirecionamentos');
        }else{
             $path_foto = "";
        }
        

        // Adicionar dados a tabela Produto
        $id = Auth::id();

        $produto = Produto::create([
            'nome' => $request->nome,
            'largura' => $request->largura,
            'altura' => $request->altura,
            'descricao' => $request->descricaoProduto,
        ]);
            
        
        try {
            // Iniciando a transação
            DB::beginTransaction();

            $idProduto = $produto->latest()->value('id');  // Obter o último ID do produto
            $data = Carbon::today()->format('Y-m-d'); 

            $total = str_replace("€", "", $request->total_a_pagar);

            
            $redirecionamento = Redirecionamento::create([
                'data' => $data,
                'estado' => '0',
                'total' => $total,
                'fotoProduto' => $path_foto,
                'comprovativo' => $path,
                'paisOrigem' => $request->paisorigem,
                'paisDestino' => $request->paisdestino,
                'user_id' => $request->userId,
                'produto_id' => $idProduto
            ]);

            DB::commit();  // Commit da transação se todas as operações forem bem-sucedidas
            return redirect()->route('redirecionamento.estado');
        } catch (\Throwable $th) {
            DB::rollback();
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
                'total' => $redirecionamento->total,
                'paisOrigem' => $redirecionamento->paisOrigem,
                'paisDestino' => $redirecionamento->paisDestino,
                'comprovativo' => $redirecionamento->comprovativo,
                'listaRedirecionamentos' => $listaRedirecionamento
            ];
            
        }
        else{
            
            $redirecionamento = (Object)[
                'data' => '',
                'estado' => '',
                'total' => '',
                'paisOrigem' => '',
                'paisDestino' => '',
                'comprovativo' => '',
                'listaRedirecionamentos' => []
            ];
        }

        return view('redirecionamento.show', compact('redirecionamento'));
    }
}
