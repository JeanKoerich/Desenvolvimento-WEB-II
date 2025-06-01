<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ClienteController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/clientes/busca', [ClienteController::class, 'busca'])
    ->name('clientes.busca')->middleware(['auth', 'verified']);

Route::get('/livros/busca', [LivroController::class, 'busca'])
    ->name('livros.busca')->middleware(['auth', 'verified']);

Route::resource('/clientes', ClienteController::class)
    ->names('clientes')->middleware(['auth', 'verified']);

Route::resource('/livros', LivroController::class)
    ->names('livros')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
