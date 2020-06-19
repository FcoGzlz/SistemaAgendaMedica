<?php

namespace App\Http\Controllers;

use App\Cita;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CyCController extends Controller
{
    public function index(){
        return view('adminCyC.administrarCitas');
    }

    //Administración de Citas
    public function indexCitas(){
        $fechaHoy = Carbon::now()->toDateString();
        $citas = DB::table('cita')
        ->join('users', 'users.id', '=', 'cita.id_paciente')
        ->join('cupo', 'cupo.id', '=', 'cita.id_cupo')
        ->select('users.rut as rut', 'users.nombres as nombres', 'users.apellidoPaterno as apellidoPaterno','users.apellidoMaterno as apellidoMaterno','users.genero','users.telefono', 'cupo.hora as hora', 'cita.id as id' )
        ->where('cupo.fecha', '=', "$fechaHoy")
        ->where('cita.id_estado', '=', '1')
        ->get();

        // dd($fechaHoy);
        return view('adminCyC.administrarCitas', compact('citas'));
    }

    public function confirmarCita(Request $request){
        $cita = Cita::findOrFail($request->idCita);
        $cita->id_estado = '2';
        $cita->save();

        return redirect()->route('indexCyC');
    }
}
