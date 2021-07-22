<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [RegisterController::class, 'login']);
Route::post('/logout', [RegisterController::class, 'logout']);
Route::get('/user', UserController::class);


// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', ProductController::class);
// });

Route::get('/products',[ProductController::class,'index']);
Route::get('/products/{id}',[ProductController::class,'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}',[ProductController::class,'update'])/* ->middleware(['auth:api']) */;
Route::delete('/products/{id}',[ProductController::class,'destroy'])/* ->middleware(['auth:api']); */;
Route::get('/products/{id}/request', [ProductController::class, 'request'])/* ->middleware(['auth:api']) */;



Route::get('/usersRequest/{id}', [ProductController::class, 'usersRequest'])->name('usersRequest');


