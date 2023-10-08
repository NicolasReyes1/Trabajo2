<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArriendosTable extends Migration
{
    public function up()
    {
        Schema::create('arriendos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('lastname');
            $table->integer('rut')->unique();
            $table->unsignedBigInteger('patent');
            $table->string('email')->unique();
            $table->date('Entrega');
            $table->date('Devolucion');
            $table->timestamps();
            $table->foreign('patent')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('arriendos');
    }
}
