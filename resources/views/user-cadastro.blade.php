@extends('index')

@section('Laravel','- Cadastro de Usuário')

@section('cont')

    <h1>Cadastro de Usuário</h1>
    <form action="cadastroUser" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" autofocus placeholder="Digite o nome">
        <br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" placeholder="Digite o e-mail">
        <br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite a senha">
        <br>
        <br>
        <input type="submit" value="Cadastrar" id="cadastroUser">

    </form>

@stop
