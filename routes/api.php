<?php

use Illuminate\Http\Request;

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

//All press release
Route::get('pressrelease','PressController@index');

//Get single press release
Route::get('pressrelease/{id}','PressController@show');

//Store press release
Route::post('pressrelease','PressController@store');

//Update press release
Route::put('pressrelease','PressController@store');

//Delete press release
Route::delete('pressrelease/{id}','PressController@destroy');