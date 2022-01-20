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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// UsersdataController
Route::get('/data', 'App\Http\Controllers\UsersdataController@index')->name('data');
Route::put('/update', 'App\Http\Controllers\UsersdataController@update')->name('update');
Route::get('/dataupdate', 'App\Http\Controllers\UsersdataController@show')->name('dataupdate');
Route::put('/updatepassword', 'App\Http\Controllers\UsersdataController@edit')->name('updatepassword');
Route::get('/destroyaccount', 'App\Http\Controllers\UsersdataController@destroy')->name('destroyaccount');

//FormsController
Route::post('/','App\Http\Controllers\FormsController@store')->name('store');
Route::get('/forms','App\Http\Controllers\FormsController@index')->name('forms');

Route::get('/photos', function () {
    return view('photos');
});