<?php

Route::name('announcement.')->prefix('announcements')->middleware('auth')->group(function() {
        Route::get('/', 'AnnouncementController@index')->name('index');
        // Route::get('/{id}', 'AnnouncementController@show')->name('show');
        Route::get('/list', 'AnnouncementController@apiAnnouncements')->name('list');
        Route::post('/seen/{announcement}', 'AnnouncementController@markAsSeen')->name('post.seen');
        
        Route::middleware('can:manage-announcements')->group(function() {
            Route::post('/new', 'AnnouncementController@store')->name('post.new');
        });
});
