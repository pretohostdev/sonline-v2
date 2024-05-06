<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Moeda;
use App\Models\Sistema;
use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Validator;

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
            'documento' => 'required|file|mimes:pdf|max:2048',
        ],
        [
            'documento.required' => 'O campo documento não pode ficar vazio',
            'documento.mimes' => 'O campo documento deve ser um apenas um arquivo pdf.',
            'documento.max' => 'O tamanho máximo do arquivo pdf é de 2M.',
        ]
        );

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $documento = $request->file('documento');

        $path = $request->file('documento')->store(
            'moedas'
        );

        $dataAtual = Carbon::now();

        $moeda = Moeda::create([
            'nome' => $request->nome,
            'data' => $dataAtual->toDateString(),
            'documento' => $request->documento,
            'montante' => $request->montante,
            'estado' => '0',
            'documento' => $path,
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

    }


    public function estadoMoeda()
    {
        $id = Auth::id();

        $moeda = Moeda::where('user_id', $id)->latest()->first();
        
        $cliente = User::find($id);

        // Verificar se o cliente já efectuou algum redirecionamento de produto
        if($cliente->moedas->count() > 0){

            $clientesComSolicitacoaMoeda = $cliente->moedas;
            $moeda = (Object)[
                'id' => $moeda->id,
                'nome' => $moeda->nome,
                'documento' => $moeda->documento,
                'montante' => $moeda->montante,
                'estado' => $moeda->estado,
                'data' => $moeda->data,
                'listaSolicitacoaMoedas' =>  $clientesComSolicitacoaMoeda
            ];
        }
        else{

            $moeda = (Object)[
                'id' => '',
                'documento' => '',
                'nome' => '',
                'montate' => '',
                'data' => '',
                'listaSolicitacoaMoedas' => []
            ];   
           
        }

        return view('moeda.show', compact('moeda'));
    }
}
