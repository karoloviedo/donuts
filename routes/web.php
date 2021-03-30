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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//CLIENTE

Route::get('/home', 'ClienteController@index')->name('clientes.index');

Route::get('Clientes/create', 'ClienteController@create')->name('clientes.create');

Route::get('Clientes/store', 'ClienteController@store')->name('clientes.store');

Route::get('Clientes/edit/{id}', 'ClienteController@edit')->name('clientes.edit');

Route::put('Clientes/{id}', 'ClienteController@update')->name('clientes.update');

Route::delete('Clientes/{id}', 'ClienteController@destroy')->name('clientes.destroy');

//PEDIDOS

Route::get('Pedidos/index', 'PedidoController@index')->name('pedidos.index');

Route::get('Pedidos/create', 'PedidoController@create')->name('pedidos.create');

Route::get('Pedidos/store', 'PedidoController@store')->name('pedidos.store');

Route::delete('Pedidos/{id}', 'PedidoController@destroy')->name('pedidos.destroy');
