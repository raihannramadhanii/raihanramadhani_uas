<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\penitipanController;

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
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

// Route::get('/t', function () {
//     return view('pendaftaran.index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data Pendaftaran
Route::get('/pendaftaran', [pendaftaranController::class, 'index']);
Route::get('/pendaftaran/tambah', [pendaftaranController::class, 'create']);
Route::post('/pendaftaran', [pendaftaranController::class, 'store']);
Route::get('/pendaftaran/edit/{id}', [pendaftaranController::class, 'edit'])->name('pendaftaran.edit');
Route::put('/pendaftaran/{id}', [pendaftaranController::class, 'update']);
Route::delete('/pendaftaran/{id}', [pendaftaranController::class, 'destroy']);

// Data Penitipan
Route::get('/penitipan', [penitipanController::class, 'index']);
Route::get('/penitipan/tambah', [penitipanController::class, 'create']);
Route::post('/penitipan', [penitipanController::class, 'store']);
Route::get('/penitipan/edit/{id}', [penitipanController::class, 'edit'])->name('penitipan.edit');
Route::put('/penitipan/{id}', [penitipanController::class, 'update']);
Route::delete('/penitipan/{id}', [penitipanController::class, 'destroy']);

