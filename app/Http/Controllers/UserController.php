<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUser;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;
use App\Models\Endereco;

use Illuminate\Support\Facades\Hash; // Adicionar senhas criptografadas
use Illuminate\Support\Facades\Validator; // Classe específica para fazer a validação dos campos

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function site(){
        $produtos = Produto::all();
        return view('site', compact('produtos'));
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

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:6',
        ],
        [
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'password.min' => 'A senha deve ter no mínimo 6 caracteres',
            'email.unique' => 'Este endereço de e-mail já está sendo utilizado.',
            'password.min' => 'O campo senha deve ter no mínimo 6 caracteres.',
        ]);
 
        if ($validator->fails()) {
            return redirect('registar')
                        ->withErrors($validator)
                        ->withInput();
        }

        $primeiroNome = $request->primeiroNome;
        $ultimoNome = $request->ultimoNome;

        $name = $primeiroNome . " " . $ultimoNome;

        $email = $request->email;
        $senha = $request->password;

        $contacto = $request->contacto;
        $genero = $request->genero;

        $dataNascimento = $request->dataNascimento;

        try {
            $registar = User::create([
                'name'=> $name,
                'email' => $email,
                'tipo' => 'cliente',
                'password' => Hash::make($senha),
                'contacto' => $contacto,
                'genero' => $genero,
                'dataNascimento' => $dataNascimento
            ]);

            return view('login');
        } catch (\Throwable $erro) {
            return $erro;
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
        $dataNascimento = $dados['anoNascimento'] . "-". $dados['mesNascimento'] . "-" . $dados['diaNascimento'];
        
        $cliente->name = $dados['nome'];
        $cliente->contacto = $dados['contacto'];
        $cliente->dataNascimento = $dataNascimento;

        $cliente->save();

        if (is_null($cliente->endereco)) {
            $endereco = Endereco::create([
                'pais'=> $dados['pais'],
                'cidade' => $dados['cidade'],
                'bairro' => $dados['bairro'],
                'user_id' => $cliente->id
            ]);
        } 
        else{ 
            $id = Endereco::where('user_id', $cliente->id)->first()->id;
            $endereco = Endereco::find($id);
            
            $endereco->pais = $dados['pais'];
            $endereco->cidade = $dados['cidade'];
            $endereco->bairro = $dados['bairro'];
            $endereco->save();
        }
        
        return response()->json(['atualizado' => 'true'], 200);

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
