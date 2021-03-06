<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\Car;

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

Route::resource('projects', ProjectController::class);
Route::resource('cars', CarController::class);

Route::get("/cars", [\App\Http\Controllers\CarController::class, "Index"])->name("cars.index");

Route::get("/cars/create",[\App\Http\Controllers\CarController::class, "Create"])->name("cars.create");
Route::post("/cars/store",[\App\Http\Controllers\CarController::class, "Store"])->name("cars.store");

Route::get("/photos", [\App\Http\Controllers\PhotoController::class, "Index"])->name("photos.index");


