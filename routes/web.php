<?php
Route::get('', 'LoginController@index')->name('login.index');
Route::get('login', 'LoginController@index')->name('login');

Route::get('/oauth', 'OauthController@oauth')->name('oauth');
Route::get('/oauth/callback', 'OauthController@oauthCallback')->name('oauth.callback');

Route::get('/featured', 'SearchController@featured')->name('featured');
Route::get('/search', 'SearchController@search')->name('search');

