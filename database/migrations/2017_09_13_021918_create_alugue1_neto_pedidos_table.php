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
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')               // Chave extrageira
                    ->references('id')                  // Referência(Coluna selecionada)    
                    ->on('clientes')   // Tabela de ligação
                    ->onDelete('cascade');          // Caso excluido um registro da origem(pessoas_clientes_contatos), exclui o ID do vínculo.*/
            $table->boolean('opcao01');             // (pág alugue1neto), opc-01(1ª opção) 
            $table->boolean('opcao02');             // (pág alugue1neto), opc-02(2ª opção) 
            $table->boolean('opcao03');             // (pág alugue1neto), opc-03(3ª opção) 
            $table->boolean('opcao04');             // (pág alugue1neto), opc-04(4ª opção) 
            $table->boolean('opcao05');             // (pág alugue1neto), opc-05(5ª opção) 
            $table->boolean('opcao06');             // (pág alugue1neto), opc-06(6ª opção) 
            $table->boolean('opcao07');             // (pág alugue1neto), opc-07(7ª opção) 
            $table->boolean('opcao08');             // (pág alugue1neto), opc-08(8ª opção) 
            $table->boolean('opcao09');             // (pág alugue1neto), opc-09(9ª opção) 
            $table->boolean('opcao10');             // (pág alugue1neto), opc-10(10ª opção) 
            $table->string('outros', 150);               // (pág alugue1neto), (outros)
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
