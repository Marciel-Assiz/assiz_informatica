<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasClientesContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas_clientes_contatos', function (Blueprint $table) {
            $table->increments('id');
            /*$table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')            // Chave extrageira
                    ->references('id')              // Referência(Coluna selecionada)    
                    ->on('alugue1_neto_pedidos')    // Tabela de ligação
                    ->onDelete('cascade');          // Caso excluido um pedido da origem(alugue1_neto_pedidos), exclui o ID do vínculo.*/
            $table->string('nomeCliente', 100);
            $table->string('email', 100)->unique();
            $table->string('telefone', 20);
            $table->boolean('ativo');
            $table->boolean('newsletter');
            $table->text('mensagem'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas_clientes_contatos');
    }
}
