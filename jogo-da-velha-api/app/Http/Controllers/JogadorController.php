<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    function adicionarJogador1(Request $request)
    {
        $jogador = new Jogador();
        $jogador->nome_jogador_1 = $request->nome;
        $jogador->nome_jogador_2 = "";
        $jogador->positions = "_________";
        $jogador->save();

        return response()->json([
            'num_sala' => $jogador->id,
        ], 201);
    }
    function adicionarJogador2()
    {

    }
    function buscarPositions()
    {

    }
    function adicionarPositions()
    {

    }
}
