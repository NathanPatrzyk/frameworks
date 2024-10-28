@extends('template')

@section('title', "Produtos")

@section('content')
<h2>Produtos</h2>
<form method="POST" action="/produtos">
  <div class="mb-4">
    <label for="descricao" class="form-label">Descrição: </label>
    <input name="descricao" type="text" class="form-control">
  </div>

  <div class="mb-4">
    <label for="preco" class="form-label">Preço: </label>
    <input name="preco" type="text" class="form-control">
  </div>

  <div class="mb-4">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
@endsection