<?php
Route::group(['middleware'=> 'auth'],function() {
//create the route for leave admin creation
Route::get('/appraisal/start/{id}', [
    'uses' => 'AppraisalController@start',
    'as' => 'appraisal.create_start'
]);

Route::get('/appraisal-kpi', [
    'uses' => 'AppraisalController@kpi',
    'as' => 'appraisal.kpi'
]);


         Route::get('/supervisor-kpi', [
                    'uses' => 'AppraisalController@supervisor_kpi',
                    'as' => 'appraisal.supervisor_kpi'
                    ]);



Route::post('/appraisal/start/{id}', [
    'uses' => 'AppraisalController@update_start',
    'as' => 'appraisal.start'
]);


         ///appraisal make an accept
         Route::post('/appraisal/accept/{id}', [
                     'uses' => 'AppraisalController@do_approve',
                     'as' => 'appraisal.do_approve'
                     ]);


         ///appraisal make a rejections
         Route::post('/appraisal/reject/{id}', [
                     'uses' => 'AppraisalController@do_reject',
                     'as' => 'appraisal.do_reject'
                     ]);


         ///appraisal make a rejections
         Route::post('/appraisal/hod_comment/{id}', [
                     'uses' => 'AppraisalController@hod_comment',
                     'as' => 'appraisal.hod_comment'
                     ]);




Route::get('/appraisal/report/{id}', [
    'uses' => 'AppraisalController@report',
    'as' => 'appraisal.report'
]);


Route::get('/appraisal/manager', [
    'uses' => 'AppraisalController@manager',
    'as' => 'appraisal.manager'
]);


Route::get('/appraisal/hr-view', [
    'uses' => 'AppraisalController@hr_view_all',
    'as' => 'appraisal.hr_view'
]);

  Route::get('/appraisal/reset-kpi', [
    'uses' => 'AppraisalController@reset_kpi',
    'as' => 'appraisal.reset'
]);

Route::get('/appraisal/download/{id}', [
    'uses' => 'AppraisalController@download',
    'as' => 'appraisal.download'
]);

Route::resource('/appraisal', 'AppraisalController');

});


//appraisal_year Routes
Route::group(['middleware'=> 'auth'],function(){
    Route::resource('appraisal_year','\App\Http\Controllers\Appraisal_yearController');
    Route::post('appraisal_year/{id}/update','\App\Http\Controllers\Appraisal_yearController@update');
    Route::get('appraisal_year/{id}/delete','\App\Http\Controllers\Appraisal_yearController@destroy');
    Route::get('appraisal_year/{id}/deleteMsg','\App\Http\Controllers\Appraisal_yearController@DeleteMsg');
  });
