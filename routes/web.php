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
    return view('welcome');
});

Route::get('/admin','App\Http\Controllers\Admin\AuthController@index')->name('adminlogin');

Route::post('/admin','App\Http\Controllers\Admin\AuthController@postLogin')->name('adminlogin');

route::get('/dashboard','App\Http\Controllers\Admin\DashboardController@index')->middleware('preventlogin')->name('dashboard');

route::get('/logout','App\Http\Controllers\Admin\DashboardController@logout')->name('logout');


