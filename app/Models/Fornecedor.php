<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use HasFactory;
    use SoftDeletes;
    //setando nome da tabela identico ao nome dela no banco
    protected $table = 'fornecedores';
    //usando a variável fillable para autorizar a inserção de dados no banco via array
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
