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
            $table->string('rut');
            $table->string('patent', 6)->unique();
            $table->string('email');
            $table->date('Entrega');
            $table->date('Devolucion');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('arriendos');
    }
}
