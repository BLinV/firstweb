<?php
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','pages/inicio')->name('inicio');

Route::view('personas','pages/personas/personas')->name('personas');
Route::get('personas','App\Http\Controllers\PersonasController@index')->name('personas.index');
Route::get('personas/registro','App\Http\Controllers\PersonasController@create')->name('personas.create');
Route::post('personas','App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{id_per}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
Route::resource('servicios','App\Http\Controllers\PersonasController')->only('index','show');

Route::view('producto','pages/productos/productos')->name('producto');

Route::view('contacto','pages/contacto')->name('contacto');

//Route::view('login','pages/login')->name('login'); //Post
Route::view('register','pages/register')->name('register');
