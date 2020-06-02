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

        Schema::table('cita', function (Blueprint $table) {
            $table->foreign('id_estado')->references('id')->on('estado');//Clave foránea que relaciona el campo 'id_estado' con el campo 'id' de la tabla estado
        });

        Schema::table('paciente_cita', function (Blueprint $table) {
            $table->foreign('id_paciente')->references('id')->on('users');//Clave foránea que relaciona el campo 'id_paciente' con el campo 'id' de la tabla users
            $table->foreign('id_cita')->references('id')->on('cita');//Clave foránea que relaciona el campo 'id_cita cn el campo 'id' de la tabla 'cita'
        });
        Schema::table('doctor_cita', function (Blueprint $table) {
            $table->foreign('id_doctor')->references('id')->on('users');//Clave foránea que relaciona el campo 'id_dcotor' con el campo 'id' de la tabla 'users'
            $table->foreign('id_cita')->references('id')->on('cita');//Clave foránea que relaciona el campo 'id_cita cn el campo 'id' de la tabla 'cita'
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
