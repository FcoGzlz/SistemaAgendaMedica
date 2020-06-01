<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_paciente')->unsigned();//Campo que relaciona a Cita con Usuario
            $table->bigInteger('id_cupo')->unsigned();//Campo que relaciona a Cita con Cupo
            $table->bigInteger('id_estado')->unsigned();//Campo que relaciona a Cita con Estado
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
        Schema::dropIfExists('cita');
    }
}
