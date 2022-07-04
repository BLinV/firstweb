<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContactoController;

Route::view('/','pages/inicio')->name('inicio');
//Personas
Route::resource('personas',PersonasController::class)
    ->names('personas');
    //->middleware('auth');
/*Route::get('personas',[PersonasController::class, 'index'])->name('personas.index');
Route::get('personas/registro',[PersonasController::class, 'create'])->name('personas.create');         //Registro personas
Route::get('personas/{id_per}/editar',[PersonasController::class, 'edit'])->name('personas.edit');      //Actualización personas - Carga datos
Route::patch('personas/{id_per}',[PersonasController::class, 'update'])->name('personas.update');       //Actualización personas - Envía datos
Route::post('personas',[PersonasController::class, 'store'])->name('personas.store');                   //Almacenar personas
Route::get('personas/{id_per}', [PersonasController::class, 'show'])->name('personas.show'); */           //Listar personas
//Route::delete('personas/{persona}','App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');  //Eliminar personas

//Clientes
Route::resource('clientes',ClientesController::class)
    ->names('clientes');

//Productos
Route::view('producto','pages/productos/productos')
    ->name('producto')
    ->middleware('auth');

//Contacto
Route::view('contacto','pages/contacto')                                         //Vista de contacto
    ->name('contacto');
Route::post('contacto',[ContactoController::class, 'store'])->name('contacto.store');    //Envío de mensaje

//Logueo
//Route::view('login','pages/login')->name('login'); //Post
Route::view('register','pages/register')
    ->name('register');

//Deshabilitar registro de usuarios
//Auth::routes(); //Ubicar ruta de formulario de login/registro
Auth::routes(['register'=>true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
