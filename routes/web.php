<?php

//use App\Http\Controllers\FormulariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortadaPrincipalController;
use App\Http\Controllers\FormulariosController;
use App\Http\Controllers\IdiomasController;
use App\Http\Controllers\admController;

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
Route::get('/bebidas',[PortadaPrincipalController::class,"bebidas"]);
Route::get('/tapas',[PortadaPrincipalController::class,"tapas"]);

// *************************************************************************
//formularios
Route::get('/quieres_un_evento', [FormulariosController::class, 'querer_evento']);
Route::post('/submit_event_form', [FormulariosController::class, 'submitEventForm']);

Route::get('/trabajo',[FormulariosController::class,"querer_trabajo"]);
Route::post('/submit_trabajo_form', [FormulariosController::class, 'submitrabajo']);

Route::get('/opiniones',[FormulariosController::class,"opiniones"]);
Route::post('/submit_opinion_form', [FormulariosController::class, 'submitOpiniones']);

// *************************************************************************
//calendario de proximos eventos
Route::get('/prox eventos',[PortadaPrincipalController::class,"calendario"]);
//Route::get('/calendario', [CalendarController::class, 'index']);
//Route::post('/evento/nuevo', [CalendarController::class, 'store']);
//Route::post('/evento/editar', [CalendarController::class, 'update']);
//Route::post('/evento/eliminar', [CalendarController::class, 'destroy']);
// *************************************************************************
//lenguaje web
Route::get('/change-language/{language}', [IdiomasController::class, 'cambiarLanguage'])->name('change.language');
// *************************************************************************
// administrador
Route::get('/login',[admController::class,"login"]);
//Route::get('/create-default-user', [admController::class, 'createDefaultUser']);
// Ruta para procesar el inicio de sesión
//Route::post('/login', [admController::class, 'loginsub'])->name('login.submit');
// ****************************************************************
Route::get('admin/events',[admController::class,"eventoss"]);
Route::get('admin/prox_events',[admController::class,"prox_events"]);
Route::get('admin/proveedores',[admController::class,"proveedor"]);
Route::get('admin/home',[admController::class,"home"]);


Route::get('admin/nuevo_evento',[admController::class,"nuevo_evento"]);
Route::get('admin/nuevo_proveedor',[admController::class,"nuevo_proveedor"]);
Route::get('admin/nuevo_prox_evento',[admController::class,"nuevo_proximo_evento"]);

