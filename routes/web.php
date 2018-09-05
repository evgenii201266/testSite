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
    return view('welcome');
});

Route::get('/quotes', 'QuotesController@index')->name('umori.index');
Route::get('/get', 'QuotesController@get');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/wiki', 'WikiController@index')->name('wiki.index');
    Route::get('/wiki/search', 'WikiController@store')->name('wiki.store');

    Route::resource('post-panel', 'PostController');
    Route::get('/blogs', 'PostController@postView')->name('post.index');
    Route::get('/blogs/{id}', 'PostController@showMain')->name('post.show-main');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
