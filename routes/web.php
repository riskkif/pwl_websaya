<?php

use App\Http\Controllers\resmhsController;
use App\Http\Controllers\resprodiController;
use App\Http\Controllers\resprofilController;
use App\Http\Controllers\utsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\prodiController;

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
    Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');

    Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
    Route::get('/mahasiswa/create', [mahasiswaController::class, 'create']);
    Route::get('/mahasiswa/update', [mahasiswaController::class, 'update']);
    Route::get('/mahasiswa/destroy', [mahasiswaController::class, 'destroy']);

    Route::get('/prodi', [prodiController::class, 'index']);
    Route::get('/prodi/create', [prodiController::class, 'create']);
    Route::get('/prodi/update', [prodiController::class, 'update']);
    Route::get('/prodi/destroy', [prodiController::class, 'destroy']);

    Route::get('/uts', [utsController::class, 'index'])->name('uts');
    
    Route::resource('resmhs', resmhsController::class);

    Route::resource('resmhs/create', resmhsController::class);

    Route::resource('resprodi', resprodiController::class);

    Route::resource('resprofil', resprofilController::class);

    Route::get('/mhs/show', [mhsController::class, 'show'])->name('mhs-show');

    Route::get('/mhs/perulangan', [mhsController::class, 'perulangan'])->name('mhs-perulangan');

    Route::get('/', function(){
        $title = "websaya.com";
        $slug = "home";
        $konten = "Ini adalah websaya.com";
        return view('konten.home', compact('title','slug', 'konten'));
    });

    Route::get('/home', function(){
        $title = "websaya.com";
        $slug = "home";
        $konten = "Ini adalah websaya.com";
        return view('konten.home', compact('title','slug','konten'));
    });
    Route::get('/profil', function(){
        $title = "websaya.com";
        $slug = "profil";
        return view('konten.profil', compact('title','slug'));
    });


