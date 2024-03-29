@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
  <div class="conteudo-pagina">

        <div class="titulo-pagina2">
            <p>Fornecedor - Lista</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <br>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>E-mail</th>
                            <th>Excluir</th>
                            <th>Editar</th>
                        </tr>
                        <tbody>
                            @foreach ($fornecedores as $fornecedor)
                                <tr>
                                    <td>{{$fornecedor->nome}}</td>
                                    <td>{{$fornecedor->site}}</td>
                                    <td>{{$fornecedor->uf}}</td>
                                    <td>{{$fornecedor->email}}</td>
                                    <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Excluir</a></td>
                                    <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
                {{-- metodo appends() espera o parametro, pega as informações e anexa no body da requisição do link --}}
                {{ $fornecedores->appends($request)->links() }} <br>

                {{ $fornecedores->total() }} - Total de registros encontrados
            </div>
        </div>
  </div>
@endsection
