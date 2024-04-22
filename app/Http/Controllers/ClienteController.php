<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash; // Adicionar senhas criptografadas
use Illuminate\Support\Facades\Validator; // Classe específica para fazer a validação dos campos

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cliente.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "View de Cadastro de novo Cliente";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados recebidos

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

        $contacto = $request->contacto;
        $genero = $request->genero;

        $dataNascimento = $request->dataNascimento;

        // return $dataNascimento;
        
        $registar = Cliente::create([
            'name'=> $name,
            'email' => $email,
            'password' => Hash::make($senha),
            'contacto' => $contacto,
            'genero' => $genero,
            'dataNascimento' => $dataNascimento
        ]);

        if($registar){
            return "Sucesso";
        }


        return "Erro ao cadastrar cliente";
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return "Mostrar um cliente";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return "View de Editar um cliente";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        return "Editar um cliente no banco de dados";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        return "Eliminar um cliente do Banco de dados";
    }
}
