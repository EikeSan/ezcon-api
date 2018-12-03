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

Route::post('signIn', 'API\UserController@login');
Route::post('signUp', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('users/me', 'API\UserController@details');
});