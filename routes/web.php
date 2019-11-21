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
//tạo group có tiền tố admin
Route::group(['middleware'=>'CheckLogin','prefix'=>'admin'],function(){
	Route::get('/', ['as'=>'admin.index','uses'=>'Admin\AdminController@index']);

	Route::group(['prefix'=>'user'],function(){
		Route::any('/', ['as'=>'admin.user.index','uses'=>'Admin\UserController@index']);
		Route::any('/create', ['as'=>'admin.user.create','uses'=>'Admin\UserController@create']);
		Route::any('/edit/{id?}', ['as'=>'admin.user.edit','uses'=>'Admin\UserController@edit']);
		Route::any('/delete/{id?}', ['as'=>'admin.user.delete','uses'=>'Admin\UserController@delete']);
		Route::any('/profile', ['as'=>'admin.user.profile','uses'=>'Admin\UserController@profile']);
	});

	Route::group(['prefix'=>'user'],function(){
		Route::any('/', ['as'=>'admin.user.index','uses'=>'Admin\UserController@index']);
		Route::any('/create', ['as'=>'admin.user.create','uses'=>'Admin\UserController@create']);
		Route::any('/edit/{id?}', ['as'=>'admin.user.edit','uses'=>'Admin\UserController@edit']);
		Route::any('/delete/{id?}', ['as'=>'admin.user.delete','uses'=>'Admin\UserController@delete']);
		Route::any('/profile', ['as'=>'admin.user.profile','uses'=>'Admin\UserController@profile']);
	});
});
Route::any('admin/login', ['as'=>'admin.login','uses'=>'Admin\LoginController@index']);
Route::get('admin/logout', ['as'=>'admin.logout','uses'=>'Admin\LoginController@logout']);
