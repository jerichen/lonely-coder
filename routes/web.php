<?php
Route::get('', 'IndexController@index')->name('welcome');
Route::get('login', 'LoginController@index')->name('login.index');
