<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request ){

        $erro = '';

        if($request->get('erro') == 1) {
            $erro = 'Usuário inválido ou não existe';
        }

        if($request->get('erro') == 2) {
            $erro = 'Necessário realizar login para visualizar a página';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request){
        //regras de verificação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //as mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        //se nao passar pelo validade
        $request->validate($regras, $feedback);

        //recuperamos os parametros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');

        //IniciarModelUser
        $user = new User();

        //fazendo comparação com eloquente se email é igual a $email e senha é igual a $senha
        $usuario = $user->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();//metodo de coleções pra pegar o primeiro da coleção;

        //condição pra verificar se o objeto possui o atributo name
        if(isset($usuario->name)) {
           session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            //se session for correta, redireciona para rota /clientes
            return redirect()->route('app.cliente');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.index');
    }

}
