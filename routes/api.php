<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\ContaWiseController;
use App\Http\Controllers\RedirecionamentoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// APIs para acessar minhas rotas de forma assincronas 

Route::post('/sistema', [SistemaController::class, 'update']);

Route::post('/userAtualizar', [UserController::class, 'update']);

/*END-POINT DO SISTEMA SONLINE para verificar se o email do usuário já foi usado */
Route::get('/existeEmail/{email}', [UserController::class, 'existeEmail']);

Route::delete('/produto/{id}', [ProdutoController::class, 'destroy']);


