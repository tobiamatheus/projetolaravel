@extends('index')

@section('cont')

    <h1>Detalhes do Produto</h1>

    <a href="/produtos">
        <img src="{{ asset('images/r.png') }}" id="back"/>
    </a>

        <table border="1" id="t2">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Fornecedor</th>
                <th>Categoria</th>
                <th>Unidades Estoque</th>
                <th>Unidades Ordem</th>
                <th>Nivel Reposição</th>
                <th colspan="2">Ação</th>
            </tr>

            @foreach ($produtos as $p)

        <tr>
            <td>{{$p->IDProduto}}</td>
            <td>{{$p->NomeProduto}}</td>
            <td>{{$p->QuantidadePorUnidade}}</td>
            <td>{{$p->PrecoUnitario}}</td>
            <td>{{$p->IDFornecedor}}</td>
            <td>{{$p->IDCategoria}}</td>
            <td>{{$p->UnidadesEmEstoque}}</td>
            <td>{{$p->UnidadesEmOrdem}}</td>
            <td>{{$p->NivelDeReposicao}}</td>
            <td>
                <a href="/cadastro_form">
                    <img src="{{ asset('images/e.png') }}">
                </a>
            </td>
            <td>
            <a href="/produtos/deleta/{{$p->IDProduto}}">
                <img src="{{ asset('images/d.png') }}">
            </a>
            </td>
        </tr>
        @endforeach
        </table>

@stop
