@extends('index')

@section('cont')

    <div id="inicio">
        <h1>PROJETO LARAVEL</h1>

        <form action="/busca" method="get" id="bsc">
            @csrf
            <input type="text" name="busca" placeholder="Digite aqui o nome do produto" class="bus"autofocus required>
            <input type="submit" value="Buscar" class="busca">
        </form>
    </div>

@stop
