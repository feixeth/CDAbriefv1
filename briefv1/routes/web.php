<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Navigation Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'accueil'])->name('accueil');
Route::get('/soins-du-corps', [PageController::class, 'soinsDuCorps'])->name('soins-du-corps');
Route::get('/soins-du-visage', [PageController::class, 'soinsDuVisage'])->name('soins-du-visage');
Route::get('/maquillage', [PageController::class, 'maquillage'])->name('maquillage');
Route::get('/beaute-des-mains', [PageController::class, 'beauteDesMains'])->name('beaute-des-mains');
Route::get('/produit/{id}', [PageController::class, 'detail'])->name('detail-produit');

/*
|--------------------------------------------------------------------------
| Product CRUD Routes
|--------------------------------------------------------------------------
*/

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::patch('/products/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


/*
|--------------------------------------------------------------------------
| Category CRUD Routes
|--------------------------------------------------------------------------
*/

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::post('/categories', [CategoryController::class, 'create'])->name('categories.create');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::patch('/categories/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


/*
|--------------------------------------------------------------------------
| Dash Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
