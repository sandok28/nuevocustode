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


Route::get('/home','IndexController@index');
Route::get('/','LoginHomeController@index');
Route::get('/Funcionarios','FuncionariosController@vistaFuncionarios');
Route::resource('usuario','UsuariosController');
Route::resource('login','LogController');
Route::get('/logout','LogController@logout');


Route::resource('permiso','PermisosController');
