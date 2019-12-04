<?php

Route::name('gallery.')->prefix('gallery')->middleware('auth')->group(function() {
        Route::get('/', 'GalleryController@index')->name('list');
        Route::get('/{folder}', 'GalleryController@show')->name('show');

        Route::middleware('role:super-admin')->group(function() {
            Route::post('/folder', 'GalleryController@storeFolder')->name('folder.post.new');
            Route::post('/{folder}', 'GalleryController@storePictures')->name('pictures.post.new');
        });
});
