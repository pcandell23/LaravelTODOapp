<?php
Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', 'ContactController');
Route::resource('user', 'ContactController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
