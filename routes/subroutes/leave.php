<?php

Route::group(/**
    *
    */
     ['name' => 'frontend'], function (){


   //create the route for leave approval creation
       Route::get('/leave/approve', [
         'uses'               => 'Leave\LeaveControllers@approve',
         'as'                 => 'leave.approve'
       ]);

   ///make an approval
       Route::post('/leave/{id}', [
         'uses' => 'Leave\LeaveControllers@do_approve',
         'as' => 'leave.do_approve'
       ]);


   ///make a rejections
       Route::post('/leave/reject/{id}', [
         'uses' => 'Leave\LeaveControllers@do_reject',
         'as' => 'leave.do_reject'
       ]);

   //create the route for leave admin creation
       Route::get('/leave/admin', [
         'uses'               => 'Leave\LeaveControllers@leaveAdmin',
         'as'                 => 'leave.admin'
       ]);

       Route::get('/leave/view', [
         'uses'               => 'Leave\LeaveControllers@viewApplications',
         'as'                 => 'leave.view'
       ]);

    //    Route::resource('/leave', 'Leave\LeaveControllers');
       Route::get('/leave','Leave\LeaveControllers@index')->name('leave.index');
       Route::get('/leave/new','Leave\LeaveControllers@create')->name('leave.create');
       Route::post('/leave/store','Leave\LeaveControllers@store')->name('leave.store');
       Route::get('/leave/{id}/','Leave\LeaveControllers@show')->name('leave.show');



//Expense web
// Route::resource('/expense', 'ExpenseController');

});
