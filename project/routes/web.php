<?php

use App\Http\Controllers\ProductController;
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

Route::get('/menu', [ProductController::class, 'menu']);

Route::get('/cafe', [ProductController::class, 'cafe']);

Route::get('/delivery', [ProductController::class, 'delivery']);

Route::get('/responsabilidade', [ProductController::class, 'responsabilidade']);
