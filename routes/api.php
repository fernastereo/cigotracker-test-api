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

/* 
Countries
*/
Route::resource('countries', 'Country\CountryController', ['only' => ['index', 'show']]);
Route::resource('countries.provinces', 'Country\CountryProvinceController', ['only' => ['index']]);

/* 
Provinces
*/
Route::resource('provinces', 'Province\ProvinceController', ['only' => ['index', 'show']]);
Route::resource('provinces.cities', 'Province\ProvinceCityController', ['only' => ['index']]);

/* 
Cities
*/
Route::resource('cities', 'City\CityController', ['only' => ['index', 'show']]);

/* 
Statusorders
*/
Route::resource('statusorders', 'Statusorder\StatusorderController', ['only' => ['index', 'show']]);

/*
Orders
*/
Route::resource('orders', 'Order\OrderController');