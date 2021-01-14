<?php

use Illuminate\Support\Facades\Auth;
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
    // auth()->logout();
    return view('welcome');
});
// Route::get('{path}', "Admin\DashboardController@home")->where( 'path', '^[A-Za-z/\0-9_.]+$' );
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// =========== Admin routes ==============//
Route::prefix('/admin')->as('.admin')->middleware(['auth'])->group(function(){
    Route::get('/dashboard', 'Admin\DashboardController@home');
});


