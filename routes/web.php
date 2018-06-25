<?php


Auth::routes();

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/', 'HomeController@welcome');

Route::get('/faq', 'HomeController@faq');

Route::get('/home', 'HomeController@index')->name('home');
