@extends('index')

@section('cont')

    <h1>Cadastro de Produto</h1>
    <form action="/cadastro_form/cadastrar" method="post">
        @csrf
        <label for="idproduto" hidden>ID</label>
        <input type="text" name="IDProduto" id="idproduto">
        <label for="nome">Nome</label>
        <input type="text" name="NomeProduto" id="nome" autofocus required placeholder="Digite o nome">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="QuantidadePorUnidade" id="quantidade"placeholder="Digite a quantidade">
        <label for="preco">Preço</label>
        <input type="text" name="PrecoUnitario" id="preco" placeholder="Digite o preço">
        <br>
        <br>
        <input type="submit" value="Cadastrar" id="cadastro">
    </form>
@stop
