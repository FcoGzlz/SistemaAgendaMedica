<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //CRECIÓN DE PERMISOS
        //Creación de Permisos respecto a Usuarios
        Permission::create(['name' => 'crear_usuario']);
        Permission::create(['name' => 'actualizar_usuario']);
        Permission::create(['name' => 'eliminar_usuario']);
        Permission::create(['name' => 'listar_usuario']);

        //Creación de Permisos respecto a Cupos
        Permission::create(['name' => 'crear_cupo']);
        Permission::create(['name' => 'actualizar_cupo']);
        Permission::create(['name' => 'eliminar_cupo']);
        Permission::create(['name' => 'listar_cupo']);

        //Creación de Permisos respecto a Citas
        Permission::create(['name' => 'crear_cita']);
        Permission::create(['name' => 'actualizar_cita']);
        Permission::create(['name' => 'eliminar_cita']);
        Permission::create(['name' => 'listar_cita']);



        //CREACIÓN DE ROLE
        //Administrador de Usuarios
        $roleAdminUsuarios = Role::create(['name' => 'administradorUsuarios']);
        $roleAdminUsuarios->givePermissionTo('crear_usuario');
        $roleAdminUsuarios->givePermissionTo('actualizar_usuario');
        $roleAdminUsuarios->givePermissionTo('eliminar_usuario');
        $roleAdminUsuarios->givePermissionTo('listar_usuario');

        //Administrador de Cupos y Citas
        $roleCyC = Role::create(['name' => 'administradorCyC']);
        $roleCyC->givePermissionTo('crear_cupo');
        $roleCyC->givePermissionTo('actualizar_cupo');
        $roleCyC->givePermissionTo('eliminar_cupo');
        $roleCyC->givePermissionTo('listar_cupo');
        $roleCyC->givePermissionTo('actualizar_cita');
        $roleCyC->givePermissionTo('eliminar_cita');
        $roleCyC->givePermissionTo('listar_cita');

        //Paciente o Usuario Común
        $rolePaciente = Role::create(['name' => 'paciente']);
        $rolePaciente->givePermissionTo('crear_cita');
        $rolePaciente->givePermissionTo('actualizar_cita');
        $rolePaciente->givePermissionTo('eliminar_cita');
        $rolePaciente->givePermissionTo('listar_cita');

        //Doctor
        $roleDoctor = Role::create(['name' => 'doctor']);
        $roleDoctor->givePermissionTo('eliminar_cupo');
        $roleDoctor->givePermissionTo('actualizar_cupo');

        //Super Administrador
        $superAdmin = Role::create(['name' => 'superAdmin']);
        $superAdmin->givePermissionTo(Permission::all());
    }
}
