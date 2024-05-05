<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Moeda;
use App\Models\Sistema;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; // Para pegar o id do usuário autenticado


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
        $sistema = Sistema::find(1);
        return view('moeda.create', compact('sistema'));
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
            'moedas'
        );

        $moeda = Moeda::create([
            'nome' => $request->nome,
            'data' => $request->data,
            'montante' => $request->montante,
            'estado' => '0',
            'comprovativo' => $path,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('moeda.estado');
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

    public function estado()
    {
        $id = Auth::id();

        $conta = Moeda::where('user_id', $id)->latest()->first();
        
        $cliente = User::find($id);

        // Verificar se o cliente já efectuou algum redirecionamento de produto
        if($cliente->moedas->count() > 0){

            $clientesComSolicitacoaMoeda = $cliente->moedas;
            $moeda = (Object)[
                'nome' => $moeda->nome,
                'montante' => $moeda->montante,
                'estado' => $moeda->estado,
                'data' => $moeda->data,
                'listaSolicitacoaMoedas' =>  $clientesComSolicitacoaMoeda
            ];
        }
        else{

            $moeda = (Object)[
                'nome' => '',
                'montate' => '',
                'data' => '',
                'listaSolicitacoaMoedas' => []
            ];   
           
        }

        return view('moeda.show', compact('moeda'));
    }
}
