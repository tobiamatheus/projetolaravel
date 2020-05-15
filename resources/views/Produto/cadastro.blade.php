@extends('index')

@section('Laravel', '- Cadastro de Produtos')

@section('cont')

    <h1>Cadastro de Produto</h1>
    <form action="/cadastro_form/cadastrar" method="post">
        @csrf
        <label for="idproduto">ID</label>
        <input type="text" name="IDProduto" id="idproduto">
        <label for="nome">Nome *</label>
        <input type="text" name="NomeProduto" id="nome" placeholder="Digite o nome" autofocus required>
        <label for="fornecedor">Fornecedor</label>
        <input type="text" name="IDFornecedor" id="fornecedor" placeholder="Digite o código do fornecedor">
        <label for="fornecedor">Categoria</label>
        <input type="text" name="IDCategoria" id="categoria" placeholder="Digite o código da categoria">
        <label for="quantidade">Quantidade *</label>
        <input type="text" name="QuantidadePorUnidade" id="quantidade" placeholder="Digite a quantidade" required>
        <label for="preco">Preço *</label>
        <input type="text" name="PrecoUnitario" id="preco" placeholder="Digite o preço" required>
        <br>
        <br>
        <input type="submit" value="Cadastrar" id="cadastro">
    </form>

@stop
