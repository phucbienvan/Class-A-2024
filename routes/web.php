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

// group product
Route::group(['prefix'=>'products'], function() {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/create', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{product}', [ProductController::class, 'show']);
    
});

