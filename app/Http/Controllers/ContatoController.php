<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato; //importar a model contato
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        //pegando todos os registros da banco contato e colocando na variavel
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        //realizar a validação dos dados do formulário recebidos no request
        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contato_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'nome.unique' => 'O nome informado já está em uso',
            'email.email' => 'O email informado não é válido',
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback); //validando as variaveis das mensagens de erro
        SiteContato::create($request->all()); //criando e inserindo dados preenchidos no form para a tabela no banco
        return redirect()->route('site.index'); //redirecionando para a index ao inserir com sucesso
    }
}
