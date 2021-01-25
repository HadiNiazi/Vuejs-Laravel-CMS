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
// middleware('auth:sanctum')->
Route::get('/users', 'Admin\API\UserController@index');
Route::post('/user/store', 'Admin\API\UserController@store');
Route::post('/user/update/{id}', 'Admin\API\UserController@update');

Route::get('/user-profile', 'Admin\API\UserController@profile');
Route::post('user-profile/update/{user}', 'Admin\API\UserController@updateUser');

Route::post('/user/{id}', 'Admin\API\UserController@destroy');
Route::get('findUser/{user}', 'Admin\API\UserController@findUser');

