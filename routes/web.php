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

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/login', 'Seguridad\IndexController@login') -> name ( 'login' ); 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/idexuserlog', 'Seguridad\LoginController@indexuserlog') -> name ( 'indexuserlog' ); 




