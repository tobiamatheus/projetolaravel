@extends('index')

@section('cont')

    <h1>TESTE</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th colspan="2">Ação</th>
        </tr>

        @foreach ($categorias as $c)

        <tr>
            <td>{{$c->IDCategoria}}</td>
            <td>{{$c->NomeCategoria}}</td>
            <td>{{$c->Descricao}}</td>
            <td>{{$c->Figura}}</td>
        </tr>
        @endforeach
    </table>

@stop
