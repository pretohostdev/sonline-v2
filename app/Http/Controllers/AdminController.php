<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Adicionar senhas criptografadas
use Illuminate\Support\Facades\Validator; // Classe específica para fazer a validação dos campos

use Illuminate\Support\Carbon; // Essa classe vai ajudar a trabalhar com datas

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ano = Carbon::now()->year; // Pega o ano actual
        $mes = Carbon::now()->month; // Pega o mes actual

        // Obter todos os clientes que efectuaram a agendamento no ano e mes em curso
       
        $totalClientesAgendados = User::whereHas('agendamento', function ($query) use ($ano, $mes) {
            $query->whereYear('data', '=', $ano)
            ->whereMonth('data', '=', $mes);
        })->get();

        $totalAgendados = $totalClientesAgendados->count() > 0 ? $totalClientesAgendados->count() : 0;

        // Obter todos os clientes que solicitaram a abertura de conta no ano e mes em curso

        $totalClientesConta = User::whereHas('contaWise', function ($query) use ($ano, $mes) {
            $query->whereYear('data', '=', $ano)
            ->whereMonth('data', '=', $mes);
        })->get();

        $totalConta = $totalClientesConta->count()? $totalClientesConta->count(): 0;

        // Obter todos os clientes que solicitaram moedas

        $totalClientesMoeda = User::whereHas('moedas', function ($query) use ($ano, $mes) {
            $query->whereYear('data', '=', $ano)
            ->whereMonth('data', '=', $mes);
        })->get();

        $totalMoeda = $totalClientesMoeda->count() > 0 ? $totalClientesMoeda->count(): 0;


        // Total de clientes inscritos no mes em curso

        $totalClientes = User::all()->count() > 0 ?  User::all()->count() : 0;

         $dados = [
            'totalClientesAgendados' => $totalAgendados,
            'totalConta' => $totalConta,
            'totalMoedas' => $totalMoeda,
            'totalClientes' => $totalClientes
        ];

        return view('admin.index', $dados);
    }


    public function listarCliente(){

        // Lista de todos clientes do sistema
        $clientes = User::where('tipo', "!=", 'admin')
                ->where(function($query){
                    $query->WhereHas('vistos')
                    ->orWhereHas('moedas')
                    ->orWhereHas('contaWise')
                    ->orWhereHas('redirecionamentos');
                })->paginate(10);

        return view('admin.user.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados recebidos

        return "Admin";
        $validacao = Validator::make($request->all(), [
            'email' => 'required|string|email|unique:admins|max:255',
            'password' => 'required|string|min:5',
        ],
        [
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'Este endereço de e-mail já está sendo utilizado.',
            'password.min' => 'O campo senha deve ter no mínimo 8 caracteres.',
        ]
    );

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }


        $primeiroNome = $request->primeiroNome;
        $ultimoNome = $request->ultimoNome;

        $name = $primeiroNome . " " . $ultimoNome;

        $email = $request->email;
        $senha = $request->password;
        
        $registar = Admin::create([
            'name'=> $name,
            'email' => $email,
            'password' => Hash::make($senha)
        ]);

        if($registar){
            return "Sucesso";
        }


        return "Erro ao cadastrar";
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
