<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('usuario_id');
            $table->string('cpf', 11)->unique();            
            $table->string('login', 15)->unique();
            $table->string('nome', 255);
            $table->string('rg', 15);
            $table->string('email', 255)->unique();
            $table->string('senha');
            $table->boolean('ativo');
            $table->date('data_ultima_refeicao');
            $table->integer('tipo_usuario_id')->unsigned();
            $table->foreign('tipo_usuario_id')->references('tipo_usuario_id')->on('tipo_usuario');          
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
