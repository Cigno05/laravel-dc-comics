<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ComicController;
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
Route::get('/', [PageController::class, 'home'])->name('home');

// INDEX
Route::get('/comics', [ComicController::class,'index'])->name('comics.index');

// CREATE (che va prima di show per evitare conflitto)
Route::get('/comics/create', [ComicController::class,'create'])->name('comics.create');

// SHOW
Route::get('/comics/{comic}', [ComicController::class,'show'])->name('comics.show');

// STORE (con metodo pos ainvece di get)
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

