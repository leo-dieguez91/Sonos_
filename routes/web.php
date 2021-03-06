<?php


Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@welcome');

Route::get('/faq', 'HomeController@faq');

Route::get('/home', 'PostsController@getPost')->name('home')->middleware('auth');

Route::post('/home', 'PostsController@savePost')->name('home');

Route::post('/home/delete/{id}', 'PostsController@deletePost');

Route::get('/perfil', 'PerfilController@show')->middleware('auth');;

Route::post('/perfil', 'PerfilController@replaceUserData');

Route::get('/eventos', 'EventsController@index');
