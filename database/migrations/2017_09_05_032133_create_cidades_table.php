<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
           
            $table->increments('id');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')
                  ->references('id')
                  ->on('estados')
                  ->onDelete('cascade');
            $table->string('nomeCidade', 100)->unique();
            $table->integer('habitante');
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
        Schema::dropIfExists('cidades');
    }
}
