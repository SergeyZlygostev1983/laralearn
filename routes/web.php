<?php

use App\Http\Controllers\CarsCatalog;
use App\Http\Controllers\Posts;
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

Route::get('/posts', [Posts::class, 'index']);
Route::get('/posts/create', [Posts::class, 'create']);
Route::get('/posts/{id}', [Posts::class, 'show'])->name('posts.show');
Route::post('/posts', [Posts::class, 'store']);

Route::get('/cars', [CarsCatalog::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarsCatalog::class, 'create'])->name('cars.create');
Route::get('/cars/{id}', [CarsCatalog::class, 'show'])->name('cars.show');
Route::post('/cars', [CarsCatalog::class, 'store'])->name('cars.store');
Route::get('/cars/{id}/edit', [CarsCatalog::class, 'edit'])->name('cars.edit');
Route::put('/cars/{id}', [CarsCatalog::class, 'update'])->name('cars.update');
Route::get('/cars/{id}/delete', [CarsCatalog::class, 'destroy'])->name('cars.delete');

// Route::get('/', [Posts::class, 'index']);