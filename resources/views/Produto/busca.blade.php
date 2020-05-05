@extends('index')

@section('Laravel', '- Busca de Produtos')

@section('cont')

    <h1>Buscar Produto</h1>

    <table>
        <tr>
            <td>{{ $resultado ?? ''}}</td>
        </tr>
    </table>

@stop
