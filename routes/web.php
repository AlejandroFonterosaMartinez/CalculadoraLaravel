<?php
use App\Http\Controllers\CalculadoraController;

Route::get('/', [CalculadoraController::class, 'index']);
Route::post('/', [CalculadoraController::class, 'calcular'])->name('calcular');
