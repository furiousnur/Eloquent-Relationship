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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/article/index', function () {
return view('article');
})->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/article','ArticleController')->middleware('auth');
Route::get('/show-articles', 'ArticleController@show_article')->middleware('auth');
Route::get('/profile/{name}', 'ArticleController@profile')->middleware('auth');
