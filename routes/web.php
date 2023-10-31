<?php

//use App\Http\Controllers\FormulariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortadaPrincipalController;

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
Route::get('/',[PortadaPrincipalController::class,"inicio"]);
Route::get('/quienes-somos',[PortadaPrincipalController::class,"principal"]);
Route::get('/events',[PortadaPrincipalController::class,"eventos"]);
Route::get('/proveedor',[PortadaPrincipalController::class,"proveedores"]);
Route::get('/menu',[PortadaPrincipalController::class,"carta"]);
// *************************************************************************
// Route::get('/contacto',[FormulariosController::class,"mostrarFormulario"]);
// Route::post('/contacto',[FormulariosController::class,"procesarFormulario"]);
//Route::get('/contact', function () {
//    return view('formulariOpinion');
//});
// *************************************************************************
// api
//Route::get('/', [ApiController::class, 'index']);


