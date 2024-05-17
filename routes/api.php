<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\LicenciaController;
use App\Http\Controllers\ObligacioneController;
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
    Route::apiResource('docentes',DocenteController::class);
    Route::get('docentes/search/{value}',[DocenteController::class,'search'])->name('docentes.search');

    Route::apiResource('obligaciones',ObligacioneController::class);
    
    Route::get('obligaciones/docente/{id}',[ObligacioneController::class,'obligacionesDocente'])->name('obligaciones.obligacionesDocente');

    Route::apiResource('licencias',LicenciaController::class);
});



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    
//     return $request->user();
// });
