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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\HomeController@index')->name('home');
Route::get('/add-home','App\Http\Controllers\HomeController@addhome')->name('add.home');
Route::post('/savehome','App\Http\Controllers\HomeController@create')->name('savehome');
Route::get('/edithome/{home_id}','App\Http\Controllers\HomeController@edit')->name('edithome');
Route::post('/update/{id}','App\Http\Controllers\HomeController@update')->name('updatehome');

