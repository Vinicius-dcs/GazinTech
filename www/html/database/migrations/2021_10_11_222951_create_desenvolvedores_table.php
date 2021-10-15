<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesenvolvedoresTable extends Migration
{

    function up()
    {
        Schema::create('desenvolvedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->char('sexo');
            $table->integer('idade');
            $table->text('hobby');
            $table->date('dataNascimento');
        });
    }

    public function down()
    {
        Schema::dropIfExists('desenvolvedores');
    }
}
