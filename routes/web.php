<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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
Route::get('/search/{search}', [ProductController::class, 'search'])->name('search');

Route::get('/create', [ProductController::class, 'create'])->name('create')->middleware('auth');
Route::post('/', [ProductController::class, 'store'])->name('store')->middleware('auth');

Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('delete')->middleware('auth');

Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/update/{id}', [ProductController::class, 'update'])->name('update')->middleware('auth');

Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');

Route::get('/product-requested/{id}', [ProductController::class, 'request'])->name('productRequested');
Route::get('/product-unrequested/{id}', [ProductController::class, 'unrequest'])->name('productUnRequested');

Route::get('/usersRequest/{id}', [ProductController::class, 'usersRequest'])->name('usersRequest');
Route::get('/giveToUser/{productID}/{userID}', [ProductController::class, 'giveToUser'])->name('giveToUser');

Route::get('/productsReceived', [ProductController::class, 'productsReceived'])->name('productsReceived');

Route::get('/usersConnection/{productID}', [ProductController::class, 'usersConnection'])->name('usersConnection');



// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
