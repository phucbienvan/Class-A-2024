<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\ProductController;
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
Route::get('products', [ProductController::class, 'index'])->name('productIndex');
Route::get('product/edit/{product}', [ProductController::class, 'edit'])->name('productEdit');
Route::put('product/edit/{product}', [ProductController::class, 'update'])->name('productUpdate');
Route::get('product/{product}', [ProductController::class, 'show'])->name('productShow');
Route::get('product', [ProductController::class, 'store'])->name('productStore');
Route::post('product', [ProductController::class, 'create'])->name('productCreate');
