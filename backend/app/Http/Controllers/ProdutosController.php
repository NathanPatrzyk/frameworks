<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();

        return view("produtos", ['lista_produtos' => $produtos]);
    }

    public function show(Request $request, int $id)
    {
        $produtos = DB::table('produtos')->find($id);

        return view('produtos', ['lista_produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos-create');
    }

    public function store(Request $request)
    {
        $produtos = new Produtos();
        $produtos->descricao = $request->descricao;
        $produtos->preco = $request->preco;
        $produtos->save();

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        $produtos = new Produtos();
        $produtos = $produtos->find($id);
        $produtos->delete();

        $mensagem = "O produto " . $produtos->descricao . " foi excluído";

        return view('produtos-deleted', ['mensagem' => $mensagem]);
    }

    public function edit($id)
    {
        $produtos = new Produtos();
        $produtos = $produtos->find($id);

        return view('produtos-update', ['produto' => $produtos]);
    }

    public function update(Request $request, string $id)
    {
        $produtos = new Produtos();
        $produtos = $produtos->find($id);
        $produtos->update($request->except(['_token', '_method']));

        $mensagem = "O produto " . $produtos->descricao . " foi atualizado";

        return view('produtos-updated', ['mensagem' => $mensagem]);
    }
}
