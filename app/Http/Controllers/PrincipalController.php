<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;
use Database\Seeders\MotivoContatoSeeder;

class PrincipalController extends Controller
{
    public function principal () {
        //pegando todos os registros da model contato e colocando na variavel
       $motivo_contatos = MotivoContato::all();

      return view('site.principal', ['motivo_contatos'=> $motivo_contatos]);
    }
}
