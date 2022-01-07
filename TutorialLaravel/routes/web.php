<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
// Laravel 8 (New)
Route::get('/products', [ProductsController::class, 'index']);

//pattern is integer
Route::get('/products/{id}', [ProductsController::class, 'showID'])->where('id', '[0-9]+');

//pattern is String
//Route::get('/products/{name}', [ProductsController::class, 'showName'])->where('name', '[a-zA-Z]+');

Route::get('/products/{name}/{id}', [ProductsController::class, 'showName'])->where('name', '[a-zA-Z]+', 'id', '[0-9]+');


Route::get('/products/about', [ProductsController::class, 'about']);

// Laravel 8 ( Also New)
//Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Before Laravel 8(Não funciona mais)
//Route::get('/products', 'ProductsController@index');

