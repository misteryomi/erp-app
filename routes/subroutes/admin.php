<?php

//Admin Routes
Route::prefix('admin')->name('admin.')->middleware('auth', 'role:super-admin')->namespace('Admin')->group(function() {
    Route::get('/', 'AdminController')->name('admin');
    Route::get('/manage-menus', 'MenuController@index')->name('menus');
    Route::post('/manage-menus', 'MenuController@store')->name('menus.store');

    Route::namespace('Permission')->group(function() {
        Route::get('/manage-roles', 'RoleController@index')->name('roles');
        Route::post('/manage-roles', 'RoleController@store')->name('roles.store');
        Route::get('/manage-permissions', 'PermissionController@index')->name('permissions');
        Route::post('/manage-permissions', 'PermissionController@store')->name('permissions.store');
    });
});
