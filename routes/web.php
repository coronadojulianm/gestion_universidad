<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\ProfesorController;

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

Route::middleware(['auth', 'role:administrador'])->group(function () {
    Route::resource('estudiantes', EstudianteController::class);
    Route::resource('profesores', ProfesorController::class);
    Route::resource('cursos', CursoController::class);
    Route::resource('matriculas', MatriculaController::class);
    // ... otras rutas
});


Route::middleware(['auth', 'role:profesor'])->group(function () {
    // Rutas solo para profesores
    Route::resource('cursos', CursoController::class);
    // ... otras rutas
});

Route::middleware(['auth', 'role:estudiante'])->group(function () {
    // Rutas solo para estudiantes
    Route::resource('matriculas', MatriculaController::class);
    // ... otras rutas
});
