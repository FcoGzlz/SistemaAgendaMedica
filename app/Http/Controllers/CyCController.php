<?php

namespace App\Http\Controllers;

use App\Cita;
use App\User;
use App\Cupo;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
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

    public function indexCupos(){
        $doctores = User::role('doctor')->get();

        return view('adminCyC.administrarCupos', compact('doctores'));
    }

    public function addCupo(Request $request){


            $fechaInicio = Carbon::parse($request->fechaInicio)->format('y-m-d');
            $fechaFin = Carbon::parse($request->fechaFin)->format('y-m-d');

            $periodo = CarbonPeriod::create($fechaInicio, $fechaFin);

            for ($f=0; $f <$periodo->count() ; $f++) {

               if ($periodo->toArray()[$f]->format('D') == "Mon" && $request->mon == "on") {
                    if ($request->horaAM != null) {
                        $horaAM = Carbon::parse($request->horaAM);
                        for ($h=0; $h <$request->cuposAM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaAM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaAM->addMinutes($request->step);
                        }
                    }

                    if ($request->horaPM != null) {
                        $horaPM = Carbon::parse($request->horaPM);
                        for ($h=0; $h <$request->cuposPM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaPM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaPM->addMinutes($request->step);
                        }
                    }
               }

               if ($periodo->toArray()[$f]->format('D') == "Tue" && $request->tue == "on") {
                if ($request->horaAM != null) {
                    $horaAM = Carbon::parse($request->horaAM);
                    for ($h=0; $h <$request->cuposAM ; $h++) {
                        $cupo = new Cupo();
                        $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                        $cupo->hora= $horaAM->isoFormat('H:m');
                        $cupo->id_doctor=$request->doctor;
                        $cupo->estado = '1';
                        $cupo->save();
                        $horaPM = $horaAM->addMinutes($request->step);
                    }
                }

                if ($request->horaPM != null) {
                    $horaPM = Carbon::parse($request->horaPM);
                    for ($h=0; $h <$request->cuposPM ; $h++) {
                        $cupo = new Cupo();
                        $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                        $cupo->hora= $horaPM->isoFormat('H:m');
                        $cupo->id_doctor=$request->doctor;
                        $cupo->estado = '1';
                        $cupo->save();
                        $horaPM = $horaPM->addMinutes($request->step);
                    }
                }
               }

               if ($periodo->toArray()[$f]->format('D') == "Wed" && $request->wed == "on") {
               if ($request->horaAM != null) {
                        $horaAM = Carbon::parse($request->horaAM);
                        for ($h=0; $h <$request->cuposAM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaAM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaAM->addMinutes($request->step);
                        }
                    }

                    if ($request->horaPM != null) {
                        $horaPM = Carbon::parse($request->horaPM);
                        for ($h=0; $h <$request->cuposPM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaPM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaPM->addMinutes($request->step);
                        }
                    }
               }

               if ($periodo->toArray()[$f]->format('D') == "Thu" && $request->thu == "on") {
            if ($request->horaAM != null) {
                        $horaAM = Carbon::parse($request->horaAM);
                        for ($h=0; $h <$request->cuposAM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaAM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaAM->addMinutes($request->step);
                        }
                    }

                    if ($request->horaPM != null) {
                        $horaPM = Carbon::parse($request->horaPM);
                        for ($h=0; $h <$request->cuposPM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaPM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaPM->addMinutes($request->step);
                        }
                    }
               }

               if ($periodo->toArray()[$f]->format('D') == "Fri" && $request->fri == "on") {
              if ($request->horaAM != null) {
                        $horaAM = Carbon::parse($request->horaAM);
                        for ($h=0; $h <$request->cuposAM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaAM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaAM->addMinutes($request->step);
                        }
                    }

                    if ($request->horaPM != null) {
                        $horaPM = Carbon::parse($request->horaPM);
                        for ($h=0; $h <$request->cuposPM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaPM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaPM->addMinutes($request->step);
                        }
                    }
               }

               if ($periodo->toArray()[$f]->format('D') == "Sat" && $request->sat == "on") {
               if ($request->horaAM != null) {
                        $horaAM = Carbon::parse($request->horaAM);
                        for ($h=0; $h <$request->cuposAM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaAM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaAM->addMinutes($request->step);
                        }
                    }

                    if ($request->horaPM != null) {
                        $horaPM = Carbon::parse($request->horaPM);
                        for ($h=0; $h <$request->cuposPM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaPM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaPM->addMinutes($request->step);
                        }
                    }
               }

               if ($periodo->toArray()[$f]->format('D') == "Sun" && $request->sun == "on") {
             if ($request->horaAM != null) {
                        $horaAM = Carbon::parse($request->horaAM);
                        for ($h=0; $h <$request->cuposAM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaAM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaAM->addMinutes($request->step);
                        }
                    }

                    if ($request->horaPM != null) {
                        $horaPM = Carbon::parse($request->horaPM);
                        for ($h=0; $h <$request->cuposPM ; $h++) {
                            $cupo = new Cupo();
                            $cupo->fecha= $periodo->toArray()[$f]->format('y-m-d');
                            $cupo->hora= $horaPM->isoFormat('H:m');
                            $cupo->id_doctor=$request->doctor;
                            $cupo->estado = '1';
                            $cupo->save();
                            $horaPM = $horaPM->addMinutes($request->step);
                        }
                    }
               }
            }

            return redirect()->route('indexCupos');

    }

}
