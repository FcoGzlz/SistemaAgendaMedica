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
Route::get('/', 'PacienteController@inicio');



Auth::routes();

Route::match(['get', 'post'], '/validar', 'PacienteController@validar')->name('validar');
Route::get('indexPaciente', 'PacienteController@index')->name('indexPaciente');
// Route::get('/login', 'Seguridad\IndexController@login') -> name ( 'login' ); 
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/idexuserlog', 'Seguridad\LoginController@indexuserlog') -> name ( 'indexuserlog' ); 



Route::get('/administradorUsuarios', 'UsuariosController@index')->name('AdminUsers');

Route::post('/crearUsuario', 'UsuariosController@create')->name('addAdminCyC');
Route::post('/registro', 'PacienteController@register')->name('registro');

Route::get('/agendarCita', 'PacienteController@agendarCita')->name('agendarCita');
// Route::post('/validar', 'PacienteController@validar')->name('validar');



