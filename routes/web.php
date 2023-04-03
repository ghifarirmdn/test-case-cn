<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PegawaiController::class, 'index']);
Route::get('/create', [PegawaiController::class, 'create']);
Route::post('/insert', [PegawaiController::class, 'insert']);
Route::get('/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/update/{id}', [PegawaiController::class, 'update']);
Route::get('/delete/{id}', [PegawaiController::class, 'delete']);