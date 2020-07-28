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

Route::post('/register','API\V1\UserController@register');

Route::post('/login','API\V1\UserController@login');

Route::post('/farmer/store','API\V1\FarmerController@store');
Route::post('/veterinarian/store','API\V1\VeterinarianController@store');
Route::get('/veterinarian','API\V1\VeterinarianController@index');
Route::get('/farmer','API\V1\FarmerController@index');
