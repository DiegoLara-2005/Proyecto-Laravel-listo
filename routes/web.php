<?php

use App\Http\Controllers\LibroController;

// Ruta principal que muestra formulario y lista
Route::get('/', [LibroController::class, 'index']);

// Ruta para guardar libros
Route::post('/libros', [LibroController::class, 'store'])->name('libros.store');