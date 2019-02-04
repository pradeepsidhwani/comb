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
    return view('site.home');
});
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/detail', 'SiteController@detail')->name('detail');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::get('/task', 'SiteController@task')->name('task');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
