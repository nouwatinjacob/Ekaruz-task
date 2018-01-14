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
    return view('front');
});


Auth::routes();

Route::get('items', 'UserController@item');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('profile', 'UserController@profile');

    Route::post('profile', 'UserController@update_avatar');

   Route::post('/profile/{id}', 'UserController@profile_update');
});