<?php

namespace App\Http\Controllers;

use App\DoctorEspecialidad;
use App\Especialidad;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{

    //INICIO DE SECCIÓN DE ADMINISTRACIÓN DE USUARIOS ADMINISTRADORES DE CUPOS Y CITAS.
    //Función 'indexAdminsCyC', la cual se encarga de recuperar la lista de los usuarios con el rol 'administradorCyC'.
    public function indexAdminsCyC(){
        $adminsCyC = User::role('administradorCyC')->get();//Se recuperan a todos los usuarios cuyo rol sea 'administradorCyC' y se guardan en la variable 'adminsCyC'.
        return view('adminUsuarios.usuariosCyC', compact('adminsCyC'));//Se retorna la vista junto con la lista de los usuarios anteriormente recuperados.
    }

    //Funcipon de validación de Laravel, la cual toma los datos enviados por 'form' y los valida según los parámetros indicados.
    protected function validatorAdminCyC(array $dataAdminCyC)
    {
        return Validator::make($dataAdminCyC, [
            'nombres' => ['required', 'string', 'max:255'],
            'rut' => ['required', 'string', 'max:255'],
            'apellidoPaterno' => ['required', 'string', 'max:255'],
            'apellidoMaterno' => ['required', 'string', 'max:255'],
            'genero' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    //Función para agregar un usuario con el rol de 'administrador CyC'al sistema.
    public function createAdminCyC(Request $dataAdminCyC)//La función recibe como parámetro la 'data', la cual se validó anteriormente por el método 'validator'
    {
        //Se asigna una vatiable y se utiliza el método 'create' para crear un nuevo usuario y la vez, este usuario es guardado en la variable 'adminCyC'.
        $adminCyC = User::create(
            [
                'nombres' => $dataAdminCyC['nombres'],
                'rut' => $dataAdminCyC['rut'],
                'apellidoPaterno' => $dataAdminCyC['apellidoPaterno'],
                'apellidoMaterno' => $dataAdminCyC['apellidoMaterno'],
                'genero' => $dataAdminCyC['genero'],
                'telefono' => $dataAdminCyC['telefono'],
                'email' => $dataAdminCyC['email'],
                'password' => Hash::make('root'),
            ]
        );

        $adminCyC ->assignRole('administradorCyC');//Por último se le asgina el rol al usuarios anteriormente creado.
        return redirect()->route("AdminUsersCyC");//Se retorna la vista principal, para que la tabla sea actualizada.

    }
    //FIN DE SECCIÓN DE ADMINISTRACIÓN DE USAURIOS ADMINISTRADORES DE CUPOS Y CITAS.

    // INICIO DE SECCIÓN DE ADMINISTRACIÓN DE DOCTORES.

    public function indexDoctores(){
        $doctores = DB::table('doctor_especialidad')
        ->join('users', 'users.id', '=', 'doctor_especialidad.id_doctor')
        ->join('especialidad', 'especialidad.id', '=', 'doctor_especialidad.id_especialidad')
        ->select('users.rut as rut', 'users.nombres as nombres', 'users.apellidoPaterno as apellidoPaterno', 'users.apellidoMaterno as apellidoMaterno', 'users.email as email', 'users.telefono as telefono', 'especialidad.nombre as especialidad')
        ->get();
        $especialidades = Especialidad::all();
        return view('adminUsuarios.doctores', compact('doctores'), compact('especialidades'));
    }

    protected function validatorDoctor(array $dataDoctor)
    {
        return Validator::make($dataDoctor, [
            'nombres' => ['required', 'string', 'max:255'],
            'rut' => ['required', 'string', 'max:255'],
            'apellidoPaterno' => ['required', 'string', 'max:255'],
            'apellidoMaterno' => ['required', 'string', 'max:255'],
            'especialidad' => ['required'],
            'genero' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function createDoctor(Request $dataDoctor){
        $doctor = User::create(
            [
                'nombres' => $dataDoctor['nombres'],
                'rut' => $dataDoctor['rut'],
                'apellidoPaterno' => $dataDoctor['apellidoPaterno'],
                'apellidoMaterno' => $dataDoctor['apellidoMaterno'],
                'genero' => $dataDoctor['genero'],
                'telefono' => $dataDoctor['telefono'],
                'email' => $dataDoctor['email'],
                'password' => Hash::make('root'),
            ]
        );
        $doctor->assignRole('doctor');

        $doctor_especialidad = new DoctorEspecialidad();
        $doctor_especialidad->id_doctor = $doctor->id;
        $doctor_especialidad->id_especialidad = $dataDoctor['especialidad'];
        $doctor_especialidad->save();

        return redirect()->route('AdminDoctors');
    }
    //FIN DE SECCIÓN DE ADMINISTRACIÓN DE DOCTORES.
}
