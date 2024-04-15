<?php

use Illuminate\Support\Facades\Route;

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


Route::resources([
    'admin' => AdminController::class,
    'agendamento' => AgendamentoController::class,
    'cliente' => ClienteController::class,
    'contaWise' => ContaController::class,
    'documento' => DocumentoController::class,
    'endereco' => EnderecoController::class,
    'moeda' => MoedaController::class,
    'pagamento' => PagamentoController::class,
    'produto' => ProdutoController::class,
    'redirecionamento' => RedirecionamentoController::class,
    'visto' => VistoController::class
]);

Route::get('/registar', function () {
    return view('registar');
})->name('registar');


Route::get('/login', function () {
    return view('login');
})->name('login');



Route::get('/', function () {
    return view('welcome');
});

Route::get('sonline/', function () {
    return view('sonline');
})->name('sonline');


Route::get('site/', function () {
    return view('site');
})->name('site');

Route::get('teste/', function () {
    return view('teste');
})->name('teste');

