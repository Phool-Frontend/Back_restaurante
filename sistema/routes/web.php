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

//                  [1 oo ]--- articulo = 1 && categoria = oo
////////////////////////// CATEGORIAS /////////////////////////////////////
Route::get('/', function () { return view('welcome');});
Route::get('categorias/listar','CategoriaController@index');
Route::get('categorias/mostrar/{id}','CategoriaController@show');
Route::post('categorias/guardar','CategoriaController@store');
Route::put('categorias/actualizar','CategoriaController@update');
Route::delete('categorias/eliminar/{id}','CategoriaController@deleteEmployee');
// ACTIVO Y DESACTIVO
Route::get('categorias/activar/{id}','CategoriaController@activar'); 
Route::get('categorias/desactivar/{id}','CategoriaController@desactivar');               


////////////////////////// ARTICULOS ///////////////////////////////////
Route::get('articulos/listar','ArticuloController@index');
Route::get('articulos/mostrar/{filtro}','ArticuloController@show');
Route::post('articulos/guardar','ArticuloController@store');
Route::put('articulos/actualizar','ArticuloController@update');
Route::get('articulos/activar/{id}','ArticuloController@activar'); 
Route::get('articulos/desactivar/{id}','ArticuloController@desactivar');    
Route::delete('articulos/eliminar/{id}','ArticuloController@destroy');

////////////////////////// PLATO /////////////////////////////////////
Route::get('plato/listar','PlatoController@index');                //Listo potman          
Route::get('plato/mostrar/{id}','PlatoController@show');           //Listo potman 
Route::post('plato/guardar','PlatoController@store');              //Listo inserta en blanco como categorias
Route::put('plato/actualizar','PlatoController@update');           //Listo error 500 como categorias     
Route::delete('plato/eliminar/{id}','PlatoController@destroy');    //Listo potsman


////////////////////////// MESA /////////////////////////////////////
Route::get('mesa/listar','MesaController@index');                       //Listo potman    
Route::get('mesa/mostrar/{id}','MesaController@show');                  //Listo potman
Route::post('mesa/guardar','MesaController@store');                     //Listo inserta en blanco como categorias
Route::put('mesa/actualizar','MesaController@update');                  //Listo error 500 como categorias
Route::delete('mesa/eliminar/{id}','MesaController@destroy');           //Listo potman
// ACTIVO Y DESACTIVO
Route::get('mesa/activar/{id}','MesaController@activar');               //Listo potman
Route::get('mesa/desactivar/{id}','MesaController@desactivar');         //Listo potman

////////////////////////// Personal ///////////////////////////////////////////////////////////////////////////////
Route::get('personal/listar','PersonalController@index');               //Listo potman   
Route::get('personal/mostrar/{id}','PersonalController@show');          //Listo potman 
Route::post('personal/guardar','PersonalController@store');             //Listo inserta en blanco como categorias
Route::put('personal/actualizar','PersonalController@update');          //Listo error 500 como categorias
Route::delete('personal/eliminar/{id}','PersonalController@destroy');   //Listo potman

////////////////////////// Plato_pedido ////////////////////////////////////////////////////////////////////////////
Route::get('plato_pedido/listar','Plato_pedidoController@index');                   //Listo potman 
Route::get('plato_pedido/mostrar/{filtro}','Plato_pedidoController@show');          //Listo potman 
Route::post('plato_pedido/guardar','Plato_pedidoController@store');                 //Listo inserta en blanco como categorias
Route::put('plato_pedido/actualizar','Plato_pedidoController@update');              //Listo error 500 como categorias       
Route::delete('plato_pedido/eliminar/{id}','Plato_pedidoController@destroy');       //Listo potman   

////////////////////////// Pedido ////////////////////////////////////////////////////////////////////////////
Route::get('pedido/listar','PedidoController@index');                   //Listo potman
Route::get('pedido/mostrar/{filtro}','PedidoController@show');          //Listo potman 
Route::post('pedido/guardar','PedidoController@store');                 //Listo inserta en blanco como categorias
Route::put('pedido/actualizar','PedidoController@update');              //Listo error 500 como categorias 
Route::delete('pedido/eliminar/{id}','PedidoController@destroy');       //Listo potman 
Route::get('pedido/activar/{id}','PedidoController@activar'); 
Route::get('pedido/desactivar/{id}','PedidoController@desactivar'); 