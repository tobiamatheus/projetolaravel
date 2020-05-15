@extends('index')

@section('cont')

    <h1>Fornecedor Detalhes</h1>

    <a href="/consulta/fornecedores">
        <img src="{{ asset('images/r.png') }}" id="back3"/>
    </a>

    <table border="1" id="forn">
        <tr>
            <th>ID</th>
            <th>Nome Companhia</th>
            <th>Nome Contato</th>
            <th>Endereço</th>
            <th>Cidade</th>´
            <th>CEP</th>
            <th>País</th>
        </tr>

        @foreach ($produtos as $p)

        <tr>
            <td>{{$p->IDFornecedor}}</td>
            <td>{{$p->NomeCompanhia}}</td>
            <td>{{$p->NomeContato}}</td>
            <td>{{$p->Endereco}}</td>
            <td>{{$p->Cidade}}</td>
            <td>{{$p->cep}}</td>
            <td>{{$p->Pais}}</td>
        </tr>
        @endforeach
    </table>

@stop
