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

Route::get('/', 'CagaralamController@home');
Route::get('/about', 'CagaralamController@about');


Route::get('/user', function() {
	return Auth::user();
});

Auth::routes();
Route::group(['middleware' => ['auth','checkRole:Admin']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('category', 'CategoryController')->except(['create', 'show']);
    Route::resource('cagaralam', 'CagaralamController');
});

Route::group(['middleware' => ['auth','checkRole:Admin,Member,Dinas Pariwisata']], function() {
    Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
  });

Route::group(['middleware' => ['auth','checkRole:Member,Dinas Pariwisata']], function() {
    Route::resource('laporan', 'LaporanController');

  });

Route::get('/{slug}',[
	'uses' => 'CagaralamController@view',
	'as' => 'cagaralams.view'
]);