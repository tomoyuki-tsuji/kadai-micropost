<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', 'Auth\RegisterController@showRgisterForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');