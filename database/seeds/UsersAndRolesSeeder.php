<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('root'),
        ]);
        $superAdminGP = User::create([
            'nombres' => 'Gabriel Arnoldo',
            'rut' => '20317815-8',
            'apellidoPaterno' => 'Pelle',
            'apellidoMaterno' => 'Asencio',
            'genero' => 'Masculino',
            'telefono' => '989788406',
            'email' => 'gabriel.pelle25@gmail.com',
            'password' => Hash::make('root'),
        ]);
        $superAdminFR = User::create([
            'nombres' => 'Felipe Hernán',
            'rut' => '20278034-2',
            'apellidoPaterno' => 'Rodríguez',
            'apellidoMaterno' => 'Rodríguez',
            'genero' => 'Masculino',
            'telefono' => '984269693 ',
            'email' => 'felipe.rodriguez74@inacapmail.com',
            'password' =>  Hash::make('root'),
        ]);

        $adminCyC = User::create([
            'nombres' => 'María Ester',
            'rut' => 'adminCyC',
            'apellidoPaterno' => 'Quijada',
            'apellidoMaterno' => 'Sanhueza',
            'genero' => 'Femenino',
            'telefono' => '900520679 ',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('MariaRoot'),
        ]);

        $adminUsuarios = User::create([
            'nombres' => 'Admmin',
            'rut' => 'adminUsuarios',
            'apellidoPaterno' => 'Usuarios',
            'apellidoMaterno' => 'C',
            'genero' => 'Masculino',
            'telefono' => '963014876 ',
            'email' => 'admmin@usuarios.com',
            'password' => Hash::make('AdminURoot'),
        ]);

        $paciente = User::create([
            'nombres' => 'Pedro Esteban',
            'rut' => 'paciente',
            'apellidoPaterno' => 'Flores',
            'apellidoMaterno' => 'Verdugo',
            'genero' => 'Masculino',
            'telefono' => '938742009',
            'email' => 'pedro.esteban@gmail.com',
            'password' => Hash::make('PedroRoot'),
        ]);

        $doctor = User::create([
            'nombres' => 'Alfonso Andrés',
            'rut' => 'doctor',
            'apellidoPaterno' => 'Pérez',
            'apellidoMaterno' => 'García',
            'genero' => 'Masculino',
            'telefono' => '932547820 ',
            'email' => 'alandres@gmail.com',
            'password' => Hash::make('AlfonsoRoot'),
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
