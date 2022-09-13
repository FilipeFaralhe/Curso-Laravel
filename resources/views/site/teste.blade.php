<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
</head>
    <body>
        <h3>Teste (view) P1 = {{ $valor1 }} e P2 = {{ $valor2 }}</h3>
        <h3>Teste (view) P1 + p2 = {{ $valor1 + $valor2 }}</h3>
        <h3>Teste (view) P1 + p2 = {{ $valor1 - $valor2 }}</h3>
        <ul>
            <li>
                <a href="{{ route('site.index') }}">Principal</a>
            </li>
            <li>
                <a href="{{ route('site.sobrenos') }}">Sobre Nós</a>
            </li>
            <li>
                <a href="{{ route('site.contato') }}">Contato</a>
            </li>
        </ul>
    </body>
</html>
