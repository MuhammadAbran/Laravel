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

// Route::get('blog', 'PostController@index');

// Route::get('/post/create', ['as' => 'create.post', 'uses' => 'PostController@create']);

// Route::get('/post/{id}', ['as' => 'detail.post', 'uses' => 'DetailPostController@index']);

// Route::post('/post/store', ['as' => 'store.post', 'uses' => 'PostController@store']);

Route::resource('post', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
