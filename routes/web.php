<?php

use App\Http\Controllers\PerkaraController;
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
    return view('welcome');
});

Route::get('/perkara/tambah', [PerkaraController::class, 'tambah'])->name('perkara.tambah');
Route::get('/perkara/index', [PerkaraController::class, 'index'])->name('perkara.index');

Route::view('/home', 'home')->name('arsyss.home');

// Route::view('/perkara/tambah', 'tambah_perkara')->name('perkara.tambah');