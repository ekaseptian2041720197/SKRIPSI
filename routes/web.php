<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\NotifikasiController;
use App\Models\siswa;

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

//Route Landing page
Route::get('/', [HomeController::class, 'home']);

//Route form
Route::get('/form', [FormController::class, 'form']);

//Route Login
Route::get('/login', [LoginController::class, 'login'])->name('login');

//Route Notifikasi
Route::get('/notif', [NotifikasiController::class, 'notif'])->name('notif');

//Route siswa
Route::get('/siswa', [siswaController::class, 'siswa'])->name('siswa');