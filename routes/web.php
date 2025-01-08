<?php

use App\Models\Aktor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AktorController;
use App\Http\Controllers\DaftarTontonanController;
use App\Http\Controllers\FilmAktorController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\TransaksiController;
use App\Models\DaftarTontonan;
use App\Models\Transaksi;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function(){
Route::resource('aktor', AktorController::class);
Route::resource('daftar_tontonan', DaftarTontonanController::class);
Route::resource('film_aktor', FilmAktorController::class);
Route::resource('film', FilmController::class);
Route::resource('genre', GenreController::class);
Route::resource('ulasan', UlasanController::class);
Route::resource('transaksi', TransaksiController::class);



});
