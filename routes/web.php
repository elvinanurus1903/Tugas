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
    return view('front/tambah');
});




Route::group(['middleware' => ['logged']],function(){
	Route::get('/login', 'UploadsController@login')->name('login');
	Route::post('user/add', 'UserController@store');
	Route::post('user/login', 'UserController@login');
	Route::get('/register', 'UploadsController@register');
});

Route::group(['middleware' => ['admin']],function(){
	Route::resource('upload','UploadsController');
	Route::get('/logout', 'UserController@logout');
});
Route::resource('front','FrontController');



