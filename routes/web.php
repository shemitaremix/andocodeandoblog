<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UsuarioController;

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
    return view('inicio');
})->middleware('auth');


// Index
Route::get('/inicio', function() {
    return view('usuarios.index');
})->name('index');

//registrarse
Route::get('/login', [loginController::class, 'login'])->middleware('guest')->name('login.index');
Route::post('/login', [loginController::class, 'store'])->name('login.store');//recibe los datos del formulario de login

//inicio de sesion
Route::post('/login', [loginController::class, 'storeinicio'])->middleware('guest')->name('login.storeinicio');//ruta de inicio de sesion del usuario

//cierre de sesion del usuario
Route::get('/salir', [loginController::class, 'salir'])->middleware('auth')->name('login.salir');//ruta de cierre de sesion del usuario

/**
 * Ruta para enviar enlace de verificacion de correo
 */
Route::get('/verificarUsuario', [UsuarioController::class, 'verificarUsuario'])->name('verificar.usuario');
