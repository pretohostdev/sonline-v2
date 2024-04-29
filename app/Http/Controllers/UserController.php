<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash; // Adicionar senhas criptografadas
use Illuminate\Support\Facades\Validator; // Classe específica para fazer a validação dos campos

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
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
        
        $registar = User::create([
            'name'=> $name,
            'email' => $email,
            'tipo' => 'cliente',
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
    public function show(User $cliente)
    {
        return "Mostrar um cliente";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $cliente)
    {
        return view('user.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $cliente)
    {
        // return "Editar um cliente no banco de dados";
        
        return response()->json(['cadastrado' => 'true'], 200);
    }

    public function atualizar(Request $request, $id)
    {
        // return "Editar um cliente no banco de dados";
        try {
            return response()->json(['cadastrado' => 'true'], 200);
        } catch (\Throwable $error) {
            return response()->json(['cadastrado' => $error], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $cliente)
    {
        return "Eliminar um cliente do Banco de dados";
    }
}
