<?php

use App\Http\Controllers\MovesController;
use App\Http\Controllers\MovmentacaoController;
use App\Models\Movimentacao;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/moves', MovesController::class);

Route::resource('/movin', MovmentacaoController::class);