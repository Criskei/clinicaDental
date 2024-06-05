<?php

use App\Http\Controllers\DentistaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pacientes', [PacienteController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('paciente.index');

Route::get('/paciente/{id}', [PacienteController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('paciente.ver');

Route::get('/pacienteEdit/{id}', [PacienteController::class, 'edit'])
    ->middleware(['auth', 'verified'])->name('paciente.editar');

Route::get('/dentistas', [DentistaController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dentista.index');

Route::get('/productos', [ProductoController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('producto.index');

Route::get('/proveedores', [ProveedorController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('proveedor.index');

require __DIR__ . '/auth.php';
