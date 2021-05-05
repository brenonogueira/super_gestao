<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao) {

        session_start();

        //verifica se sessao email está definida e se for diferente e vazio
        //empurra a requisição
        if(isset($_SESSION['email']) && $_SESSION['email'] != '') {
            return $next($request);
        } else {
            //passando parametro de erro opcional da rota
            return redirect()->route('site.login', ['erro' => 2]);
        }
    }
}
