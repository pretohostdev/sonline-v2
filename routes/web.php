<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContaWiseController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\MoedaController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VistoController;
use App\Http\Controllers\RedirecionamentoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeClienteController;
use App\Http\Controllers\ComandosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* COMUNICAÇÃO COM O SERVIDOR VIA COMANDO  */

// Rota da comunicação
Route::get('/comando',  [ComandosController::class, 'servidor'])->name('comando');

Route::resources([
    'login' => LoginController::class,
]);

Route::get('/registar', function () {
    return view('registar');
})->name('registar');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [UserController::class, 'site'])->name('site');

Route::get('/sonline', [UserController::class, 'site'])->name('site');

Route::post('/cadastrar', [UserController::class, 'store'])->name('cadastrar');


/* ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN */

Route::middleware(['admin'])->group(function(){

    // Rota de envio de email
    Route::get('enviarEmail/{id}/{modelo}', [AdminController::class, 'enviarEmail'])->name('enviarEmail');
    
   
    // Clientes 
    Route::get('admin/', [AdminController::class, 'index'])->name('homeAdmin');
    Route::get('listarCliente/', [AdminController::class, 'listarCliente'])->name('admin.user.index');

     // Produtos
     Route::get('produtoCreate/', [AdminController::class, 'cadastrarProduto'])->name('admin.produto.create');
     Route::get('listarProduto/', [AdminController::class, 'listarProdutos'])->name('admin.produto.index');
     Route::post('storeProduto/', [AdminController::class, 'storeProduto'])->name('admin.produto.store');

     Route::get('editarProduto/{id}', [ProdutoController::class, 'edit'])->name('admin.produto.edit');
     Route::put('atualizarProduto/{id}', [ProdutoController::class, 'update'])->name('admin.produto.update');
     Route::delete('eliminarProduto/{id}', [ProdutoController::class, 'destroy'])->name('eliminarProduto');

     // Visto
     Route::get('listarVistos/', [AdminController::class, 'listarVistos'])->name('admin.visto.index');
     Route::get('mostrarVistos/{id}', [AdminController::class, 'mostrarVistos'])->name('admin.visto.show');
     Route::get('verDocumentoVisto/{id}', [AdminController::class, 'verDocumentoVisto'])->name('verDocumentoVisto');

    
    // Moeda
    Route::get('listarMoedas/', [AdminController::class, 'listarMoedas'])->name('admin.moeda.index');
    Route::get('mostrarMoedas/{id}', [AdminController::class, 'mostrarMoedas'])->name('admin.moeda.show');
    Route::get('verDocumentoMoeda/{id}', [AdminController::class, 'verDocumentoMoeda'])->name('verDocumentoMoeda');

    // Conta
    Route::get('listarContas/', [AdminController::class, 'listarContas'])->name('admin.conta.index');
    Route::get('mostrarContas/{id}', [AdminController::class, 'mostrarContas'])->name('admin.conta.show');
    Route::get('verDocumentoConta/{id}', [AdminController::class, 'verDocumentoConta'])->name('verDocumentoConta');

     // Agendamento
     Route::get('listarAgendamentos/', [AdminController::class, 'listarAgendamentos'])->name('admin.agendamento.index');
     Route::get('mostrarAgendamentos/{id}', [AdminController::class, 'mostrarAgendamentos'])->name('admin.agendamento.show');
     Route::get('verDocumentoAgendamento/{id}', [AdminController::class, 'verDocumentoAgendamento'])->name('verDocumentoAgendamento');

    // Redirecionamentos
    Route::get('listarRedirecionamento/', [AdminController::class, 'listarRedirecionamento'])->name('admin.redirecionamento.index');
    Route::get('mostrarRedirecionamentos/{id}', [AdminController::class, 'mostrarRedirecionamentos'])->name('admin.redirecionamento.show');
    Route::get('verDocumentoRedirecionamento/{id}', [AdminController::class, 'verDocumentoRedirecionamento'])->name('verDocumentoRedirecionamento');
    Route::get('verMaisRedirecionamento/{id}', [AdminController::class, 'verMaisRedirecionamento'])->name('verMaisRedirecionamento');
    


    Route::get('EditarCliente/', [AdminController::class, 'EditarCliente'])->name('admin.user.editar');

    Route::get('downloadMoeda{moeda}', [AdminController::class, 'downloadMoeda'])->name('downloadMoeda');
    Route::get('downloadaConta{conta}', [AdminController::class, 'downloadConta'])->name('downloadConta');
});


/*      CLIENTES CLIENTES CLIENTES CLIENTES  CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES  CLIENTES      CLIENTES CLIENTES  */

Route::middleware(['cliente'])->group(function(){

    Route::resources([
        'contaWise' => ContaWiseController::class,
        'documento' => DocumentoController::class,
        'endereco' => EnderecoController::class,
        'moeda' => MoedaController::class,
        'pagamento' => PagamentoController::class,
        'produto' => ProdutoController::class,
        'visto' => VistoController::class,
        'agendamento' => AgendamentoController::class,
        'redirecionamento'=> RedirecionamentoController::class,
    ]);

    Route::resource('user', UserController::class)->except(['store']);
    Route::get('homeCliente', [HomeClienteController::class, 'index'])->name('homeCliente');
    // Route::resource('redirecionamento', RedirecionamentoController::class);

    // ROTA DOS ESTADOS 
    Route::get('/estadoMoeda', [MoedaController::class, 'estadoMoeda'])->name('moeda.estado');
    Route::get('/estadoVisto', [VistoController::class, 'estado'])->name('visto.estado');
    Route::get('/estadoConta', [ContaWiseController::class, 'estado'])->name('conta.estado');
    Route::get('/estadoAgendamento', [AgendamentoController::class, 'estado'])->name('agendamento.estado');
    Route::get('/estadoRedirecionamento', [RedirecionamentoController::class, 'estado'])->name('redirecionamento.estado');

});

Route::get('acessonegado', function(){
    return view('acessoNegado');
})->name('acessoNegado');

Route::post('user', [UserController::class, 'store'])->name('user.store');