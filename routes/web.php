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

Route::get('/create', [ProductController::class, 'create'])->name('create')->middleware('auth');
Route::post('/', [ProductController::class, 'store'])->name('store')->middleware('auth');

Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('delete')->middleware('auth');

Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/update/{id}', [ProductController::class, 'update'])->name('update')->middleware('auth');

Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');

Route::get('/product-requested/{id}', [ProductController::class, 'request'])->name('productRequested');

Route::get('/usersRequest/{id}', [ProductController::class, 'usersRequest'])->name('usersRequest');

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
