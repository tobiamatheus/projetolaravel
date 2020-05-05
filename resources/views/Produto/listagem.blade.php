@extends('index')

@section('Laravel', '- Listagem de Produtos')

@section('cont')

    <h1>Listagem de Produtos</h1>

    <a href="/cadastro_form">
        <img src="{{ asset('images/p.png') }}" class="plus"/>
    </a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th colspan="2">Ação</th>
        </tr>

        @foreach ($produtos as $p)

        <tr>
            <td>{{$p->IDProduto}}</td>
            <td>{{$p->NomeProduto}}</td>
            <td>{{$p->QuantidadePorUnidade}}</td>
            <td>R${{$p->PrecoUnitario}}</td>
            <td>
                <div>
                    <a href="/produtos/mostra/{{$p->IDProduto}}">
                        <img src="{{ asset('images/b.png') }}"/>
                    </a>
                </div>
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
