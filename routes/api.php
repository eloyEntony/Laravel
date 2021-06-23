<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource("/photos", "PhotoController",);

Route::get('/photos', [App\Http\Controllers\API\PhotoController::class, "index"]);
Route::get('/photos/foto', [App\Http\Controllers\API\PhotoController::class, "getCarFoto"]);
Route::post('/photos/store', [App\Http\Controllers\API\PhotoController::class, "store"]);
Route::get('/photos/show/{id}', [App\Http\Controllers\API\PhotoController::class, "show"]);
Route::put('/photos/update/{id}', [App\Http\Controllers\API\PhotoController::class, "update"]);
Route::delete('/photos/delete/{id}', [App\Http\Controllers\API\PhotoController::class, "destroy"]);
