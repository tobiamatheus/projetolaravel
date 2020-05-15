@extends('index')

@section('cont')

    <h1>Ordem Detalhes</h1>

    <a href="/consulta/ordens">
        <img src="{{ asset('images/r.png') }}" id="back" class="consulta"/>
    </a>

    <table border="1" id="ord">
        <tr>
            <th>ID</th>
            <th>ID Cliente</th>
            <th>Data Ordem</th>
            <th>Endereço</th>
            <th>Cidade</th>´
            <th>CEP</th>
            <th>País</th>
        </tr>

        @foreach ($produtos as $p)

        <tr>
            <td>{{$p->IDOrdem}}</td>
            <td>{{$p->IDCliente}}</td>
            <td>{{$p->DataOrdem}}</td>
            <td>{{$p->EnderecoDestinatario}}</td>
            <td>{{$p->CidadeDestinatario}}</td>
            <td>{{$p->CepDestinatario}}</td>
            <td>{{$p->PaisDestinatario}}</td>
        </tr>
        @endforeach
    </table>

@stop
