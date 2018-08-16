<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cliente', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('nome', 30);
            $table->string('cnpj', 14);
            $table->string('telefone_contato', 11);
            $table->string('email_contato', 30);
            $table->integer('codigo_cidade');
            $table->char('sigla_estado');
            $table->foreign('codigo_cidade')->references('codigo')->on('Cidade')->onDelete('cascade');
            $table->foreign('sigla_estado')->references('sigla')->on('Estado')->onDelete('cascade');
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
        Schema::dropIfExists('Cliente');
    }
}
