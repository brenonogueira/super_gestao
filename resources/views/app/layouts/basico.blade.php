<!DOCTYPE html>
<html lang="pt-br">
    <head>
        {{-- puxando titulo exclusivo de cada view atraves do parametro --}}
        <title>Super gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">
    </head>

    <body>
        {{-- include de componente topo que se repete em várias pages --}}
        @include('app.layouts._partials.topo')
        {{-- mostrando conteudo da view no layout --}}
        @yield('conteudo');
    </body>
</html>
