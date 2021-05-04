<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTabelaSiteContatoComFkMotivoContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('site_contatos', function (Blueprint $table) {
        $table->unsignedBigInteger("motivo_contato")->change();
         $table->foreign('motivo_contato')->references('id')->on('motivo_contatos');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_contatos', function(Blueprint $table){
            $table->dropForeign('site_contatos_motivo_contato_foreign');
        });
    }
}
