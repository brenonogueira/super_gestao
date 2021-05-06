<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        return view('app.fornecedor.index');
    }

    public function adicionar(Request $request) {

        //variavel msg para cadastro com sucesso
        $msg = '';

        if ($request->input('_token') != '') {

            //validação
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo UF deve ter no mínimo 2 caracteres',
                'uf.max' => 'O campo UF deve ter no máximo 2 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente'
            ];

            //validando regras
            $request->validate($regras, $feedback);

            //ligando fornecedor à model dele, puxando os dados
            $fornecedor = new Fornecedor();
            //inserindo no banco
            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso';
        }

        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function listar(Request $request){

        //metodo get(); serve para retornar collection
        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
                                    ->where('site', 'like', '%'.$request->input('site').'%')
                                    ->where('uf', 'like', '%'.$request->input('uf').'%')
                                    ->where('email', 'like', '%'.$request->input('email').'%')
                                    ->get();

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores]);
    }


}
