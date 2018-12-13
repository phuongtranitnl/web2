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


Auth::routes();

//====================================================================//
Route::group(['middleware'=>'auth'], function () {
    Route::get('cart', ['middleware'=>'check-permission:user|admin', 'uses' =>'ProjectController@getcart']);
    Route::get('cart/{appid}', ['middleware'=>'check-permission:user|admin','uses' => 'ProjectController@postcart']);
    Route::get('cart/{id}/delete',['as' => 'cart.destroy', 'uses' =>'ProjectController@cartremove']);
    Route::get('admin', ['middleware'=>'check-permission:admin', 'uses' => 'ProjectController@viewadmin']);
    Route::get('admin/application',['middleware'=>'check-permission:admin','as' => 'admin.application','uses' => 'ApplicationController@index']);
    Route::get('admin/banner',['middleware'=>'check-permission:admin','as' => 'admin.banner','uses' => 'BannerController@index']);
    Route::get('admin/category',['middleware'=>'check-permission:admin','as' => 'admin.category','uses' => 'CategoryController@index']);
    Route::get('admin/review',['middleware'=>'check-permission:admin','as' => 'admin.type','uses' => 'ReviewController@index']);
    Route::get('admin/type',['middleware'=>'check-permission:admin','as' => 'admin.type','uses' => 'TypeController@index']);
    Route::get('admin/users',['middleware'=>'check-permission:admin','as' => 'admin.users','uses' => 'UserController@index']);
});

// Route::resource('admin/banner','BannerController');
// Route::resource('admin/user','UserController');
// Route::resource('admin/category','CategoryController');
// Route::resource('admin/type','TypeController');
// Route::resource('admin/users','TypeController');
// Route::resource('admin/review','ReviewController');
// Route::resource('admin/application','ApplicationController');


//====================================================================================//
//Category
//đường dẫn đến form của category
Route::get('category/createcategory','CategoryController@getCreate');

//đường dẫn khi submit form thêm
Route::post('category/createcategory', [
    'as' => 'create.category', 'uses' => 'CategoryController@postCreate'
]);

Route::get('category','CategoryController@index');
//đường dẫn đến form edit của category

Route::get('category/{id}/editcategory','CategoryController@getEdit');

//đường dẫn khi submit edit

Route::post('category/{id}/update', [
    'as' => 'update.category', 'uses' => 'CategoryController@postEdit'
]);

//đường dẫn khi delete category
Route::get('category/{id}/delete','CategoryController@destroy');

//===========================================================================================//
//Type
//đường dẫn đến form của type
Route::get('type/createtype','TypeController@getCreate');

//đường dẫn khi submit form thêm
Route::post('type/createtype', [
    'as' => 'create.type', 'uses' => 'TypeController@postCreate'
]);

Route::get('type','TypeController@index');

//đường dẫn đến form edit của type
Route::get('type/{id}/edittype','TypeController@getEdit');

//đường dẫn khi submit edit
Route::post('type/{id}/update', [
    'as' => 'update.type', 'uses' => 'TypeController@postEdit'
]);

//đường dẫn khi delete type
Route::get('type/{id}/delete','TypeController@destroy');

//==================================================================================//
// Banner

Route::get('banner','BannerController@index');

//đường dẫn đến form của banner
Route::get('banner/create','BannerController@create');
//đường dẫn khi submit form thêm
Route::post('banner/create', 'BannerController@store');

//đường dẫn đến form edit của banner
Route::get('banner/{id}/edit','BannerController@getEdit');
//đường dẫn khi submit edit
Route::post('banner/{id}/update', 'BannerController@postEdit');

//đường dẫn khi delete banner
Route::get('banner/{id}/delete',['as' => 'banner.destroy', 'uses' =>'BannerController@destroy']);


//==================================================================================//
//user
//đường dẫn đến form của user
Route::get('users/createuser','UserController@getCreate');

//đường dẫn khi submit form thêm
Route::post('users/createuser', [
    'as' => 'create.users', 'uses' => 'UserController@postCreate'
]);
Route::get('users','UserController@index');

//đường dẫn đến form edit của user
Route::get('users/{id}/edituser','UserController@getEdit');

//đường dẫn khi submit edit
Route::post('users/{id}/update', [
    'as' => 'update.users', 'uses' => 'UserController@postEdit'
]);

//đường dẫn khi delete user
Route::get('users/{id}/delete','UserController@destroy');





//=============== trang dang nhap====================================


//Route::get('login','LoginController@getLogin')->name('login');
//Route::post('login','LoginController@postLogin');
//Route::post('logintest','TestController@check');
//Route::get('','HomeController@getIndex');
//Route::get('logout', 'Auth\LoginController@getLogout');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Route::post('logout', 'LoginController@logout')->name('logout');
//Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Đăng ký thành viên
//Route::get('register', 'RegisterController@getRegister');
//Route::post('register', 'RegisterController@postRegister');

/*------------------------- Application -----------*/
Route::get('application/{id}/delete', 'ApplicationController@destroy');

Route::post('application/update', 'ApplicationController@update');

Route::get('application/search', 'ApplicationController@search');

Route::get('review/{IdApp}/{id}/delete', 'ReviewController@destroy');

Route::get('category/search', 'CategoryController@search');

Route::get('banner/search', 'BannerController@search');

Route::get('user/search', 'UserController@search');

Route::get('type/search', 'TypeController@search');

Route::get('home/search', 'ProjectController@searchApp');

Route::get('home/chitiet/{id}', 'ProjectController@show');

//Route::post('home/chitiet/{id}', 'ProjectController@postcart');

Route::get('home/{type}', 'ProjectController@filterType');

//Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/home', 'ReviewController@store');

Route::get('{page?}', 'ProjectController@index');