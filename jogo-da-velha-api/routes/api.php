<?php

use App\Http\Controllers\JogadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes    
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/nome', [JogadorController::class, 'adicionarJogador1']);

Route::post('/nome/{id}', [JogadorController::class, 'adicionarJogador2']);

Route::get('/jogo/{id}', [JogadorController::class, 'buscarPositions']);

Route::post('/jogo/{id}', [JogadorController::class, 'adicionarPositions']);