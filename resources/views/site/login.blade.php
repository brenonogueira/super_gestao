@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <br><br><br
        <div class="informacao-pagina">
            <div style="width: 20%; height:100px;  margin-left:auto; margin-right:auto; margin-bottom:100px; margin-top:100px;">
                <h2>LOGIN</h2>
                <form action={{ route('site.login') }} method="post">
                    @csrf
                    <input name="usuario" type="text" placeholder="Usuário" class="borda-preta">
                    <input name="senha" type="password" placeholder="Senha" class="borda-preta">
                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
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
    </div>
 @endsection
