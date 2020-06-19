<?php

use App\Estado;
use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create(
            [
                'nombre' => 'Agendada',
                'descripcion' => 'Estado correspondiente a las citas médicas, este será añadido a la cita en cuando esta sea creada por el paciente. Este estado indica que la cita ha sido agendada pero aún no se ha confirmado.'
            ]
            );

        Estado::create(
            [
                'nombre' => 'Confirmada',
                'descripcion' => 'Estado correspondiente a las citas médicas, este será añadido a la cita cuando esta sea confirmada por el administrador de citas. Estet estado indica que la cita ha sido confirmada.'
            ]
            );


        Estado::create(
            [
                'nombre' => 'Cancelada por Paciente',
                'descripcion' => 'Estado correspondiente a las citas médicas, este será añadido a la cita cuando esta sea cancelada por el paciente. Estet estado indica que la cita ha sido cancelada por el paciente.'
            ]
            );

        Estado::create(
            [
                'nombre' => 'Cancelada por Personal Médico',
                'descripcion' => 'Estado correspondiente a las citas médicas, este será añadido a la cita cuando esta sea cancelada poa algún miento del consulorio. Estet estado indica que la cita ha sido cancelada el personal médico del consultorio.'
            ]
            );
    }
}   
