<?php

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

//
//Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);
//Route::post('/product-create', [\App\Http\Controllers\ProductController::class, 'store']);
//Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show']);

Route::resource('products', \App\Http\Controllers\ProductController::class);

//Route::get('/products', function () {
//    return 'product';
//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
