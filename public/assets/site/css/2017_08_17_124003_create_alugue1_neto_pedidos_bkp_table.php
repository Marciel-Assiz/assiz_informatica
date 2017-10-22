<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlugue1NetoPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alugue1_neto_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoas_clientes_contato_id')->unsigned();
            $table->foreign('pessoas_clientes_contato_id')               // Chave extrageira
                    ->references('id')                  // Referência(Coluna selecionada)    
                    ->on('pessoas_clientes_contatos')   // Tabela de ligação
                    ->onDelete('cascade');              // Caso excluido um registro da origem(pessoas_clientes_contatos), exclui o ID do vínculo.*/
            $table->boolean('a1n-opc-01')->default(0);              // aln(pág alugue1neto), opc-01(1ª opção) 
            $table->boolean('a1n-opc-02')->default(0);              // aln(pág alugue1neto), opc-02(2ª opção) 
            $table->boolean('a1n-opc-03')->default(0);              // aln(pág alugue1neto), opc-03(3ª opção) 
            $table->boolean('a1n-opc-04')->default(0);              // aln(pág alugue1neto), opc-04(4ª opção) 
            $table->boolean('a1n-opc-05')->default(0);              // aln(pág alugue1neto), opc-05(5ª opção) 
            $table->boolean('a1n-opc-06')->default(0);              // aln(pág alugue1neto), opc-06(6ª opção) 
            $table->boolean('a1n-opc-07')->default(0);              // aln(pág alugue1neto), opc-07(7ª opção) 
            $table->boolean('a1n-opc-08')->default(0);              // aln(pág alugue1neto), opc-08(8ª opção) 
            $table->boolean('a1n-opc-09')->default(0);              // aln(pág alugue1neto), opc-09(9ª opção) 
            $table->boolean('a1n-opc-10')->default(0);              // aln(pág alugue1neto), opc-10(10ª opção) 
            $table->tinyInteger('horaAula');
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
        Schema::dropIfExists('alugue1_neto_pedidos');
    }
}
