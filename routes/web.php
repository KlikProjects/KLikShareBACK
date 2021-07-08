<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/create', [ProductController::class, 'create'])->name('create');

Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('delete');

Route::post('/', [ProductController::class, 'store'])->name('store');

Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');

Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
