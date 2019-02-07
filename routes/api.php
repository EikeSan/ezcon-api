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

// Routes Auth
Route::post('signIn', 'API\UserController@login');
Route::post('signUp', 'API\UserController@register');

//Return swagger as home page
Route::get('/', function(){
    return redirect('api/documentation');
});

//Protected routes
Route::group(['middleware' => 'auth:api'], function(){
    
    // User's Routes
    Route::get('users/me', 'API\UserController@details');
});