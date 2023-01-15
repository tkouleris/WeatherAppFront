<?php

use App\Http\Controllers\WeatherAppController;
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

Route::post('/weatherapp/authenticate', [WeatherAppController::class,'authenticate'])->name('weatherapp.authenticate');
Route::post('/weatherapp/cities', [WeatherAppController::class,'cities'])->name('weatherapp.cities');
Route::post('/weatherapp/forecast/city/{city_id}', [WeatherAppController::class,'forecast'])->name('weatherapp.forecast');
