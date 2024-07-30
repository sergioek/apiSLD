<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\LicenciaController;
use App\Http\Controllers\ObligacioneController;
use App\Http\Controllers\ReporteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('articulos',[ArticuloController::class,'index']);
    Route::get('espacios',[EspacioController::class,'index']);
    Route::get('cargos',[CargoController::class,'index']);

    Route::apiResource('docentes',DocenteController::class);
    Route::get('docentes/search/{value}',[DocenteController::class,'search'])->name('docentes.search');

    Route::apiResource('obligaciones',ObligacioneController::class);
    
    Route::get('obligaciones/docente/{id}',[ObligacioneController::class,'obligacionesDocente'])->name('obligaciones.obligacionesDocente');

    Route::get('obligaciones/edit/{id}',[ObligacioneController::class,'edit'])->name('obligaciones.edit');

    
    Route::get('licencias/{id}',[LicenciaController::class,'index'])->name('licencias.index');

    Route::delete('licencias/{licencia}',[LicenciaController::class,'destroy'])->name('licencias.destroy');

    Route::get('licencias/{idDocente}/{desdeFecha}/{hastaFecha}',[LicenciaController::class,'search'])->name('licencias.search');

    Route::post('licencias',[LicenciaController::class,'store'])->name('licencias.store');

    Route::get('reporte/reporteLicencias/{fechaInicio}/{fechaFinal}',[ReporteController::class,'reporteLicencias'])->name('reporte.reporteLicencias');  

});

  

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    
//     return $request->user();
// });
