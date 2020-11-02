<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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

Route::get('/', 'App\Http\Controllers\HomeController@welcome')->name('welcome');

Route::get('/hallo-welt/{name?}', 'App\Http\Controllers\HalloWeltController@hallo')->name('hallo.welt');

Route::get('contact', 'App\Http\Controllers\ContactController@contact');

Route::resource('product', 'App\Http\Controllers\ProductController');

//Route::get('product', 'App\Http\Controllers\ProductController@index');
//Route::post('product', 'App\Http\Controllers\ProductController@store');

//Route::get('product/create', 'App\Http\Controllers\ProductController@create');

//Route::get('product/{id}', 'App\Http\Controllers\ProductController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
