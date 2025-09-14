<?php

use App\Http\Controllers\TipoCultivoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/cultivos', [TipoCultivoController::class, 'index'])->name('cultivos.index');
Route::get('/cultivos/create', [TipoCultivoController::class, 'create'])->name('cultivos.create');
Route::post('/cultivos', [TipoCultivoController::class, 'store'])->name('cultivos.store');
Route::get('/cultivos/{cultivo}', [TipoCultivoController::class, 'show'])->name('cultivos.show');
Route::get('/cultivos/{cultivo}/edit', [TipoCultivoController::class, 'edit'])->name('cultivos.edit');
Route::put('/cultivos/{cultivo}', [TipoCultivoController::class, 'update'])->name('cultivos.update');
Route::delete('/cultivos/{cultivo}', [TipoCultivoController::class, 'destroy'])->name('cultivos.destroy');