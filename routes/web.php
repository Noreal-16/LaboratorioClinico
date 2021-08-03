<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\CategoriaController;


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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('admin.index');
})->name('dashboard');
/**
 * Direcciones Laboratorio
 */
Route::middleware(['auth:sanctum', 'verified'])->get('laboratorios', [LaboratorioController::class, 'index']);
/**
 * Direcciones Categoria
 */
Route::middleware(['auth:sanctum', 'verified'])->get('categorias', [CategoriaController::class, 'index']);
/**
 * Direcciones Pacientes
 */
Route::middleware(['auth:sanctum', 'verified'])->get('pacientes', [PacienteController::class, 'index']);
