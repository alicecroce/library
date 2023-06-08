<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
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


//->step1: in resources->views crea la cartella books e quindi components e template
//->step2: assicurati che TUTTE le rotte abbiano la desinenza books.
//->step3: settale nel Controller
//step4: crea le view

//Route::get('/', [PublicController::class, 'homepage'])->name('books.homepage');

Route::get('/book', [PublicController::class, 'index'])->name('books.index');
Route::get('/book/crea', [PublicController::class, 'create'])->name('books.create'); //FORM
Route::post('/book/salva', [PublicController::class, 'store'])->name('books.store'); //lo store è la chiamata in post
Route::get('/book/{book}/dettagli', [PublicController::class, 'show'])->name('books.show');


Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/crea', [CategoryController::class, 'create'])->name('category.crea'); //FORM
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store'); //lo store è la chiamata in post
Route::get('/category/{category}/detail', [CategoryController::class, 'show'])->name('category.show');
