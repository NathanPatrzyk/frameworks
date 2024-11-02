<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/produtos', [ProdutosController::class, 'index'])->name('home');

//Route::get('/produtos/{id}', [ProdutosController::class, 'show']);

Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');

Route::post('/produtos', [ProdutosController::class, 'store']);

Route::get('/produtos/{id}/delete', [ProdutosController::class, 'destroy']);

Route::get('/produtos/{id}/update', [ProdutosController::class, 'edit']);

Route::put('/produtos/{id}/update', [ProdutosController::class, 'update']);