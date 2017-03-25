<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_ticket', function (Blueprint $table) {
            $table->increments('tipo_ticket_id');
            $table->decimal('valor');
            $table->string('descricao', 255);
            $table->integer('qtd_dia_expirar');
            $table->boolean('ativo');
            $table->date('data_hora_atualizacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_ticket');
    }
}
