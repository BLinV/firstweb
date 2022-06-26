<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

Route::view('/','pages/inicio')->name('inicio');
//Personas
Route::get('personas',[PersonasController::class, 'index'])->name('personas.index');
Route::get('personas/registro',[PersonasController::class, 'create'])->name('personas.create');          //Registro personas
Route::get('personas/{id_per}/editar',[PersonasController::class, 'edit'])->name('personas.edit');       //Actualización personas - Carga datos
Route::patch('personas/{id_per}',[PersonasController::class, 'update'])->name('personas.update');        //Actualización personas - Envía datos
Route::post('personas',[PersonasController::class, 'store'])->name('personas.store');                    //Almacenar personas
Route::get('personas/{id_per}', [PersonasController::class, 'show'])->name('personas.show');             //Listar personas
//Route::delete('personas/{persona}','App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');  //Eliminar personas
Route::resource('servicios','App\Http\Controllers\PersonasController')->only('index','show');                       //Mostrar metodos personas

//Productos
Route::view('producto','pages/productos/productos')->name('producto');

//Contacto
Route::view('contacto','pages/contacto')->name('contacto');                                         //Vista de contacto
Route::post('contacto','App\Http\Controllers\ContactoController@store')->name('contacto.store');    //Envío de mensaje

//Logueo
//Route::view('login','pages/login')->name('login'); //Post
Route::view('register','pages/register')->name('register');

