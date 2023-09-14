<?php

use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;

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

//get pretende 2 parametri: URI, callback (la risposta alla richiesta)
Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/chi-siamo', [PublicController::class,'about_us'])->name('about');
Route::get('/dove-siamo', [PublicController::class,'where'])->name('where');

Route::get('/movies', [MovieController::class, 'index'])->name('index.movies');
Route::get('/shows', [ShowController::class, 'index'])->name('index.shows');


//rotta parametrica
Route::get('/movies/detail/{title}', [MovieController::class, 'show'])->name('show.movies');
Route::get('/shows/detail/{title}', [ShowController::class, 'show'])->name('shows');

