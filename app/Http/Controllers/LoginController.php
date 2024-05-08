<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Sistema;


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

            $usuario = Auth::user();

            if ($usuario->tipo == 'cliente') {
                if(!Sistema::find(1)){
                    Sistema::create(['precoContaWise'=> 20000, 'iban' => '0001']);
                }
                return redirect()->intended('homeCliente');
            }
            else{

                if(!Sistema::find(1)){
                    Sistema::create(['precoContaWise'=> 20000, 'iban' => '0001']);
                }
                return redirect()->intended('admin');
            }

        }

        return redirect()->back()->withErrors(['mensagem' => 'Verifique o email e a senha']);
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
