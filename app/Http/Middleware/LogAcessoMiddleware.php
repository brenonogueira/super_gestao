<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //setando variável $ip com valor
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        //chamando metodo estático creatic chamando array com coluna e valor que será imposto nela
        LogAcesso::create(['log' => "$ip requisitou acesso a $rota"]);
        return $next($request);
        //$request - manipular
        //return Response('Chegamos no middleware e finalizamos nele');
    }
}
