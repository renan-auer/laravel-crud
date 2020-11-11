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

Route::get('/clientes', 'ClienteController@index')->name('cliente.index');
Route::get('/cliente/novo', 'ClienteController@create');
Route::post('/clientes/novo', 'ClienteController@store')->name('novo-cliente');

