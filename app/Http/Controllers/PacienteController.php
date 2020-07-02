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
           $paciente = Auth::user();//Se recupera el usuario que ha iniciado sesión, de esta manera se puede acceder a los atributos del mismo.

        $citas = User::findOrFail($paciente->id)->citas;
           return view('paciente.index2Paciente', compact("citas"));//Se devuelve la vista junto con la variable 'citas' la cual contiene las citas que han sido agendadas por el paciente.

    }

    public function citasPendientes(){
        $paciente = Auth::user();
        $citas = Cita::where('id_paciente', "$paciente->id")
        ->get();
        return view('paciente.citasPendientes', compact('citas'));
    }

    public function agendarCita(){

        $cupos = Cupo::All();
        return view('paciente.buscarCita', compact('cupos'));
    }

    public function busquedaCupo(Request $request){
        $especialidad = $request->get('especialidad');
        $cupos = Cupo::All();
        return(compact('cupos'));
    }
}
