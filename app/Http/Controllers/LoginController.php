<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
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
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credenciais)) {

            $request->session()->regenerate();

            // Verificar o tipo de usuário
            $usuario = Auth::user();

            if ($usuario->tipo == 'cliente') {
                return redirect()->intended('homeCliente');
            }
            else{
                return redirect()->intended('homeAdmin');
            }

        }

        dd('Falha ao Logar');
        return "Erro ao tentar cadastrar";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return "Clicou em sair";
    }

    public function logout()
    {
        // Sair
        Auth::logout();
        return redirect()->route('login');
    }


}
