<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor_especialidad', function (Blueprint $table) {
            $table->foreign('id_doctor')->references('id')->on('users');//Clave foránea que relaciona el campo 'id_doctor' con el campo 'id' con la tabla 'users'
            $table->foreign('id_especialidad')->references('id')->on('especialidad');//Clave foránea que relaciona el campo 'id_especialidad' con el campo 'id' con la tabla 'especialidad'
        });

        Schema::table('cupo', function (Blueprint $table) {
            $table->foreign('id_especialidad')->references('id')->on('especialidad');//Clave foránea que relaciona el campo 'id_especialidad' con el campo 'id' de la tabla 'especialidad'
        });

        Schema::table('cita', function (Blueprint $table) {
            $table->foreign('id_paciente')->references('id')->on('users');//Clave foránea que relaciona el campo 'id_paciente' con el campo 'id' de la tabla users
            $table->foreign('id_cupo')->references('id')->on('cupo');//Clave foránea que relaciona el campo 'id_cupo' cn el campo 'id' de la tabla 'cupo'
            $table->foreign('id_estado')->references('id')->on('estado');//Clave foránea que relaciona el campo 'id_estado' con el campo 'id' de la tabla estado
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
