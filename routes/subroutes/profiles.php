<?php

Route::name('profile.')->middleware('auth')->group(function() {
    Route::get('/profiles', 'UserController@list')->name('list');
    Route::prefix('profile')->group(function() {
        Route::get('/edit', 'UserController@edit')->name('edit');
        Route::post('/edit', 'UserController@update')->name('update');

        Route::post('/update-password', 'UserController@storePassword')->name('password.update');
        Route::post('/update-avatar', 'UserController@storeAvatar')->name('avatar.update');


        Route::get('/{user?}', 'UserController@index')->name('show');
    });
});
