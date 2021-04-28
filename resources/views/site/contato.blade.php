
@extends('site.layouts.basico') {{-- puxando template do layout --}}
@section('titulo', 'Contato') {{-- section para definir titulo especifico da view e mostrando no template --}}

@section('conteudo') {{-- criando section para conteudo exclusivo da view que está puxando o layout --}}
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta']) {{-- criação da variável $classe para especificar css nas views diferentes -- }}
                <p>Responderemos o mais rápido possível!</p>{{--  passando parametros específicos da view contato para o componente form  --}}
                <p>Online 24h</p>
                @endcomponent  {{-- inserindo componente form_contato --}}
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
