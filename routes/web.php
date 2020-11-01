<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/PuntoReciclaje', 'puntos_rController@index3');

Route::get('/PuntoReciclaje/CrearPunto', "puntos_rController@create");
Route::post('/AlmacenarPunto', "puntos_rController@store");
Route::get('/PuntoReciclaje/Enlistar', 'puntos_rController@index');
Route::get('/PuntoReciclaje/Editar', 'puntos_rController@index2');
Route::get('/EditarPunto/{id_pr}',  "puntos_rController@MuestraEdicion");
Route::post('/EditarPunto/guardaEdicion', "puntos_rController@guardaEdicion");
Route::get('/EliminaPunto/{id_pr}',  "puntos_rController@borra");

Route::get('/Recolector', 'recolectoresController@index3');

Route::get('/Recolector/CrearRecolector', "recolectoresController@create");
Route::post('/AlmacenarRecolector', "recolectoresController@store");
Route::get('/Recolector/Enlistar', 'recolectoresController@index');
Route::get('/Recolector/Editar', 'recolectoresController@index2');
Route::get('/EditarRecolector/{id_r}',  "recolectoresController@MuestraEdicion");
Route::post('/EditarRecolector/guardaEdicionR', "recolectoresController@guardaEdicionR");
Route::get('/EliminaRecolector/{id_r}',  "recolectoresController@borra");

Route::get('/Detalle', 'detalleController@index3');

Route::get('/Detalle/CrearRelacion', "detalleController@create");
Route::post('/AlmacenarRelacion', "detalleController@store");
Route::get('/Detalle/Enlistar', 'detalleController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
