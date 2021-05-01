<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjudesProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('filiais', function (Blueprint $table) {
           $table->id();
           $table->string('filial', 30);
           $table->timestamps();
       });

       Schema::create('produto_filiais', function (Blueprint $table) {
           $table->id();

           $table->unsignedBigInteger('filial_id');
           $table->unsignedBigInteger('produto_id');
           $table->decimal('preco_venda', 8, 2);
           $table->integer('estoque_maximo');
           $table->integer('estoque_minimo');
           $table->timestamps();

           //fk
           $table->foreign('filial_id')->references('id')->on('filiais');
           $table->foreign('produto_id')->references('id')->on('produtos');
       });
           //removendo colunas da tabela produtos
       Schema::table('produtos', function (Blueprint $table) {
           $table->dropColumn(['preco_venda', 'estoque_maximo', 'estoque_minimo']);
       });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //revertendo colunas da tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_maximo', 8, 2);
            $table->integer('estoque_minimo', 8, 2);
        });

        Schema::dropIfExists('produto_filiais');

        Schema::dropIfExists('filiais');
    }
}
