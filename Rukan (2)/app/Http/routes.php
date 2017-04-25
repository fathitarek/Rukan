<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//customer Resources
/********************* customer ***********************************************/
Route::resource('customer','\App\Http\Controllers\CustomerController');
Route::post('customer/{id}/update','\App\Http\Controllers\CustomerController@update');
//Route::get('customer/{id}/destroy','\App\Http\Controllers\CustomerController@destroy');
Route::get('customer/destroy/{id}','\App\Http\Controllers\CustomerController@destroy');
Route::get('customer/{id}/deleteMsg','\App\Http\Controllers\CustomerController@DeleteMsg');
Route::post('customer/export','\App\Http\Controllers\CustomerController@export');


Route::get('index','\App\Http\Controllers\CustomerController@home');
Route::post("store", '\App\Http\Controllers\CustomerController@store');


/********************* customer ***********************************************/


//fat Resources
/********************* fat ***********************************************/
Route::resource('fat','\App\Http\Controllers\FatController');
Route::post('fat/{id}/update','\App\Http\Controllers\FatController@update');
Route::get('fat/{id}/delete','\App\Http\Controllers\FatController@destroy');
Route::get('fat/{id}/deleteMsg','\App\Http\Controllers\FatController@DeleteMsg');
/********************* fat ***********************************************/


//her Resources
/********************* her ***********************************************/
Route::resource('her','\App\Http\Controllers\HerController');
Route::post('her/{id}/update','\App\Http\Controllers\HerController@update');
Route::get('her/{id}/delete','\App\Http\Controllers\HerController@destroy');
Route::get('her/{id}/deleteMsg','\App\Http\Controllers\HerController@DeleteMsg');
/********************* her ***********************************************/

