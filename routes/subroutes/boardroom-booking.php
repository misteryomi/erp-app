<?php

Route::name('boardroom-booking.')->prefix('boardroom-booking')->namespace('UtilityForms')->middleware('auth')->group(function() {
    Route::get('/', 'BoardRoomBookingController@create')->name('index');
    Route::post('/', 'BoardRoomBookingController@store')->name('store');
});
