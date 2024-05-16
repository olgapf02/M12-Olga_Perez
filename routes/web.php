<?php

use App\Http\Controllers\AdminEventosGeneralesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortadaPrincipalController;
use App\Http\Controllers\FormulariosController;
use App\Http\Controllers\IdiomasController;
use App\Http\Controllers\admController;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\eventosadminController;
use App\Http\Controllers\AdminproveedoresController;
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
Route::get('/anteriores_eventos',[PortadaPrincipalController::class,"eventos_anteriores"]);
Route::get('/eventos_proximos',[PortadaPrincipalController::class,"prox_eventos"]);


Route::get('/proveedor',[PortadaPrincipalController::class,"proveedores"]);
Route::get('/tiempo',[PortadaPrincipalController::class,"carta"]);
//Route::get('/bebidas',[PortadaPrincipalController::class,"bebidas"]);
//Route::get('/tapas',[PortadaPrincipalController::class,"tapas"]);

// *************************************************************************
//formularios
Route::get('/quieres_un_evento', [FormulariosController::class, 'querer_evento']);
Route::post('/submit_event_form', [FormulariosController::class, 'submitEventForm']);

Route::get('/trabajo',[FormulariosController::class,"querer_trabajo"]);
Route::post('/submit_trabajo_form', [FormulariosController::class, 'submitrabajo']);

Route::get('/opiniones',[FormulariosController::class,"opiniones"]);
Route::post('/submit_opinion_form', [FormulariosController::class, 'submitOpiniones']);

// *************************************************************************
//lenguaje de la web
Route::get('/change-language/{language}', [IdiomasController::class, 'cambiarLanguage'])->name('change.language');
// ****************************************************************
//paguinas del admin
Route::get('admin/prox_events',[admController::class,"prox_events"]);
Route::get('admin/proveedores',[admController::class,"proveedor"]);
Route::get('admin/home',[admController::class,"home"])->name('admin.home');
// ********************************************************************************************************************
// loginadmin
Route::get('/login',[AdminloginController::class,"login"])->name('user');
Route::post('/submit_user', [AdminloginController::class, 'submitlogin'])->name('submit_user');
// ********************************************************************************************************************
//proveedores admin
Route::get('admin/proveedores-generales', [AdminproveedoresController::class, 'indexe'])->name('proveedores.indexe'); // Mostramos todos los eventos
Route::get('admin/proveedores-generales/create', [AdminproveedoresController::class, 'create'])->name('proveedores.create'); // Mostramos un formulario para crear un evento
Route::post('admin/proveedores-generales', [AdminproveedoresController::class, 'store'])->name('proveedores.store'); // Guardamos un nuevo evento
Route::get('admin/proveedores-generales/{proveedorGeneral}/edit', [AdminproveedoresController::class, 'edit'])->name('proveedores.edit'); // Mostramos un formulario con la information del evento
Route::post('admin/proveedores-generales/{proveedorGeneral}', [AdminproveedoresController::class, 'update'])->name('proveedores.update'); // Actualizamos el evento
Route::get('admin/proveedores-generales/{proveedorGeneral}/delete', [AdminproveedoresController::class, 'destroy'])->name('proveedores.destroy'); // Borramos el evento
// ********************************************************************************************************************
//eventos admin
Route::get('admin/eventos-generales', [AdminEventosGeneralesController::class, 'index'])->name('eventosGenerales.index'); // Mostramos todos los eventos
Route::get('admin/eventos-generales/create', [AdminEventosGeneralesController::class, 'create'])->name('eventosGenerales.create'); // Mostramos un formulario para crear un evento
Route::post('admin/eventos-generales', [AdminEventosGeneralesController::class, 'store'])->name('eventosGenerales.store'); // Guardamos un nuevo evento
Route::get('admin/eventos-generales/{eventoGeneral}/edit', [AdminEventosGeneralesController::class, 'edit'])->name('eventosGenerales.edit'); // Mostramos un formulario con la information del evento
Route::post('admin/eventos-generales/{eventoGeneral}', [AdminEventosGeneralesController::class, 'update'])->name('eventosGenerales.update'); // Actualizamos el evento
Route::get('admin/eventos-generales/{eventoGeneral}/delete', [AdminEventosGeneralesController::class, 'destroy'])->name('eventosGenerales.destroy'); // Borramos el evento


