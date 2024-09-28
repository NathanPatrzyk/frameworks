<?php

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

Route::get('produtos', function () {
    $data = [
        'produto' => [
            'id' => 1,
            'nome' => 'Produto Teste',
            'preco' => 100,
            'descricao' => 'Descricao do Produto Teste'
        ]
    ];

    return response()->json($data, 200);
});