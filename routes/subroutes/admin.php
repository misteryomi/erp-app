<?php

//Admin Routes
Route::prefix('admin')->name('admin.')->middleware('auth', 'role:super-admin')->namespace('Admin')->group(function() {
    Route::get('/', 'AdminController')->name('admin');

    Route::prefix('manage-menus')->name('menus.')->group(function() {
        Route::get('/', 'MenuController@index')->name('index');
        Route::post('/', 'MenuController@store')->name('store');
        Route::get('/{menu}/edit', 'MenuController@edit')->name('edit');
        Route::post('/{menu}/edit', 'MenuController@update')->name('update');
        Route::get('/{menu}/delete', 'MenuController@delete')->name('delete');
    });

    Route::namespace('Permission')->group(function() {
        Route::get('/manage-roles', 'RoleController@index')->name('roles');
        Route::post('/manage-roles', 'RoleController@store')->name('roles.store');
        Route::get('/manage-permissions', 'PermissionController@index')->name('permissions');
        Route::post('/manage-permissions', 'PermissionController@store')->name('permissions.store');
    });

    Route::namespace('Departments')->group(function() {
        Route::prefix('units')->name('units.')->group(function() {
            Route::get('/', 'UnitController@index')->name('list');
            Route::get('/{unit}', 'UnitController@show')->name('show');
            Route::get('/new', 'UnitController@new')->name('new');
            Route::post('/store', 'UnitController@store')->name('post.store');
            Route::post('/{unit}/update', 'UnitController@update')->name('post.update');
            Route::post('/assign', 'UnitController@assignUsers')->name('assign.post.store');
        });

        Route::prefix('departments')->name('departments.')->group(function() {
            Route::get('/', 'DepartmentController@index')->name('list');
            Route::get('/new', 'DepartmentController@new')->name('new');
            Route::post('/store', 'DepartmentController@store')->name('post.store');
        });
    });
});
