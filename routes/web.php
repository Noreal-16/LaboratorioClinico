<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\PedidoController;


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
Route::middleware(['auth:sanctum', 'verified'])->get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::middleware(['auth:sanctum', 'verified'])->post('categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::middleware(['auth:sanctum', 'verified'])->get('categorias/show/{id}', [CategoriaController::class, 'show'])->name('categorias.show');

/**
 * Direcciones Pacientes
 */
Route::middleware(['auth:sanctum', 'verified'])->get('pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
Route::middleware(['auth:sanctum', 'verified'])->post('pacientes', [PacienteController::class, 'store'])->name('pacientes.store');
/**
 * Direcciones Medico
 */
Route::middleware(['auth:sanctum', 'verified'])->get('medicos', [MedicoController::class, 'index']);
/**
 * Examenes
 */
Route::middleware(['auth:sanctum', 'verified'])->get('examenes', [ExamenController::class, 'index']);
/**
 * Pedidos
 */
Route::middleware(['auth:sanctum', 'verified'])->get('pedidos', [PedidoController::class, 'index']);
