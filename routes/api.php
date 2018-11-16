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

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('details', 'AuthController@details');

	Route::get('news', 'NewsController@index');
	Route::get('news/{id}', 'NewsController@show');
	Route::get('banners', 'BannersController@index');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
