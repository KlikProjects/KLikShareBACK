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
Route::get('/user', [UserController::class, 'getUserData']);
Route::get('/requestedProducts', [UserController::class, 'getRequestedProducts'])->middleware(['auth:api']);


// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', ProductController::class);
// });


Route::get('/products',[ProductController::class,'index']);
Route::get('/products/{id}',[ProductController::class,'show']);
Route::post('/products', [ProductController::class, 'store'])->middleware(['auth:api']);
Route::put('/products/{id}',[ProductController::class,'update'])->middleware(['auth:api']);
Route::delete('/products/{id}',[ProductController::class,'destroy'])->middleware(['auth:api']);
Route::get('/products/{id}/request', [ProductController::class, 'request'])->name('apirequest')->middleware(['auth:api']);
Route::get('/products/{id}/unrequest', [ProductController::class, 'unrequest'])->name('apiunrequest')->middleware(['auth:api']);
Route::get('/contacts', [ProductController::class, 'getUserContacts'])->name('apigetUserContacts')->middleware(['auth:api']);

Route::get('/checkIfRequested/{id}', [ProductController::class, 'checkIfRequested'])->name('apicheckIfRequested')->middleware(['auth:api']);

Route::get('/myProducts', [ProductController::class, 'myProducts'])->middleware(['auth:api']);




Route::get('/usersRequest/{id}', [ProductController::class, 'usersRequest'])->name('usersRequest');
Route::get('/giveToUser/{productID}/{userID}', [ProductController::class, 'giveToUser'])->name('apiGiveUser');


Route::get('/search/{search}', [ProductController::class, 'search'])->name('search');


Route::get('/productsReceived/{id}', [ProductController::class, 'productsReceived'])->name('apiproductsReceived');
Route::get('/productsDonated/{id}', [ProductController::class, 'productsDonated'])->name('apiproductsDonated');



