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
    return view('layouts/pages/homepage');
});

// Vue routes
Route::group(['prefix' => 'serv-data'], function () {
  Route::get('menu', 'JsonDataController@menu');
  Route::get('news', 'NewsController@jsonNews');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');
Route::get('/news/{slug}', 'NewsController@article')->name('article');
Route::get('/collective', 'PersonController@index')->name('collective');
Route::get('/collective/{id}', 'PersonController@person')->name('portfolio');
Route::get('/reports/{category}', 'ReportsController@index');
// pages
Route::get('/{slug}', 'PagesController@page')->name('page');
