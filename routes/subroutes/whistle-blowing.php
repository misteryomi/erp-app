<?php

Route::name('whistle-blowing.')->prefix('whistleblowing')->namespace('UtilityForms')->middleware('auth')->group(function() {
    Route::get('/', 'WhistleBlowingController@create')->name('index');
    Route::post('/', 'WhistleBlowingController@store')->name('store');


    // Route::middleware(['role:super-admin'])->group(function() {
    //     Route::get('/profiles/admin', 'WhistleBlowingController@manageProfiles')->name('admin');
    // });

});
