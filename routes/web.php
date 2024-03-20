<?php

use App\Http\Controllers\PerkaraController;
use App\Models\Perkara;
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
Route::delete('/perkara/{perkara}', [PerkaraController::class, 'hapus'])->name('perkara.hapus');
Route::get('/perkara/edit/{id}', [PerkaraController::class, 'edit'])->name('perkara.edit');
Route::put('/perkara/ubah/{id}', [PerkaraController::class, 'ubah'])->name('perkara.ubah');

// Route::delete('/perkara/{perkara}', function (Perkara $perkara) {
//     $perkara->delete();

//     return redirect()->route('perkara.index')->with('success','Perkara berhasil dihapus');
// })->name('perkara.hapus');

Route::view('/home', 'home')->name('arsyss.home');

// Route::view('/perkara/tambah', 'tambah_perkara')->name('perkara.tambah');