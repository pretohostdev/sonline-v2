<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Adicionar senhas criptografadas
use Illuminate\Support\Facades\Validator; // Classe específica para fazer a validação dos campos

class AdminController extends Controller
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
