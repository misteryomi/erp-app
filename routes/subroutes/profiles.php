<?php

Route::name('profile.')->middleware('auth')->group(function() {
    Route::get('/profiles', 'UserController@list')->name('list');
    Route::get('/profile/{user?}', 'UserController@index')->name('show');
});
