<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cita', function (Blueprint $table) {
          $table->foreign('id_paciente')->references('id')->on('users');
          $table->foreign('id_cupo')->references('id')->on('cupo');
          $table->foreign('id_estado')->references('id')->on('estado');
        });

        Schema::table('cupo', function (Blueprint $table) {
          $table->foreign('id_doctor')->references('id')->on('users');
        });

        Schema::table('doctor_especialidad', function (Blueprint $table) {
          $table->foreign('id_doctor')->references('id')->on('users');
          $table->foreign('id_especialidad')->references('id')->on('especialidad');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relaciones');
    }
}
