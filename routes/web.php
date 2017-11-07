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

Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('help', 'PagesController@getHelp');
Route::get('privacy', 'PagesController@getPrivacy');
Route::group(['middleware' => 'auth'], function() {
    Route::get('contact', 'PagesController@getContact');
    Route::get('services', 'PagesController@getServices');
    Route::resource('posts', 'PostController', ['only' => ['index', 'show', 'store', 'create']]);
});

Route::group(['prefix'=>'admin',
    'middleware' => ['admin'],
    'namespace' => 'Admin'], function(){
    Route::get('/', 'DashboardController@index');
    Route::resource('/posts', 'PostController',['except' => ['create', 'store']]);
    Route::resource('/users', 'UsersController',['except' => ['create', 'store']]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
