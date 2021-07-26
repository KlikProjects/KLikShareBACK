<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products',[ProductController::class,'index'])->name('apihome');
Route::get('/products/{id}',[ProductController::class,'show'])->name('apishow');
Route::post('/products', [ProductController::class, 'store'])->name('apistore');
Route::put('/products/{id}',[ProductController::class,'update'])->name('apiupdate');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('apidestroy');
Route::get('/products/{id}/request', [ProductController::class, 'request'])->name('apirequest');
Route::get('/products/{id}/unrequest', [ProductController::class, 'unrequest'])->name('apiunrequest');


Route::get('/users/{id}',[UserController::class,'userProfile']);
Route::get('/users',[UserController::class,'index']);

Route::get('/usersRequest/{id}', [ProductController::class, 'usersRequest'])->name('usersRequest');


Route::get('/productsReceived/{id}', [ProductController::class, 'productsReceived'])->name('apiproductsReceived');



