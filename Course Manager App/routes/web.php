<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;
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

Route::get('/', function () {
    return view('Kursus');
});

//kursus
Route::get('Kursus', [KursusController::class, 'index']);
Route::get('Kursus/create', [KursusController::class, 'create']);
Route::post('Kursus', [KursusController::class, 'store']);
Route::get('Kursus/{kursus}', [KursusController::class, 'show']);
Route::get('Kursus/{kursus}/edit', [KursusController::class, 'edit']);
Route::put('Kursus/{kursus}', [KursusController::class, 'update']);
Route::delete('Kursus/{kursus}', [KursusController::class, 'destroy']);

//materi
Route::get('Materi/create', [MateriController::class, 'create']);
Route::post('Materi', [MateriController::class, 'store']);
Route::get('Materi/{materi}', [MateriController::class, 'show']);
Route::get('Materi/{materi}/edit', [MateriController::class, 'edit']);
Route::put('Materi/{materi}', [MateriController::class, 'update']);
Route::delete('Materi/{materi}', [MateriController::class, 'destroy']);
