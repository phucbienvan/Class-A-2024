<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\AuthController;
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
    // return response()->json(['message' => 'Hello Worldddd!']);
});

Route::group(['controller' => ProductController::class, 'middleware' => 'check.user'], function () {
    Route::get('products', 'index')->name('productIndex');
    Route::get('product/edit/{product}', 'edit')->name('productEdit');
    Route::put('product/edit/{product}', 'update')->name('productUpdate');
    Route::get('product/{product}', 'show')->name('productShow');
    Route::get('product', 'store')->name('productStore');
    Route::post('product', 'create')->name('productCreate');
});
Route::get('login', [AuthController::class, 'formLogin'])->name('formLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
