<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuario = Auth::user();
        $rol = $usuario->roles->implode('name', ', ');


        switch ($rol) {
            case 'superAdmin':
                # code...
                break;

            case 'administradorCyC':
                # code...
                break;
            case 'administradorUsuarios':
                # code...
                break;
            case 'paciente':
                # code...
                break;
        }
        return view('home');
    }
}
