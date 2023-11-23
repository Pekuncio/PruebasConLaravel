<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/club", function(){
    return '<h1>Estamos en la pagina del club</h1>';
});

//EQUIPOS
Route::get("/equipo", function(){
    return '<h2>Devolucion de los equipos</h2>';
});

Route::get('/equipo/{id}', [EquipoController::class, 'mostrarEquipo']);
use App\Http\Controllers\UserController;
 
Route::get('/equipos', [EquipoController::class, 'mostrarEquipos']);

Route::get('/jugador', [JugadorController::class, 'mostrarJugadores']);

Route::get('/jugador/{id}', [JugadorController::class, 'mostrarJugador']);

Route::get('/jugador/nombre/{nombre}', [JugadorController::class, 'mostrarJugadorNombre']);

Route::post('/jugadorIn', [JugadorController::class, 'insertJugador']);

