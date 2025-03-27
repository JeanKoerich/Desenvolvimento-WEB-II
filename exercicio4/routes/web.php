<?php

use App\Http\Controllers\CombustivelController;
use App\Http\Controllers\SaudeController;
use App\Http\Controllers\SonoController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/saude', [SaudeController::class, 'saude']);
Route::get('/saude/calcular', [SaudeController::class, 'calcular']);

Route::get('/sono', [SonoController::class, 'sono']);
Route::get('/sono/calcular', [SonoController::class, 'calcular']);

Route::get('/combustivel', [CombustivelController::class, 'combustivel']);
Route::get('/combustivel/calcular', [CombustivelController::class, 'calcular']);