<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware;

class SobreNosController extends Controller
{
    //criando metodo constructor e chamando middleware nele ao inves de chamar na rota
    public function __construct(){
        $this->middleware(LogAcessoMiddleware::class);
    }

    public function sobreNos () {

        return view ('site.sobre-nos');
    }
}
