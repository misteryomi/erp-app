<?php

Route::name('gallery.')->prefix('gallery')->namespace('Gallery')->middleware('auth')->group(function() {
        Route::get('/', 'GalleryController@index')->name('index');
        Route::get('/folders', 'GalleryController@list')->name('list');
        Route::get('/{folder}', 'GalleryController@show')->name('show');
        Route::get('/folder/{folder}', 'GalleryController@folderPictures');

        Route::get('/{picture}/comments', 'GalleryCommentsController@index')->name('comments');
        Route::post('/{picture}/comment/store', 'GalleryCommentsController@store')->name('comment.post.new');


        Route::middleware('role:super-admin')->group(function() {
            Route::post('/folder', 'GalleryController@storeFolder')->name('folder.post.new');
            Route::post('/{folder}', 'GalleryController@storePictures')->name('pictures.post.new');
        });
});
