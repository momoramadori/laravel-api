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



Route::middleware('api_auth')->group(function(){
    Route::get('/movies','Api\MovieController@index');
    Route::get('/movies/best','Api\MovieController@best');
    Route::get('/movies/{movie}','Api\MovieController@show');
});