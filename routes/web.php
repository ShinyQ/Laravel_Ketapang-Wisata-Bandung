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

Route::prefix('wisata')->group(function(){
  Route::get('/', function () { return view('wisata'); });
  Route::get('/{id}', 'Admin\WisataController@detail');
});

Route::prefix('login')->group(function(){
  Route::get('/', 'Auth\LoginController@index')->name('login');
  Route::post('/', 'Auth\LoginController@doLogin');
});

Route::prefix('register')->group(function(){
  Route::get('/', 'Auth\RegisterController@index');
  Route::post('/', 'Auth\RegisterController@doRegister');
});

Route::get('/logout', 'Auth\LoginController@doLogout');


Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::prefix('admin')->group(function(){
  Route::prefix('wisata')->group(function(){
    Route::get('/', 'Admin\WisataController@index');
    Route::get('/create', 'Admin\WisataController@create');
    Route::post('/', 'Admin\WisataController@store');
    Route::get('/{id}/edit', 'Admin\WisataController@edit');
    Route::post('/{id}', 'Admin\WisataController@update');
  });
});
