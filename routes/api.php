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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/humidity', 'App\Http\Controllers\HumidityController@index');
Route::get('/humidity', 'App\Http\Controllers\HumidityController@index');
Route::post('/humidity', 'App\Http\Controllers\HumidityController@store');
Route::get('/humidity/{id}', 'App\Http\Controllers\HumidityController@show');
Route::put('/humidity/{id}', 'App\Http\Controllers\HumidityController@update');
Route::delete('/humidity/{id}', 'App\Http\Controllers\HumidityController@destroy');


Route::get('/sensor-data', 'App\Http\Controllers\SensorDataController@index');
Route::post('/sensor-data', 'App\Http\Controllers\SensorDataController@store');
Route::get('/sensor-data/{id}', 'App\Http\Controllers\SensorDataController@show');
Route::put('/sensor-data/{id}', 'App\Http\Controllers\SensorDataController@update');
Route::delete('/sensor-data/{id}', 'App\Http\Controllers\SensorDataController@destroy');