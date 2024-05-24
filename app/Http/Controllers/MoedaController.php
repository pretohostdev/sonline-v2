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
            'documento' => 'required|file|mimes:pdf|max:1024',
        ],
        [
            'documento.required' => 'O campo documento não pode estar vazio',
            'documento.mimes' => 'O campo documento deve ser apenas um arquivo pdf.',
            'documento.max' => 'O tamanho máximo do arquivo pdf é de 1M.',
        ]
        );

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $documento = $request->file('documento');

        $path = $request->file('documento')->store(
            'moedas'
        );

         // Remova "kz" usando str_replace()
        $valor = str_replace("kz", "", $request->valorPagar); 

        $dataAtual = Carbon::now();
        $moeda = Moeda::create([
            'nome' => $request->nome,
            'data' => $dataAtual->toDateString(),
            'valorPagar' => $valor,
            // 'documento' => $request->documento,
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
                'data' => $moeda->data,
                'nome' => $moeda->nome,
                'estado' => $moeda->estado,
                'montante' => $moeda->montante,
                'documento' => $moeda->documento,
                'valorPagar' => $moeda->valorPagar,
                'listaSolicitacoaMoedas' =>  $clientesComSolicitacoaMoeda
            ];
        }
        else{

            $moeda = (Object)[
                'id' => '',
                'data' => '',
                'nome' => '',
                'montate' => '',
                'documento' => '',
                'valorPagar' => '',
                'listaSolicitacoaMoedas' => []
            ];   
           
        }

        return view('moeda.show', compact('moeda'));
    }
}
