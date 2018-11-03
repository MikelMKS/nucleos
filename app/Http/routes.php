<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Llamada de Altas
Route::get('/altausuario','c_usuarios@altausuarios');
Route::get('/altaadep','c_area_de_produccion@altaareadeproduccion');
Route::get('/altaua','c_ubicacion_almacen@altaubicacionalmacen');
Route::get('/altaprov','c_proveedor@altaproveedor');
Route::get('/altatdn','c_tipo_de_nucleo@altatipodenucleo');
Route::get('/altacos','c_costos@altacostos');
Route::get('/altaprod','c_produccions@altaproduccion');
Route::get('/altaalm','c_almacen@altaalmacen');
//Realiza Alta
Route::POST('/insertausuario','c_usuarios@insertausuario')->name('insertausuario');
Route::POST('/insertaareadeproduccion','c_area_de_produccion@insertaareadeproduccion')->name('insertaareadeproduccion');
Route::POST('/insertaubicacionalmacen','c_ubicacion_almacen@insertaubicacionalmacen')->name('insertaubicacionalmacen');
Route::POST('/insertaproveedor','c_proveedor@insertaproveedor')->name('insertaproveedor');
Route::POST('/insertatipodenucleos','c_tipo_de_nucleo@insertatipodenucleos')->name('insertatipodenucleos');
Route::POST('/insertacostos','c_costos@insertacostos')->name('insertacostos');
Route::POST('/insertaproduccion','c_produccions@insertaproduccion')->name('insertaproduccion');
Route::POST('/insertaalmacen','c_almacen@insertaalmacen')->name('insertaalmacen');
//Llamada de Consultas
Route::get('/reporteusuarios','c_usuarios@reporteusuarios');
//Desactivacion
Route::get('/eliminausuarios/{id_usuario}','c_usuarios@eliminausuarios')->name('eliminausuarios');
//Llamada modificacion 
Route::get('/modificausuarios/{id_usuario}','c_usuarios@modificausuarios')->name('modificausuarios');
//Realiza Modificacion
Route::POST('/actualizausuarios','c_usuarios@actualizausuarios')->name('actualizausuarios');
//Restauracion
Route::get('/restaurausuarios/{id_usuario}','c_usuarios@restaurausuarios')->name('restaurausuarios');
//Eliminacion
Route::get('/efisicausuarios/{id_usuario}','c_usuarios@efisicausuarios')->name('efisicausuarios');