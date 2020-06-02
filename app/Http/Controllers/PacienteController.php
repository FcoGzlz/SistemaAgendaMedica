<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Cita;
use App\Cupo;
use App\Especialidad;
use LengthException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    public function inicio (){
        return view('index');
    }
    
    //Función de validación de existencia del rut del usuario en la Base de Datos.
    public function validar(Request $request){
        $rut = $request->rut;//Se rescata a través de request el parámetro 'rut' el cual es ingresado por el usuario al momento de acceder al sistema.
        $usuario = User::Where('rut', "$rut")->get();//Se rescatan TODOS los usuarios que se encuentran almacenados en la Base de Datos, y a trvés de 'where' se filtra a través del rut ingresado por el usuario en este caso.

        //Se evalúa la lista obtenida a través de la consulta
        if ($usuario->isEmpty()) {
            return view('paciente.registro', compact("rut"));//En caso de que la lista se encuentre vacía, significará que el rut del usuario así como el propio usuario no se encuentran registrados en el sistema, por lo que se le redireccionará al formulario de registro.
        }
        else{
            return view('paciente.login', compact("rut"));//En caso de que la lista no esté vacía, significará que el usuario ya se encuentra registrado en el sistema, por lo que se le redireccionará al inicio de sesión.
        }
        
    }
    public function index(){
           $usuario = Auth::user();//Se recupera el usuario que ha iniciado sesión, de esta manera se puede acceder a los atributos del mismo.
           $idUser= $usuario->id;//Se obtiene la id del usuario que ha iniciado se sesión, la 'id' será usada para filtrar las citas que se traen desde la Base de Datos.
           //Join de tablas, aquí se traen los datos relacionados de las tablas: cita, users, cupo y especialidad.
           $citas = DB::table('paciente_cita')
           ->join('users', 'users.id', '=', 'paciente_cita.id_paciente')
           ->join('cita', 'cita.id','=', 'paciente_cita.id_cita')
           ->join('doctor_cita', 'doctor_cita.id_doctor', '=', 'cita.id')
           ->join('doctor_especialidad', 'doctor_especialidad.id_doctor', '=', 'doctor_cita.id_doctor')
           ->join('especialidad', 'especialidad.id', '=', 'doctor_especialidad.id_especialidad')
           ->where('users.id', '=', "$idUser")//Añadiendo 'where', sólo se traerán los datos que concuerden con la id del usuario que ha iniciado sesión.
           ->select('users.nombres', 'cita.hora as hora', 'cita.fecha as fecha', 'especialidad.nombre as especialidad')//Se seleccionan los datos que se traen de cada tabla.
           ->orderBy('cita.fecha')//Se ordena la lista, para que las citas se muestren ordenadas según la fecha de atención.
           ->get();
           
           return view('paciente.index2Paciente', compact("usuario", "citas"));//Se devuelve la vista junto con la variable 'citas' la cual contiene las citas que han sido agendadas por el paciente.
        
    }

    public function agendarCita(){

        $especialidades = Especialidad::All();
        return view('paciente.buscarCita', compact('especialidades'));
    }
  
    public function busquedaCupo(Request $request){
        $especialidad = $request->get('especialidad');
        $cupos = Cupo::aAl();
        return(compact('cupos'));
    }
}
