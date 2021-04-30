<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProdutosProdutosDetalhesConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //adicionar o relacionamento com a tabela produtos
         Schema::table('produtos', function(Blueprint $table) {
            //cria a coluna unidade_id na tabela acima
            $table->unsignedBigInteger('unidade_id');
            // constraint foreing key
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        Schema::table('produto_detalhes', function(Blueprint $table) {
            //cria a coluna unidade_id na tabela acima
            $table->unsignedBigInteger('unidade_id');
            // constraint foreing key
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
