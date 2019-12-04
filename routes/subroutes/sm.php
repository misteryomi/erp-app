<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//sm Routes

Route::post('/sms/populate/{id}', [
        'uses' => 'SmController@poupulate_t24',
        'as' => 'sms.populate'
    ]);

Route::get('/sms/sent', [
        'uses' => 'SmController@sent',
        'as' => 'sms.sent'
    ]);


//////////////FOR FAST TRACK ///////////////////


Route::post('/sms/fasttrack-tat', [
    'uses' => 'SmController@fasttrack_tat',
    'as' => 'sms.fasttrack'
]);

Route::get('/sms/fasttrack-tat/', [
    'uses' => 'SmController@fasttrack',
    'as' => 'sms.fasttrack_index'
]);

///////////////////////////////////////////////////

Route::group(['middleware'=> 'web'],function(){
  Route::resource('sms','\App\Http\Controllers\SmController');
  Route::post('sms/{id}/update','\App\Http\Controllers\SmController@update');
  Route::get('sms/{id}/delete','\App\Http\Controllers\SmController@destroy');
  Route::get('sms/{id}/deleteMsg','\App\Http\Controllers\SmController@DeleteMsg');
});

