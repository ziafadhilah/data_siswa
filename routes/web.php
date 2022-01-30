<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SiswaController;
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
    return view('welcome');
});

//Jurusan
Route::prefix('/jurusan')->group(function () {
    Route::get('/', [JurusanController::class, 'index']);
    Route::get('/create', [JurusanController::class, 'create']);
    Route::post('/create', [JurusanController::class, 'store']);
    Route::get('/{id}', [JurusanController::class, 'edit']);
    Route::delete('/{id}', [JurusanController::class, 'destroy']);
    Route::patch('/{id}', [JurusanController::class, 'update']);
});

//Siswa
Route::prefix('/siswa')->group(function () {
    Route::get('/', [SiswaController::class, 'index']);
    Route::get('/create', [SiswaController::class, 'create']);
    Route::post('/create', [SiswaController::class, 'store']);
    Route::get('/{id}', [SiswaController::class, 'edit']);
    Route::delete('/{id}', [SiswaController::class, 'destroy']);
    Route::patch('/{id}', [SiswaController::class, 'update']);
});
