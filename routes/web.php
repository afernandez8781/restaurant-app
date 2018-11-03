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

Route::get('/','HomeController@index')->name('welcome');


Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function (){
	Route::get('/', 'DashboardController@index')->name('admin.dashboard');
	
	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/{home}/edit', 'HomeController@edit')->name('home.edit');
	Route::put('/home/{home}', 'HomeController@update')->name('home.update');

	Route::get('/about', 'AboutController@index')->name('about.index');
	Route::get('/about/{about}/edit', 'AboutController@edit')->name('about.edit');
	Route::put('/about/{about}', 'AboutController@update')->name('about.update');

	Route::resource('aboutimage', 'AboutImagesController', ['only' => ['store', 'create', 'destroy', 'update', 'edit']]);
	// Route::resource('home', 'HomeController');
});