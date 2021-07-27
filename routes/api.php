<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;



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

Route::get('/products',[ProductController::class,'index'])->name('apihome');
Route::get('/products/{id}',[ProductController::class,'show'])->name('apishow');
Route::post('/products', [ProductController::class, 'store'])->name('apistore')->middleware(['auth:api']);
Route::put('/products/{id}',[ProductController::class,'update'])->name('apiupdate')->middleware(['auth:api']);
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('apidestroy')->middleware(['auth:api']);
Route::get('/products/{id}/request', [ProductController::class, 'request'])->name('apirequest')->middleware(['auth:api']);
Route::get('/products/{id}/unrequest', [ProductController::class, 'unrequest'])->name('apiunrequest')->middleware(['auth:api']);

Route::get('/usersRequest/{id}', [ProductController::class, 'usersRequest'])->name('usersRequest');

Route::get('/usersRequest/{id}', [ProductController::class, 'usersRequest'])->name('usersRequest');
Route::get('/giveToUser/{productID}/{userID}', [ProductController::class, 'giveToUser'])->name('apiGiveUser');


Route::get('/chatContacts' , [ContactController::class, 'getContacts'])->name('ChatContacts');


Route::get('/productsReceived/{id}', [ProductController::class, 'productsReceived'])->name('apiproductsReceived');



