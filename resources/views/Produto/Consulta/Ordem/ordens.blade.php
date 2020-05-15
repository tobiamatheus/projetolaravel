@extends('index')

@section('cont')

    <h1>Ordens</h1>

    <a href="/consulta">
        <img src="{{ asset('images/r.png') }}" id="back3"/>
    </a>

    <table border="1" id="t3">
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Data Ordem</th>
            <th>País Destinatário</th>
            <th>Ação</th>
        </tr>

        @foreach ($produtos as $p)

        <tr>
            <td>{{$p->IDOrdem}}</td>
            <td>{{$p->IDCliente}}</td>
            <td>{{$p->DataOrdem}}</td>
            <td>{{$p->PaisDestinatario}}</td>
            <td>
                <a href="/consulta/ordem/odetalhe/{{$p->IDOrdem}}">
                    <img src="{{ asset('images/b.png') }}"/>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

@stop
