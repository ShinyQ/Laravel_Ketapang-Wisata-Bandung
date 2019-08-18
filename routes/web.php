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

Route::get('/', 'HomeController@index');

Route::prefix('login')->group(function(){
  Route::get('/', 'Auth\LoginController@index')->name('login');
  Route::post('/', 'Auth\LoginController@doLogin');
});

Route::prefix('register')->group(function(){
  Route::get('/', 'Auth\RegisterController@index');
  Route::post('/', 'Auth\RegisterController@doRegister');
});

Route::get('/logout', 'Auth\LoginController@doLogout');

Route::prefix('auth')->group(function(){
  Route::get('/{provider}', 'Auth\AuthController@redirectToProvider');
  Route::get('/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
});

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::prefix('wisata')->group(function(){
  Route::get('/', 'HomeController@wisata');
  Route::get('/{id}', 'Admin\WisataController@detail');
});

Route::prefix('paket')->group(function(){
  Route::get('/{id}', 'HomeController@paket');
});

Route::prefix('transaksi')->group(function(){
  Route::get('/', 'TransaksiController@index');
  Route::get('/{id}', 'TransaksiController@show');
});

Route::prefix('admin')->group(function(){
  Route::prefix('wisata')->group(function(){
    Route::get('/', 'Admin\WisataController@index');
    Route::get('/create', 'Admin\WisataController@create');
    Route::post('/', 'Admin\WisataController@store');
    Route::get('/{id}/edit', 'Admin\WisataController@edit');
    Route::post('/{id}', 'Admin\WisataController@update');
  });
  Route::prefix('transaksi')->group(function(){
    Route::get('/', 'Admin\TransaksiController@index');
    Route::get('/terima', 'Admin\WisataController@terima');
    Route::post('/tolak', 'Admin\WisataController@tolak');
  });
});
