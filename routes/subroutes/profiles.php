<?php

Route::name('profile.')->middleware('auth')->group(function() {
    Route::get('/profiles', 'UserController@list')->name('list');
    Route::prefix('profile')->group(function() {
        Route::get('{user}/edit', 'UserController@edit')->name('edit');
        Route::post('{user}/edit', 'UserController@update')->name('update');

        Route::post('/update-password', 'UserController@storePassword')->name('password.update');
        Route::post('/update-avatar', 'UserController@storeAvatar')->name('avatar.update');


        Route::get('/{user?}', 'UserController@index')->name('show');
    });

    Route::middleware(['role:super-admin'])->group(function() {
        Route::get('/profiles/admin', 'UserController@manageProfiles')->name('admin');
    });

});
