@extends('index')

@section('cont')

    <h1>Fornecedores</h1>

    <a href="/consulta">
        <img src="{{ asset('images/r.png') }}" id="back" class="consulta"/>
    </a>

    <table border="1" id="forn">
        <tr>
            <th>ID</th>
            <th>Nome Companhia</th>
            <th>País</th>
            <th>Ação</th>
        </tr>

        @foreach ($produtos as $p)

        <tr>
            <td>{{$p->IDFornecedor}}</td>
            <td>{{$p->NomeCompanhia}}</td>
            <td>{{$p->Pais}}</td>
            <td>
                <a href="/consulta/fornecedor/fdetalhe/{{$p->IDFornecedor}}">
                    <img src="{{ asset('images/b.png') }}"/>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

@stop
