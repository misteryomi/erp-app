<?php

///////////////////////////////// A C C O U N T - S T A T E M E N T //////////////////////////////////////

//accountstatement Routes
Route::post('/accountstatement/search', [
        'uses' => 'AccountstatementController@accountstatement_call',
        'as' => 'accountstatement.search'
    ]);


//accountstatement Routes
Route::group(['middleware'=> 'auth'],function(){
  Route::resource('accountstatement','\App\Http\Controllers\AccountstatementController');
  Route::post('accountstatement/{id}/update','\App\Http\Controllers\AccountstatementController@update');
  Route::get('accountstatement/{id}/delete','\App\Http\Controllers\AccountstatementController@destroy');
  Route::get('accountstatement/{id}/deleteMsg','\App\Http\Controllers\AccountstatementController@DeleteMsg');
});
