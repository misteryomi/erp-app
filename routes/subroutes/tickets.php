<?php

//Tickes Routes
Route::namespace('Tickets')->group(function() {

        Route::prefix('helpdesk')->middleware('auth')->group(function() {
            //User Routes
            Route::namespace('User')->group(function() {
                Route::get('/', 'TicketsController@index')->name('tickets.summary');
                Route::prefix('tickets')->name('tickets.')->group(function() {
                    Route::get('/', 'TicketsController@list')->name('list');
                    Route::get('/new', 'TicketsController@create')->name('new');
                    Route::post('/store', 'TicketsController@store')->name('post.new');
                    Route::get('/{ticket}', 'TicketsController@show')->name('show');
                    Route::get('/{ticket}/approve', 'TicketsController@approveTicket')->name('approve');
                    Route::post('/{ticket}/conversation/new', 'TicketConversationsController@store')->name('conversation.new');
                });
            });


            //Admin Routes
            Route::prefix('admin')->name('tickets.admin.')->namespace('Admin')->middleware(['role_or_permission:super-admin|admin-helpdesk'])->group(function() {

                    Route::get('/', 'DashboardController@index')->name('dashboard');
                    Route::prefix('tickets')->name('tickets.')->group(function() {
                        Route::get('/', 'TicketsController@list')->name('list');
                        Route::get('/{ticket}', 'TicketsController@show')->name('show');
                        Route::post('/{ticket}/reassign', 'TicketsController@reassign')->name('reassign');
                    });

                    Route::prefix('categories')->name('categories.')->group(function() {
                        Route::get('/', 'CategoryController@index')->name('list');
                        Route::get('/new', 'CategoryController@new')->name('new');
                        Route::post('/store', 'CategoryController@store')->name('post.store');
                        Route::post('/{category}/update', 'CategoryController@update')->name('update');
                        Route::get('/{category}/delete', 'CategoryController@delete')->name('delete');
                    });

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

                    Route::prefix('users')->name('users.')->group(function() {
                        Route::get('/', 'UserController@index')->name('list');
                        Route::get('/new', 'UserController@new')->name('new');
                        Route::get('/{user}', 'UserController@show')->name('show');
                        Route::post('/store', 'UserController@store')->name('post.store');
                        Route::post('/assign/store', 'UserController@assignStaff')->name('assign.post.store');
                    });

            });
        });

        Route::prefix('api/v1')->name('api.')->group(function() {
            Route::get('departments', 'User\DepartmentsController')->name('departments.list');
        });
    });



    //Vendor Routes
    Route::prefix('vendor')->name('tickets.vendor.')->namespace('Tickets\Vendor')->group(function() {
        Route::get('/', 'AuthController@index')->name('login');
        Route::post('/login', 'AuthController@login')->name('post.login');
        Route::get('/logout', 'AuthController@logout')->name('logout');

        Route::middleware('auth:vendor')->group(function() {
            Route::get('/dashboard', 'TicketsController@index')->name('dashboard');
            Route::get('/reset-password', 'AuthCOntroller@resetPassword')->name('password.reset');
            Route::post('/store-password', 'AuthCOntroller@storePassword')->name('password.reset.post');

            Route::prefix('tickets')->group(function() {
                Route::get('/', 'TicketsController@list')->name('list');
                Route::get('/new', 'TicketsController@create')->name('new');
                Route::post('/store', 'TicketsController@store')->name('post.new');
                Route::get('/{ticket}', 'TicketsController@show')->name('show');
                Route::post('/{ticket}/conversation/new', 'TicketConversationsController@store')->name('conversation.new');
                Route::post('/{ticket}/reassign', 'TicketsController@reassign')->name('reassign');
            });
        });


});
