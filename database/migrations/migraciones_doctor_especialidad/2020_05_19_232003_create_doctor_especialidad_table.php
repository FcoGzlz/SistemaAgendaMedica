<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorEspecialidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_especialidad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_doctor')->unsigned();//Campo que contendrá la id del doctor de la tabla Users
            $table->bigInteger('id_especialidad')->unsigned();//Capo que contedrá el id de la especialidad de la tabla Especialidad
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
        Schema::dropIfExists('doctor_especialidad');
    }
}
