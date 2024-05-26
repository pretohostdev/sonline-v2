<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sistema;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; // Para pegar o id do usuário autenticado


class AgendamentoController extends Controller
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
        return view('agendamento.create', compact('sistema'));
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
            'agendamentos'
        );

        $agendamento = Agendamento::create([
            'tipo' => $request->tipo,
            'data' => $request->data,
            'estado' => '0',
            'documento' => $path,
            'observacao' => $request->observacao,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('agendamento.estado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agendamento $agendamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agendamento $agendamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agendamento $agendamento)
    {
        //
    }

    public function estado()
    {
        $id = Auth::id();

        $agendamento = Agendamento::where('user_id', $id)->latest()->first();
        
        $cliente = User::find($id);

        // Verificar se o cliente já efectuou algum agendamento de serviço
        if($cliente->agendamentos->count() > 0){

            $clientesAgendamentos = $cliente->agendamentos;
            $agendamento = (Object)[
                'id' => $cliente->id,
                'nome' => $cliente->name,
                'data' => $agendamento->data,
                'tipo' => $agendamento->tipo,
                'estado' => $agendamento->estado,
                'documento' => $agendamento->documento,
                'observacao' => $agendamento->observacao,
                'listaAgendamentos' =>  $clientesAgendamentos
            ];
        }
        else{

            $agendamento = (Object)[
                'id' => '',
                'nome' => '',
                'data' => '',
                'tipo' => '',
                'estado' => '',
                'documento' => '',
                'observacao' => '',
                'listaAgendamentos' => []
            ];   
           
        }

        return view('agendamento.show', compact('agendamento'));
    }

}
