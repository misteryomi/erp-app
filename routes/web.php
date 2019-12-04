<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$sub_routes_dir = __DIR__.'/subroutes/';
$sub_routes = scandir($sub_routes_dir);

//Authentication
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postLogin')->name('post.login');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/register', 'AuthController@postRegister')->name('post.register');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::middleware('auth')->group(function() use ($sub_routes) {
    Route::get('/', 'DashboardController@index')->name('home');

    Route::get('/documents', 'Documents\FileManagerController')->name('documents');
});
