<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('./css/estilo_basico.css') }}">
    </head>

    <body>
        @include('site.layouts._partials.topo') {{-- Faz a inclusão da de uma view --}}
        @yield('content') {{-- Chama a section com o nome 'content' --}}
    </body>
</html>
