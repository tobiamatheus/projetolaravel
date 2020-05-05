<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}" type="text/css">
    <link rel="shortcut icon" href="{{ asset('images/laravel.ico') }}" type="image/x-icon">
    <title>Laravel @yield('Laravel')</title>
</head>

<body>

<input type="checkbox" name="cb" id="cb">
    <label for="cb">
        <div class="menu">
        <span class="hamburguer"></span>
        </div>
    </label>

    <div id="popup">
        <a href="/">Início</a>
        <a href="/consulta/">Consultas</a>
        <a href="/cadastro_form/">Cadastrar produto</a>
        <a href="/produtos/">Lista de produtos</a>
    </div>

    <div id="container">
        @yield('cont')
    </div>

</body>
</html>


