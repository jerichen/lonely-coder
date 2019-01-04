<?php
Route::get('', 'IndexController@index')->name('welcome');
Route::get('login', 'LoginController@index')->name('login.index');

Route::get('/oauth', 'OauthController@oauth')->name('oauth');
Route::get('/oauth/callback', 'OauthController@oauthCallback')->name('oauth.callback');
Route::get('/profile', 'MemberController@getProfile')->name('profile');

Route::get('/search', 'IndexController@search')->name('search');
