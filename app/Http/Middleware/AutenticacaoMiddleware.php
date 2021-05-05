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

        echo $metodo_autenticacao;
        //validando parametros passados
        if ($metodo_autenticacao == 'perfil') {
            echo 'Usuário: perfil';
        }
        //validando acesso do usuário pela middleware autenticação
        if (false) {
            return $next($request);
        } else {
            return Response('ACESSO NEGADO! Autenticação necessária.');
        }
    }
}
