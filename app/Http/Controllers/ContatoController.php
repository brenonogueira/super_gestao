<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato; //importar a model contato

class ContatoController extends Controller
{
    public function contato () {

        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];

        // // $contato->nome = $request>t('nome');
        // // $contato->telefone = $request->input('telefone');
        // // $contato->email = $request->input('email');
        // // $contato->motivo_contato = $request->input('motivo_contato');
        // // $contato->mensagem = $request->input('mensagem');
        // //$contato->save();

        // $contato->fill($request->all());
        // $contato->save();
        // // $contato->create($request->all());
        // print_r($contato->getAttributes());
        // // var_dump($_POST);


        return view('site.contato', ['titulo' => 'Contato(teste)', 'motivo_contato'=> $motivo_contatos]);
    }

    public function salvar(Request $request){
        // $contato = new SiteContato();
        // $contato->nome = $request->nome;
        // $contato->telefone = $request->telefone;
        // $contato->email = $request->email;
        // $contato->motivo_contato = $request->motivo_contato;
        // $contato->mensagem = $request->mensagem;
        // $contato->save();
        // return redirect()->route('site.contato')->with(['message' => 'Usuário criado com sucesso!', 'color' => 'success']);

        $request->validate([
            'nome' => 'required|min:3|max:40',
            // 'telefone' => 'required',
            // 'email' => 'required',
            // 'motivo_contato' => 'required',
            // 'mensagem' => 'required',
        ]);
    }
}
