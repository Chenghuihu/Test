<?php


Route::get('/', 'IndexController@show');
Route::post('/store', 'IndexController@store')->name('users.store');
Route::get('/success','SuccessController@index');
