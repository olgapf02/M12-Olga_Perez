<?php

use App\Http\Controllers\FormulariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaMundoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HolaMundoController::class,"inicio"]);
Route::get('/quienes-somos',[HolaMundoController::class,"principal"]);
Route::get('/events',[HolaMundoController::class,"eventos"]);
Route::get('/proveedor',[HolaMundoController::class,"proveedores"]);
// *************************************************************************
 Route::get('/contacto',[FormulariosController::class,"mostrarFormulario"]);
 Route::post('/contacto',[FormulariosController::class,"procesarFormulario"]);
//Route::get('/contact', function () {
//    return view('formulariOpinion');
//});
