<?php

use App\Http\Controllers\AltasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PuntosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UniversidadesController;

Route::get('/home', HomeController::class);

Route::get('/locales', LocalesController::class);

Route::get('/universidades', UniversidadesController::class);

Route::get('/puntos', PuntosController::class);

Route::get('/altas', AltasController::class);

Route::get('/login', LoginController::class);

Route::post('/locales', [AltasController::class, 'store'])->name('AltasDepa.store');

Route::get('registros/{local}', [RegistroController::class, 'show'])->name('registros.show');

Route::get('registros/{local}/edit', [RegistroController::class, 'edit'])->name('registros.edit');

Route::put('registros/{local}', [RegistroController::class, 'update'])->name('registros.update');

Route::get('registros/{local}', [RegistroController::class, 'show'])->name('registros.show');

Route::delete('registros/{local}', [RegistroController::class, 'destroy'])->name('registros.destroy');

Route::get('/showall', [RegistroController::class, 'index'])->name('registros.index');
