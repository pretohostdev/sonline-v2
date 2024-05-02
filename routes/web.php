<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\SonlineController;
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


// Route::resources([
//     'login' => LoginController::class,
//     'agendamento' => AgendamentoController::class,
//     'contaWise' => ContaWiseController::class,
//     'documento' => DocumentoController::class,
//     'endereco' => EnderecoController::class,
//     'moeda' => MoedaController::class,
//     'pagamento' => PagamentoController::class,
//     'produto' => ProdutoController::class,
//     'redirecionamento' => RedirecionamentoController::class,
//     'visto' => VistoController::class
// ]);

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



Route::get('/', function () {
    return view('welcome');
});

// Route::get('conta/', [HomeClienteController::class, 'index']);


Route::get('site/', function () {
    return view('site');
})->name('site');

Route::get('teste/', function () {
    return view('teste');
})->name('teste');





Route::middleware(['admin'])->group(function(){
    Route::get('admin', function(){
        dd('Vc é um admin');
    });

    Route::get('homeAdmin/', [AdminController::class, 'index'])->name('homeAdmin');
    Route::get('listarCliente/', [AdminController::class, 'listarCliente'])->name('admin.user.index');
    Route::get('EditarCliente/', [AdminController::class, 'EditarCliente'])->name('admin.user.editar');
});

Route::middleware(['cliente'])->group(function(){

    Route::resources([
        'contaWise' => ContaWiseController::class,
        'documento' => DocumentoController::class,
        'endereco' => EnderecoController::class,
        'moeda' => MoedaController::class,
        'pagamento' => PagamentoController::class,
        'produto' => ProdutoController::class,
        'visto' => VistoController::class
    ]);

    Route::resource('user', UserController::class)->except(['store']);
    Route::get('homeCliente', [HomeClienteController::class, 'index'])->name('homeCliente');
    Route::resource('redirecionamento', RedirecionamentoController::class);


    // ROTA DOS ESTADOS 
    Route::get('/estadoMoeda', [MoedaController::class, 'estado'])->name('moeda.estado');
    Route::get('/estadoVisto', [VistoController::class, 'estado'])->name('visto.estado');
    Route::get('/estadoConta', [ContaWiseController::class, 'estado'])->name('conta.estado');
    Route::get('/estadoRedirecionamento', [RedirecionamentoController::class, 'estado'])->name('redirecionamento.estado');

});

Route::get('acessonegado', function(){
    return view('acessoNegado');
})->name('acessoNegado');

Route::post('user', [UserController::class, 'store'])->name('user.store');