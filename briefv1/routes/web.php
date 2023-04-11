<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'accueil'])->name('accueil');

Route::get('/soins-du-corps', [PageController::class, 'soinsDuCorps'])->name('soins-du-corps');

Route::get('/soins-du-visage', [PageController::class, 'soinsDuVisage'])->name('soins-du-visage');

Route::get('/maquillage', [PageController::class, 'maquillage'])->name('maquillage');

Route::get('/beaute-des-mains', [PageController::class, 'beauteDesMains'])->name('beaute-des-mains');


Route::get('/produit/{id}', [PageController::class, 'detail'])->name('detail-produit');


