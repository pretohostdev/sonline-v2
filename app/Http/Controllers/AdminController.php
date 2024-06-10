<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Sistema;
use App\Models\Moeda;
use App\Models\ContaWise;
use App\Models\Visto;
use App\Models\Produto;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use App\Models\Redirecionamento;
use Illuminate\Support\Facades\Hash; // Adicionar senhas criptografadas
use Illuminate\Support\Facades\Validator; // Classe específica para fazer a validação dos campos

use Illuminate\Support\Carbon; // Essa classe vai ajudar a trabalhar com datas

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rules\File;

use Illuminate\Support\Facades\Response;


use Illuminate\Support\Facades\Mail; // Classe para lidar com o envio de email

use App\Mail\Mensagem;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ano = Carbon::now()->year; // Pega o ano actual
        $mes = Carbon::now()->month; // Pega o mes actual

        // Obtém o usuário atualmente autenticado, que é o Admin

        $admin = Auth::user();
        // Obter todos os clientes que efectuaram a agendamento no ano e mes em curso
       
        $totalClientesAgendados = User::whereHas('agendamentos', function ($query) use ($ano, $mes) {
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

        // Obter todos os clientes que redirecionaram produto

        $totalClientesRedirecionamento = User::whereHas('redirecionamentos', function ($query) use ($ano, $mes) {
            $query->whereYear('data', '=', $ano)
            ->whereMonth('data', '=', $mes);
        })->get();

        $totalRedirecionamento = $totalClientesRedirecionamento->count() > 0 ? $totalClientesRedirecionamento->count(): 0;

        // Obter todos os clientes que solicitarm agendar visto

        $totalClientesVisto = User::whereHas('vistos', function ($query) use ($ano, $mes) {
            $query->whereYear('dataSolicitacao', '=', $ano)
            ->whereMonth('dataSolicitacao', '=', $mes);
        })->get();

        $totalVisto = $totalClientesVisto->count() > 0 ? $totalClientesVisto->count(): 0;

        // Total de clientes inscritos no mes em curso
        $totalClientes = User::all()->count() > 0 ?  User::all()->count() : 0;

         $dados = [
            'nomeAdmin' => $admin->name,
            'totalConta' => $totalConta,
            'totalVisto' => $totalVisto, 
            'totalMoedas' => $totalMoeda,
            'totalClientes' => $totalClientes,
            'totalAgendamento' => $totalAgendados,
            'totalRedirecionamento' => $totalRedirecionamento,
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

    public function listarRedirecionamento(){

        // Lista de todos clientes que fizeram redirecionamento
        $clientes = User::where('tipo', "!=", 'admin')
                ->where(function($query){
                    $query->WhereHas('redirecionamentos');
                })->paginate(10);

        return view('admin.redirecionamento.index', compact('clientes'));
    }

    public function mostrarRedirecionamentos($id){

        $cliente = User::with('redirecionamentos')->find($id);
        $clienteRedirecionamento = User::with('redirecionamentos.produto')->find($cliente->id);
        $redirecionamentos = $clienteRedirecionamento->redirecionamentos()->paginate(10);

        $cliente = (Object)[
            'id' => $cliente->id,
            'nome' => $cliente->name
        ];

        return view('admin.redirecionamento.show', ['redirecionamentos'=> $redirecionamentos, 'cliente'=> $cliente]);
    }
    
    function verDocumentoRedirecionamento($id){
        $redirecionamento = Redirecionamento::find($id);
        return view('admin.redirecionamento.verDocumentoRedirecionamento', compact('redirecionamento'));
    }

    function verMaisRedirecionamento($id){

        $redirecionamento = Redirecionamento::where('user_id', $id)->latest()->first();
        
        $cliente = User::find($id);

        $clienteRedirecionamento = User::with('redirecionamentos.produto')->find($id);
        
        // Verificar se o cliente já efectuou algum redirecionamento de produto
        if($clienteRedirecionamento->redirecionamentos->count() > 0){

            $nome_produto =  $clienteRedirecionamento->redirecionamentos[0]->produto->nome;
            $fotoProduto =  $clienteRedirecionamento->redirecionamentos[0]->fotoProduto;
            $largura =  $clienteRedirecionamento->redirecionamentos[0]->produto->largura;
            $altura =  $clienteRedirecionamento->redirecionamentos[0]->produto->altura;
            $descricao =  $clienteRedirecionamento->redirecionamentos[0]->produto->descricao;
            $redirecionamento = (Object)[
                'id' => $redirecionamento->id,
                'data' => $redirecionamento->data,
                'estado' => $redirecionamento->estado,
                'total' => $redirecionamento->total,
                'produto' => $nome_produto,
                'altura' => $altura,
                'largura' => $largura,
                'descricao' => $descricao,
                'fotoProduto' => $fotoProduto,
                'paisOrigem' => $redirecionamento->paisOrigem,
                'paisDestino' => $redirecionamento->paisDestino,
                'comprovativo' => $redirecionamento->comprovativo,
                'enderecoEntrega' => $redirecionamento->enderecoEntrega,
            ];
        return view('admin.redirecionamento.verMais', ['redirecionamento'=>$redirecionamento, 'cliente'=> $cliente]);
        }
    }

    function listarAgendamentos(){
        // Clientes que solicitram agendamento
        $clientes = User::where('tipo', "!=", 'admin')
        ->where(function($query){
            $query->WhereHas('agendamentos');
        })->paginate(10);

       return view('admin.agendamento.index', compact('clientes'));
    }

    function mostrarAgendamentos($id){

        $cliente = User::with('agendamentos')->find($id);
        $agendamentos = $cliente->agendamentos()->paginate(10);

        $cliente = (Object)[
            'id' => $cliente->id,
            'email' => $cliente->email,
            'nome' => $cliente->name
        ];

        return view('admin.agendamento.show', ['agendamentos'=> $agendamentos, 'cliente'=> $cliente]);
    }

    function verDocumentoAgendamento($id){
        $agendamento = Agendamento::find($id);
        return view('admin.agendamento.verDocumentoAgendamento', compact('agendamento'));
    }

    function listarProdutos(){

        // Listar produtos do sistema
        $produtos = Produto::whereNotNull('imagem')->paginate(10);
        return view('admin.produto.index', compact('produtos'));
    }

    public function cadastrarProduto(){
        $sistema = Sistema::find(1);

        if(!$sistema){
            $cadastro = Sistema::create([
                'precoConta' => '20000',
                'iban' => '0006'
            ]);

            $sistema = Sistema::find(1);
        }
        return view('admin.produto.create', compact('sistema'));
    }

    public function storeProduto(Request $request){

        $validacao = Validator::make($request->all(), [
            'imagem' => 'required|file|mimes:jpeg,png|max:1024',
            ],
            [
                'imagem.required' => 'O campo imagem é obrigatório',
                'imagem.file' => 'O campo tem de ser do tipo arquivo',
                'imagem.mimes' => 'O campo imagem deve ser um apenas do tipo jpg, jpeg e png.',
                'imagem.max' => 'O tamanho máximo do arquivo é de 1M.',
            ]
        );

       

        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $imagem = $request->file('imagem');

        $path = $request->file('imagem')->store(
            'produtos'
        );

        $produto = Produto::create([
            'nome' => $request->nome,
            'link' => $request->link,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'imagem' => $path,
        ]);

        return redirect()->route('admin.produto.index');
    }

    function mostrarProdutos(){
        return "Clicou em mostrar Moedas";
    }

    function listarVistos(){
         $clientes = User::where('tipo', "!=", 'admin')
         ->where(function($query){
             $query->WhereHas('vistos');
         })->paginate(10);

        return view('admin.visto.index', compact('clientes'));
       
    }

    function mostrarVistos($id){

        $cliente = User::with('vistos')->find($id);
        $vistos = $cliente->vistos()->paginate(10);

        $cliente = (Object)[
            'id' => $cliente->id,
            'nome' => $cliente->name
        ];

        return view('admin.visto.show', ['vistos'=> $vistos, 'cliente'=> $cliente]);
    }

    function verDocumentoVisto($id){
        $visto = Visto::find($id);
        return view('admin.visto.verDocumentoVisto', compact('visto'));
    }

    function listarMoedas(){
        $clientes = User::where('tipo', "!=", 'admin')
        ->where(function($query){
            $query->WhereHas('moedas');
        })->paginate(10);

       return view('admin.moeda.index', compact('clientes'));
      
    }

    function mostrarMoedas($id){

        $cliente = User::with('moedas')->find($id);
        $moedas = $cliente->moedas()->paginate(10);

        $cliente = (Object)[
            'id' => $cliente->id,
            'nome' => $cliente->name
        ];

        return view('admin.moeda.show', ['moedas'=> $moedas, 'cliente'=> $cliente]);
    }

    function verDocumentoMoeda($id){
        $moeda = Moeda::find($id);
        return view('admin.moeda.verDocumentoMoeda', compact('moeda'));
    }

    function listarContas(){
        $clientes = User::where('tipo', "!=", 'admin')
        ->where(function($query){
            $query->WhereHas('contaWise');
        })->paginate(10);

       return view('admin.conta.index', compact('clientes'));
    }

    function mostrarContas($id){

        $cliente = User::with('contaWise')->find($id);
        $contas = $cliente->contaWise()->paginate(10);

        $cliente = (Object)[
            'id' => $cliente->id,
            'email' => $cliente->email,
            'nome' => $cliente->name
        ];

        return view('admin.conta.show', ['contas'=> $contas, 'cliente'=> $cliente]);
    }

    function verDocumentoConta($id){
        $conta = ContaWise::find($id);
        return view('admin.conta.verDocumentoConta', compact('conta'));
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

    public function enviarEmail($id, $modelo){

        if($modelo == 'visto'){
            $visto = Visto::find($id);
            $idCliente = $visto->user_id;
        }
        else if($modelo == 'moeda'){
            $moeda = Moeda::find($id);
            $idCliente = $moeda->user_id;
        }
        else if($modelo == 'conta'){
            $conta = ContaWise::find($id);
            $idCliente = $conta->user_id;
        }
        else if($modelo == 'redirecionamento'){
            $redirecionamento = Redirecionamento::find($id);
            $idCliente = $redirecionamento->user_id;
        }
        else if($modelo == 'agendamento'){
            $agendamento = Agendamento::find($id);
            $idCliente = $agendamento->user_id;
        }

        $cliente = User::find($idCliente);

        return view('admin.email', ['cliente'=>$cliente, 'id_servico' => $id, 'modelo' => $modelo]);
    }

    public function verComprovativo($moeda){

        $moeda = Moeda::find($moeda);
        return view('Admin.verComprovativo', compact('moeda'));
    }

    public function downloadMoeda($moeda){

        $moeda = Moeda::find($moeda);

        return view('Admin.moeda.download', compact('moeda'));
    }
    public function downloadConta($conta){

        $conta = Conta::find($conta);
        return view('Admin.conta.downloada', compact('conta'));
    }
    public function downloadVisto($visto){

        $visto = Visto::find($visto);
        return view('Admin.visto.download', compact('visto'));
    }

    
}
