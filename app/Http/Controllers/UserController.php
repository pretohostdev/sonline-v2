<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Endereco;

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

        // $validacao = Validator::make($request->all(), [
        //     'email' => 'required|string|email|unique:admins|max:255',
        //     'password' => 'required|string|min:5',
        //     ],
        //     [
        //         'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
        //         'email.unique' => 'Este endereço de e-mail já está sendo utilizado.',
        //         'password.min' => 'O campo senha deve ter no mínimo 8 caracteres.',
        //     ]
        // );

        // if ($validacao->fails()) {
        //     return redirect()->back()->withErrors($validacao)->withInput();
        // }


        // $primeiroNome = $request->primeiroNome;
        // $ultimoNome = $request->ultimoNome;

        // $name = $primeiroNome . " " . $ultimoNome;

        // $email = $request->email;
        // $senha = $request->password;

        // $contacto = $request->contacto;
        // $genero = $request->genero;

        // $dataNascimento = $request->dataNascimento;

        // return $dataNascimento;
        $dados = json_decode($request->getContent(), true);
        
        try {
            $registar = User::create([
                'name'=> $dados['nome'],
                'email' => $dados['email'],
                'tipo' => 'cliente',
                'password' => Hash::make($dados['senha']),
                'contacto' => $dados['contacto'],
                'genero' => $dados['genero'],
                'dataNascimento' => $dados['dataNascimento']
            ]);

            return response()->json(['cadastrado' => 'true'], 200);
        } catch (\Throwable $erro) {
            return response()->json(['cadastrado' => $erro], 200);
        }
       

        // return "Erro ao cadastrar cliente";

        

        
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
    public function update(Request $request)
    {
        $dados = json_decode($request->getContent(), true);
        
        $cliente = User::find($dados['id']);
        
        // Ogranizar a data de nascimento
        $dataNascimento = $dados['anoNascimento'] . "-". $dados['mesNascimento'] . "-" . $dados['diaNascimento'];
        
        // return $dataNascimento;
        
        $cliente->name = $dados['nome'];
        // $cliente->genero = $dados['genero'];
        $cliente->contacto = $dados['contacto'];
        $cliente->dataNascimento = $dataNascimento;
        
        
        
        // Se o id não estiver definido, significa que a tabela Endereço ainda não possui dados
        
        // return response()->json(['atualizado' => $reuest->pais], 200);
        
        // return response()->json(['atualizado' => $cliente->endereco->id], 200);
        // if (is_null($cliente->endereco)) {
        //     $endereco = Endereco::create([
        //         'pais'=> $dados['pais'],
        //         'cidade' => $dados['cidade'],
        //         'bairro' => $dados['bairro'],
        //         'user_id' =>$id
        //     ]);
        // } 
        // else{ // Caso o endereço já esteja definido
            
            $cliente->endereco->pais = $dados['pais'];
            $cliente->endereco->cidade = $dados['cidade'];
            $cliente->endereco->bairro = $dados['bairro'];
            $cliente->endereco->save();
        // }
        
        return response()->json(['atualizado' => 'true'], 200);
        $cliente->save();

        // return "Dados atualizado com successo!";
        // return "Clicou em atualizar dados " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $cliente)
    {
        return "Eliminar um cliente do Banco de dados";
    }

    public function existeEmail($email){

        $encontrado = User::where('email', $email)->exists();

        if ($encontrado) {
            return response()->json(['existe'=>'true']);
        } else {
            return response()->json(['existe'=>'false']);
        }
    }
}
