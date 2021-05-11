@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
  <div class="conteudo-pagina">

        <div class="titulo-pagina2">
            <p>Listagem de produtos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <br>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidade ID</th>
                        </tr>
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td>{{$produto->nome}}</td>
                                    <td>{{$produto->descricao}}</td>
                                    <td>{{$produto->peso}}</td>
                                    <td>{{$produto->unidade_id}}</td>
                                    <td><a href="">Excluir</a></td>
                                    <td><a href="">Editar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
                {{-- metodo appends() espera o parametro, pega as informações e anexa no body da requisição do link --}}
                {{ $produtos->appends($request)->links() }} <br>

                {{ $produtos->total() }} - Total de produtos encontrados
            </div>
        </div>
  </div>
@endsection
