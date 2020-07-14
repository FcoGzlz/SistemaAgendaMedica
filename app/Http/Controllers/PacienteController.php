<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Cita;
use App\Cupo;
use App\Especialidad;
use Carbon\Carbon;
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

        $citas = User::findOrFail($paciente->id)->citas->where('id_estado', 1);
           return view('paciente.index2Paciente', compact("citas"));//Se devuelve la vista junto con la variable 'citas' la cual contiene las citas que han sido agendadas por el paciente.

    }

    public function citasPendientes(){
        $paciente = Auth::user();
        $citas = Cita::where('id_paciente', "$paciente->id")->where('id_estado', 1)
        ->get();
        return view('paciente.citasPendientes', compact('citas'));
    }

    public function agendarCita($id){
       $cita = new Cita;
       $cita->id_paciente = Auth::user()->id;
       $cita->id_cupo = $id;
       $cita->id_estado = 1;
       $cita->save();
       $cupo = Cupo::findOrFail($id);
       $cupo->estado = 0;
       $cupo->save();

       return redirect()->route('citasPendientes');
    }

    public function buscarCupo(Request $request){
        $espec = Especialidad::All();
        if ($request->especialidad != null) {
            $especialidad = Especialidad::where('nombre', $request->especialidad)->get();
            if ($request->fecha != Carbon::now()->format('y-m-d')) {
                $fecha=Carbon::parse($request->fecha)->format('Y-m-d');
                return view('paciente.buscarCita', compact('especialidad', 'fecha', 'espec'));
            }

        }else{
            $fecha=Carbon::parse($request->fecha)->format('Y-m-d');
            $especialidad = Especialidad::where('nombre', $request->especialidad);
            return view('paciente.buscarCita', compact('especialidad','fecha', 'espec'));
        }


    }

    public function cancelarCita($id){
        $cita = Cita::find($id);
        $cupo = Cupo::find($cita->cupo->id);
        $cupo->estado = 1;
        $cita->id_estado = 3;
        $cita->save();
        $cupo->save();

        return redirect()->route('citasPendientes');
    }
}
