<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersAndRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SUPERADMINS
        $superAdminFG = User::create([
            'nombres' => 'Francisco Javier',
            'rut' => '19933746-7',
            'apellidoPaterno' => 'González',
            'apellidoMaterno' => 'Marin',
            'genero' => 'Masculino',
            'telefono' => '963280930',
            'email' => 'franciscogzlz533@gmail.com',
            'password' => bcrypt('root'),
        ]);
        $superAdminGP = User::create([
            'nombres' => 'Gabriel Arnoldo',
            'rut' => '20317815-8',
            'apellidoPaterno' => 'Pelle',
            'apellidoMaterno' => 'Asencio',
            'genero' => 'Masculino',
            'telefono' => '989788406',
            'email' => 'gabriel.pelle25@gmail.com',
            'password' => bcrypt('root'),
        ]);
        $superAdminFR = User::create([
            'nombres' => 'Felipe Hernán',
            'rut' => '20278034-2',
            'apellidoPaterno' => 'Rodríguez',
            'apellidoMaterno' => 'Rodríguez',
            'genero' => 'Masculino',
            'telefono' => '984269693 ',
            'email' => 'felipe.rodriguez74@inacapmail.com',
            'password' => bcrypt('root'),
        ]);

        $adminCyC = User::create([
            'nombres' => 'Admin',
            'rut' => 'adminCyC',
            'apellidoPaterno' => 'CyC',
            'apellidoMaterno' => 'C',
            'genero' => 'Masculino',
            'telefono' => '984269693 ',
            'email' => 'admmin@CyC.com',
            'password' => bcrypt('root'),
        ]);

        $adminUsuarios = User::create([
            'nombres' => 'Admmin',
            'rut' => 'adminUsuarios',
            'apellidoPaterno' => 'Usuarios',
            'apellidoMaterno' => 'C',
            'genero' => 'Masculino',
            'telefono' => '984269693 ',
            'email' => 'admmin@usuarios.com',
            'password' => bcrypt('root'),
        ]);

        $paciente = User::create([
            'nombres' => 'Paciente',
            'rut' => 'paciente',
            'apellidoPaterno' => 'Común',
            'apellidoMaterno' => 'C',
            'genero' => 'Masculino',
            'telefono' => '984269693 ',
            'email' => 'paciente@comun.com',
            'password' => bcrypt('root'),
        ]);

        $doctor = User::create([
            'nombres' => 'Doctor',
            'rut' => 'doctor',
            'apellidoPaterno' => 'Común',
            'apellidoMaterno' => 'C',
            'genero' => 'Masculino',
            'telefono' => '984269693 ',
            'email' => 'doctor@comun.com',
            'password' => bcrypt('root'),
        ]);
        
        $doctor -> assignRole('doctor');
        $paciente -> assignRole('paciente');
        $adminUsuarios -> assignRole('administradorUsuarios');
        $adminCyC -> assignRole('administradorCyC');
        $superAdminFG -> assignRole('superAdmin');
        $superAdminGP -> assignRole('superAdmin');
        $superAdminFR -> assignRole('superAdmin');
    }
}
