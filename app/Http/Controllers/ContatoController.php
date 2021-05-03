<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato; //importar a model contato

class ContatoController extends Controller
{
    public function contato (Request $request) {

         $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');
        //$contato->save();

        $contato->fill($request->all());
        $contato->save();
        // $contato->create($request->all());

        var_dump($_POST);
        return view('site.contato');
    }
}
