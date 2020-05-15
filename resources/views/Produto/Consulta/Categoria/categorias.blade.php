@extends('index')

@section('cont')

    <h1 class="consu">Categorias</h1>

    <a href="/consulta">
        <img src="{{ asset('images/r.png') }}" id="back" class="consulta"/>
    </a>

    <table border="1" id="cat">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>

        @foreach ($produtos as $p)

        <tr>
            <td>{{$p->IDCategoria}}</td>
            <td>{{$p->NomeCategoria}}</td>
            <td>{{$p->Descricao}}</td>
        </tr>
        @endforeach
    </table>

@stop
