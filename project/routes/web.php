<?php

use GuzzleHttp\Middleware;
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

Route::get('/', 'ProductController@index');

Route::get('/menu', 'ProductController@menu');

Route::get('/cafe', 'ProductController@cafe');

Route::get('/cafe/{id}', 'ProductController@show');

Route::get('/cafe/edit/{id}', 'ProductController@edit')->middleware('auth');;

Route::put('/cafe/update/{id}', 'ProductController@update')->middleware('auth');;

Route::delete('/cafe/{id}', 'ProductController@destroy')->middleware('auth');;

Route::get('/delivery', 'ProductController@delivery');

Route::get('/responsabilidade', 'ProductController@responsabilidade');

Route::get('/admin', 'ProductController@admin')->middleware('auth');

Route::post('/admin', 'ProductController@store')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
