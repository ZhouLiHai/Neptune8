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

Route::get('/', 'ArticleController@index');

Route::get('/article/{id}', 'ArticleController@show');

Route::group(['prefix' => 'article', 'middleware' => 'auth'], function () {
    Route::post('/store', 'ArticleController@store')->name('article.store');
    Route::post('/update/{id}', 'ArticleController@update')->name('article.update');
    Route::post('/edit/{id}', 'ArticleController@edit')->name('article.edit');
    Route::post('/destroy/{id}', 'ArticleController@destroy')->name('article.destroy');
});

Route::group(['prefix' => 'tag', 'middleware' => 'auth'], function () {
    Route::get('/index', 'TagController@index')->name('tag.index');
    Route::post('/store', 'TagController@store')->name('tag.store');
    Route::post('/update/{id}', 'TagController@update')->name('tag.update');
    Route::post('/edit/{id}', 'TagController@edit')->name('tag.edit');
    Route::post('/destroy/{id}', 'TagController@destroy')->name('tag.destroy');
});

Route::group(['prefix' => 'category', 'middleware' => 'auth'], function () {
    Route::get('/index', 'CategoryController@index')->name('category.index');
    Route::post('/store', 'CategoryController@store')->name('category.store');
    Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
    Route::post('/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');
});

Route::group(['prefix' => 'comment', 'middleware' => 'auth'], function () {
    Route::get('/index', 'CommentController@index')->name('comment.index');
    Route::post('/store', 'CommentController@store')->name('comment.store');
    Route::post('/update/{id}', 'CommentController@update')->name('comment.update');
    Route::post('/edit/{id}', 'CommentController@edit')->name('comment.edit');
    Route::post('/destroy/{id}', 'CommentController@destroy')->name('comment.destroy');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

