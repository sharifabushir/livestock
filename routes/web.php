<?php

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
    return redirect('login');
});

Auth::routes();

Route::get('/dashboad', 'HomeController@index')->name('dashboad');

Route::get('/veterinarian/add', 'VeterinarianController@create')->name('create-veterinarian');

Route::post('/veterinarian/store', 'VeterinarianController@store')->name('store-veterinarian');

Route::get('/veterinarian/list', 'VeterinarianController@index')->name('list-veterinarian');

Route::get('/farmer/add', 'FarmerController@create')->name('create-farmer');

Route::get('/farmer/list', 'FarmerController@index')->name('list-farmer');

Route::get('/complain/list', 'ComplainController@index')->name('list-complain');

Route::post('/farmer/store', 'FarmerController@store')->name('store-farmer');

Route::get('/treatment/add', 'TreatmentController@create')->name('create-treatment');

Route::get('/animal/list', 'AnimalController@index')->name('view-animal');

