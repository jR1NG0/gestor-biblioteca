<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearEjemplares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejemplares', function (Blueprint $table) {
            // se definen las respectivas columnas de la tabla
            $table->increments('id');
            $table->string('fecha_prestamo');
            $table->string('fecha_devolucion');
            $table->integer('libro')->unsigned();
            $table->integer('estado')->unsigned();
            $table->integer('usuario')->unsigned();
            $table->foreign('libro')->references('id')->on('libros');
            $table->foreign('estado')->references('id')->on('estados');
            $table->foreign('usuario')->references('id')->on('usuarios');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejemplares');
    }
}
