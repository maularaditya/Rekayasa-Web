<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Controller Mahasiswa
Route::get('/mahasiswa/index', [MahasiswaController::class,'index_mahasiswa']);
Route::get('/mahasiswa/read', [MahasiswaController::class,'mahasiswa_read']);
Route::post('/mahasiswa/create', [MahasiswaController::class,'mahasiswa_create']);
Route::put('/mahasiswa/update', [MahasiswaController::class, 'mahasiswa_update']);
Route::delete('/mahasiswa/delete/{nim}', [MahasiswaController::class, 'mahasiswa_destroy']);

//Controller Dosen
Route::get('/dosen/index', [DosenController::class,'index_dosen']);
Route::get('/dosen/read', [DosenController::class,'dosen_read']);
Route::post('/dosen/create', [DosenController::class,'dosen_create']);
Route::put('/dosen/update', [DosenController::class, 'dosen_update']);
Route::delete('/dosen/delete/{nidn}', [DosenController::class, 'dosen_destroy']);