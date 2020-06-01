<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{
    public function index()
    {
       $adminsCyC = User::role('administradorCyC')->get();
        return view('adminUsuarios/ambienteAdminUsers', compact('adminsCyC'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
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

    public function create(Request $data)
    {
        $adminCyC = User::create(
            [
                'nombres' => $data['nombres'],
                'rut' => $data['rut'],
                'apellidoPaterno' => $data['apellidoPaterno'],
                'apellidoMaterno' => $data['apellidoMaterno'],
                'genero' => $data['genero'],
                'telefono' => $data['telefono'],
                'email' => $data['email'],
                'password' => bcrypt($data['root']),
            ]
        );

        $adminCyC ->assignRole('administradorCyC');
 
    }

    public function delete(Request $id){
        $usuario = User::findorFail($id);
        $usuario -> delete();
    }
}
