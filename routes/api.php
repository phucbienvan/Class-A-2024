<?php

use App\Http\Controllers\Api\TaskController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


<<<<<<< HEAD
Route::group(attributes: ['prefix'=> 'tasks','as'=>'tasks.'], routes: function(): void {
    Route::get('/', [TaskController::class,'index']);
    Route::post('/', [TaskController::class,'store']);
    Route::get('/{task}', [TaskController::class,'show']);
    Route::put('/{task}', [TaskController::class,'update']);
    Route::delete('/{task}', [TaskController::class, 'delete']);
});
=======
Route::group(['prefix'=>'tasks','as'=>'tasks.'], function() {
    Route::get('/', [TaskController::class, 'index']);
    Route::post('/', [TaskController::class, 'store']);
    Route::get('/{task}', [TaskController::class, 'show']);
});
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
