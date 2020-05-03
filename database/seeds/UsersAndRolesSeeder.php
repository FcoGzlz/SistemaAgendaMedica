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
            'telefono' => '963280930',
            'correo' => 'franciscogzlz533@gmail.com',
            'password' => bcrypt('root'),
        ]);
        $superAdminGP = User::create([
            'nombres' => 'Gabriel Arnoldo',
            'rut' => '20317815-8',
            'apellidoPaterno' => 'Pelle',
            'apellidoMaterno' => 'Asencio',
            'telefono' => '989788406',
            'correo' => 'gabriel.pelle25@gmail.com',
            'password' => bcrypt('root'),
        ]);
        $superAdminFR = User::create([
            'nombres' => 'Felipe Hernán',
            'rut' => '20278034-2',
            'apellidoPaterno' => 'Rodríguez',
            'apellidoMaterno' => 'Rodríguez',
            'telefono' => '984269693 ',
            'correo' => 'felipe.rodriguez74@inacapmail.com',
            'password' => bcrypt('root'),
        ]);

        $superAdminFG -> assignRole('superAdmin');
        $superAdminGP -> assignRole('superAdmin');
        $superAdminFR -> assignRole('superAdmin');
    }
}
