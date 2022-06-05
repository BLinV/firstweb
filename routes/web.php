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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::view('/','pages/inicio')->name('inicio');
Route::view('producto','pages/producto')->name('producto');
/*Route::get('personas','App\Http\Controllers\PersonasController@index')->name('personas.index');
Route::get('personas/create','App\Http\Controllers\PersonasController@create')->name('personas.create');
Route::post('personas','App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{id}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');*/
Route::view('contacto','pages/contacto')->name('contacto');
//Route::resource('servicios','App\Http\Controllers\PersonasController')->only('index','show');
