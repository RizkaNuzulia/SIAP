<?php

use App\Http\Controllers\LoginController;
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
    return view('nav');
});

use App\Http\Controllers\ArsipController;

Route::get('/arsip', [ArsipController::class, 'index']);
Route::get('/arsip/hapus/{kode}', [ArsipController::class, 'hapus']);
Route::get('/arsip/edit/{kode}', [ArsipController::class, 'edit']);
Route::post('/arsip/update', [ArsipController::class, 'update']);
