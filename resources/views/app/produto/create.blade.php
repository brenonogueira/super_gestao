@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
  <div class="conteudo-pagina">

        <div class="titulo-pagina2">
            <p>Produto - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="" method="post">
                    @csrf
                    <input type="text" name="nome" value="" class="borda-preta" placeholder="Nome">
                    <input type="text" name="descricao" value="" class="borda-preta" placeholder="Descrição">
                    <input type="text" name="peso" value="" class="borda-preta" placeholder="Peso">

                    <select name="unidade_id" id="">
                        <option value="">--- Selecione a unidade</option>
                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->descricao }}</option>
                        @endforeach
                    </select>


                    <button type="submit">Adicionar</button>
                </form>
            </div>
        </div>

  </div>
@endsection
