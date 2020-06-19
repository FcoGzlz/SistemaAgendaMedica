<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('auth/login');
// });
// Route::get('/', function () {
//     return view('index');
// });

use App\Http\Controllers\PacienteController;

Route::get('/', 'PacienteController@inicio');



Auth::routes();

Route::match(['get', 'post'], '/validar', 'PacienteController@validar')->name('validar');
Route::get('indexPaciente', 'PacienteController@index')->name('indexPaciente');
// Route::get('/login', 'Seguridad\IndexController@login') -> name ( 'login' );
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/idexuserlog', 'Seguridad\LoginController@indexuserlog') -> name ( 'indexuserlog' );

//INICIO RUTAS ADMINISTRADOR DE USUARIOS
//Index de Administrador de Usuarios
Route::get('/administrarUsuarios', 'UsuariosController@index')->name('indexAdminUsers');

//Administrar Doctores
Route::post('/agregarDoctor', 'UsuariosController@createDoctor')->name('addDoctor');
Route::get('/administrarDoctores', 'UsuariosController@indexDoctores')->name('AdminDoctors');

//Administrar Administradores de Cupos y Citas
//Index de Administradores de Cupos y Citas
Route::get('/administradorUsuarios', 'UsuariosController@indexAdminsCyC')->name('AdminUsersCyC');
//Agregar un Administrador de Cupos y Citas
Route::post('/agregarAdministradorCyC', 'UsuariosController@createAdminCyC')->name('addAdminCyC');

// Route::post('/validar', 'PacienteController@validar')->name('validar');


//FIN RUTAS ADMINISTRADOR DE USUARIOS


Route::post('/registro', 'PacienteController@register')->name('registro');

Route::get('/agendarCita', 'PacienteController@agendarCita')->name('agendarCita');


//INICIO RUTAS ADMINISTRADOR DE CUPOS Y CITAS
Route::get('/indexCyC', 'CyCController@indexCitas')->name('indexCyC');

//Rutas de administración de citas
Route::post('/confirmarCita', 'CyCController@confirmarCita')->name('confimarCita');
//FIN RUTAS ADMINISTRADOR DE CUPOS Y CITAS
