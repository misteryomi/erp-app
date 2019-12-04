<?php

//Exceptions Routes
Route::middleware('auth')->namespace('Exceptions')->prefix('exceptions')->name('exceptions.')->group(function() {
        Route::get('/', 'ExceptionsController@index')->name('summary');
        Route::get('/all', 'ExceptionsController@list')->name('list');
        Route::get('/new', 'ExceptionsController@create')->name('new');
        Route::post('/store', 'ExceptionsController@store')->name('post.new');
        Route::get('/{exception}', 'ExceptionsController@show')->name('show');
        Route::get('/{exception}/approve', 'ExceptionsController@approveException')->name('approve');
        Route::post('/{exception}/conversation/new', 'ExceptionConversationsController@store')->name('conversation.new');
});
