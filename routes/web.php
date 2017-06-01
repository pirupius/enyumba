<?php

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

    return view('home');
});

Route::resource('flyers', 'FlyersController');

Route::get('{area}/{address}', 'FlyersController@show');
// Route::post('{area}/{address}/photos', 'FlyersController@addPhoto');
Route::post('{area}/{address}/photos', ['as'=>'store_photo_path', 'uses'=>'FlyersController@addPhoto']);