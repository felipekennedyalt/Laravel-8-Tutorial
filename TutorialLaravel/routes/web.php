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

Route::get('/products/about', [ProductsController::class, 'about']);

// Laravel 8 ( Also New)
Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Before Laravel 8(Não funciona mais)
//Route::get('/products', 'ProductsController@index');