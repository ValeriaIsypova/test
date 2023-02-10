<?php

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contact');

Route::get('/', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/catalog', [App\Http\Controllers\HomeController::class, 'catalogs'])->name('catalog');

