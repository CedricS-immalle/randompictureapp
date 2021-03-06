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
Route::get('/RandomPicture', 'HomeController@picture')->name('RandomPicture');
Route::get('/UploadPicture', 'HomeController@upload')->name('UploadPicture');
Route::get('/Statistics', 'HomeController@Statistics')->name('Statistics');

Route::get('/RandomPicture', function () {
    return view('welcome');
});
