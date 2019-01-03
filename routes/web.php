<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'LoginController@index')->name('login.index');
