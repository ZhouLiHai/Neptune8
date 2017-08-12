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

Route::get('/blog', 'ArticleController@blog')->name('blog');
Route::get('/', 'ArticleController@main');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/article/show/{id}', 'ArticleController@show')->name('article.show');


Route::group(['prefix' => 'article', 'middleware' => 'auth'], function () {
    Route::get('/index', 'ArticleController@index')->name('article.index');
    Route::post('/store', 'ArticleController@store')->name('article.store');
    Route::get('/update/{id}', 'ArticleController@update')->name('article.update');
    Route::get('/edit', 'ArticleController@edit')->name('article.edit');
    Route::get('/destroy/{id}', 'ArticleController@destroy')->name('article.destroy');
});

Route::group(['prefix' => 'tag', 'middleware' => 'auth'], function () {
    Route::get('/index', 'TagController@index')->name('tag.index');
    Route::post('/store', 'TagController@store')->name('tag.store');
    Route::get('/update/{id}', 'TagController@update')->name('tag.update');
    Route::get('/edit', 'TagController@edit')->name('tag.edit');
    Route::get('/destroy/{id}', 'TagController@destroy')->name('tag.destroy');
});

Route::group(['prefix' => 'category', 'middleware' => 'auth'], function () {
    Route::get('/index', 'CategoryController@index')->name('category.index');
    Route::post('/store', 'CategoryController@store')->name('category.store');
    Route::get('/update/{id}', 'CategoryController@update')->name('category.update');
    Route::get('/edit', 'CategoryController@edit')->name('category.edit');
    Route::get('/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');
});

Route::group(['prefix' => 'comment', 'middleware' => 'auth'], function () {
    Route::get('/index', 'CommentController@index')->name('comment.index');
    Route::post('/store', 'CommentController@store')->name('comment.store');
    Route::get('/update/{id}', 'CommentController@update')->name('comment.update');
    Route::get('/edit', 'CommentController@edit')->name('comment.edit');
    Route::get('/destroy/{id}', 'CommentController@destroy')->name('comment.destroy');
});


//Auth::routes();
