<?php

 /////////////////////////////// T O K E N I Z A T I O N ////////////////////////////////////
Route::middleware('auth')->namespace('Tokenization')->group(function() {


    Route::get('/tokenize_mandate/{id}/{ref}', [
    'uses' => 'FlutterwafeController@tokenize_mandate',
    'as' => 'tokenize.mandate'
    ]);



    Route::get('/tokenize/transactions', [
    'uses' => 'FlutterwafeController@transaction',
    'as' => 'tokenize.transactions'
    ]);



    Route::get('/tokenize/confirmation/{id}', [
    'uses' => 'FlutterwafeController@confirmation',
    'as' => 'tokenize.confirmation'
    ]);


    //// NEW ////

    Route::get('/tokenize/view_mandate/{id}', [
    'uses' => 'FlutterwafeController@view_mandate',
    'as' => 'tokenize.view_mandate'
    ]);



    Route::get('/tokenize/authorizer/', [
    'uses' => 'FlutterwafeController@authorizer',
    'as' => 'tokenize.authorizer'
    ]);



    ///make an approval
    Route::post('/authorizer/approve/{id}', [
        'uses' => 'FlutterwafeController@do_approve',
        'as' => 'authorizer.do_approve'
    ]);

    ///make a rejections
    Route::post('/authorizer/reject/{id}', [
        'uses' => 'FlutterwafeController@do_reject',
        'as' => 'authorizer.do_reject'
    ]);

    ///// END NEW ////////

    Route::get('/tokenize/range', [
    'uses' => 'FlutterwafeController@range',
    'as' => 'tokenize.range'
    ]);

    /// show only completed tokenized cards for mandate
    Route::get('/tokenize/index-completed', [
    'uses' => 'FlutterwafeController@index_completed',
    'as' => 'tokenize.index-completed'
    ]);



    Route::get('/tokenize/card', [
    'uses' => 'FlutterwafeController@relationship_officer_tokenize',
    'as' => 'tokenize.card'
    ]);

    //flutterwafe Routes
    //Route::group(['middleware'=> 'web'],function(){
    Route::resource('tokenize','FlutterwafeController');
    Route::post('tokenize/{id}/update','FlutterwafeController@update');
    Route::get('tokenize/{id}/delete','FlutterwafeController@destroy');
    Route::get('tokenize/{id}/deleteMsg','FlutterwafeController@DeleteMsg');
    //});



    Route::get('/flutterwavetransaction/token-payment', [
    'uses' => 'FlutterwavetransactionController@token_payment',
    'as' => 'flutterwavetransaction.token_payment'
    ]);


    Route::get('/flutterwavetransaction/range', [
    'uses' => 'FlutterwavetransactionController@range',
    'as' => 'flutterwavetransaction.range'
    ]);



    //flutterwavetransaction Routes
    Route::group(['middleware'=> 'auth'],function(){
        Route::resource('flutterwavetransaction','FlutterwavetransactionController');
        Route::post('flutterwavetransaction/{id}/update','FlutterwavetransactionController@update');
        Route::get('flutterwavetransaction/{id}/delete','FlutterwavetransactionController@destroy');
        Route::get('flutterwavetransaction/{id}/deleteMsg','FlutterwavetransactionController@DeleteMsg');
    });




    Route::get('/card_mandate/set_mandate/{id}', [
    'uses' => 'FlutterwafeController@set_mandate',
    'as' => 'card_mandate.set_mandate'
    ]);


    Route::get('/card_mandate/make_collections/{id}', [
    'uses' => 'Card_mandateController@mandate_collection',
    'as' => 'card_mandate.mandate_collection'
    ]);


    ///make an approval
    Route::get('/card_mandate/range', [
    'uses' => 'Card_mandateController@range',
    'as' => 'card_mandate.range'
    ]);




    ///make an customer mandate display
    Route::get('/card_mandate/customer-mandate/{id}', [
    'uses' => 'Card_mandateController@customer_mandate',
    'as' => 'card_mandate.customer_mandate'
    ]);

    ///make an for mandate transactions  dispaly
    Route::get('/card_mandate/mandate-transaction/{id}', [
    'uses' => 'Card_mandateController@mandate_transactions',
    'as' => 'card_mandate.mandate_transactions'
    ]);


    //make an customer mandate display
    Route::get('/card_mandate/par', [
    'uses' => 'Card_mandateController@par',
    'as' => 'card_mandate.par'
    ]);


        //make an customer mandate display reports
    Route::get('/card_mandate/reports', [
    'uses' => 'Card_mandateController@reports',
    'as' => 'card_mandate.reports'
    ]);



        //make an customer mandate display reports based on range
    Route::get('/card_mandate/reports/range', [
    'uses' => 'Card_mandateController@report_range',
    'as' => 'card_mandate.report_range'
    ]);

        //make an customer mandate display
    Route::get('/card_mandate/reports_analysis', [
    'uses' => 'Card_mandateController@reports_analysis',
    'as' => 'card_mandate.reports_analysis'
    ]);


        //make an customer mandate display
    Route::get('/card_mandate/reports-analysis-range', [
    'uses' => 'Card_mandateController@reports_analysis_range',
    'as' => 'card_mandate.reports_analysis_range'
    ]);


    //suspend mandates
    Route::post('/card_mandate/suspend/{id}', [
    'uses' => 'Card_mandateController@suspend',
    'as' => 'card_mandate.suspend'
    ]);


    //suspend mandates
    Route::post('/card_mandate/delete/{id}', [
    'uses' => 'Card_mandateController@destroy',
    'as' => 'card_mandate.delete'
    ]);



    //reactivate mandates
    Route::post('/card_mandate/reactivate/{id}', [
    'uses' => 'Card_mandateController@reactivate',
    'as' => 'card_mandate.reactivate'
    ]);



    //reactivate mandates
    Route::get('/card_mandate/mannual_mandate_collection/{id}', [
    'uses' => 'Card_mandateController@trigger_mannual_collection',
    'as' => 'card_mandate.mannual_mandate_collection'
    ]);




    //cronjobs collections, daily or monthly
    Route::get('/card_mandate/cronjobs_collection', [
    'uses' => 'Card_mandateController@cronjobs_collection',
    'as' => 'card_mandate.cronjobs_collection'
    ]);

    //cronjobs collections, daily or monthly FOR
    Route::get('/card_mandate/cronjobs_collection_par', [
    'uses' => 'Card_mandateController@cronjobs_collection_par',
    'as' => 'card_mandate.cronjobs_collection_par'
    ]);


    //card_mandate Routes
    Route::group(['middleware'=> 'auth'],function(){
    Route::resource('card_mandate','Card_mandateController');
    Route::post('card_mandate/{id}/update','Card_mandateController@update');
    Route::get('card_mandate/{id}/delete','Card_mandateController@destroy');
    Route::get('card_mandate/{id}/deleteMsg','Card_mandateController@DeleteMsg');
    });




    //flutterwave_permission Routes
    Route::group(['middleware'=> 'auth'],function(){
    Route::resource('flutterwave_permission','Flutterwave_permissionController');
    Route::post('flutterwave_permission/{id}/update','Flutterwave_permissionController@update');
    Route::get('flutterwave_permission/{id}/delete','Flutterwave_permissionController@destroy');
    Route::get('flutterwave_permission/{id}/deleteMsg','Flutterwave_permissionController@DeleteMsg');
    });




    //flutterwave_sector Routes
    Route::group(['middleware'=> 'web'],function(){
    Route::resource('flutterwave_sector','Flutterwave_sectorController');
    Route::post('flutterwave_sector/{id}/update','Flutterwave_sectorController@update');
    Route::get('flutterwave_sector/{id}/delete','Flutterwave_sectorController@destroy');
    Route::get('flutterwave_sector/{id}/deleteMsg','Flutterwave_sectorController@DeleteMsg');
    });

});


 /////////////////////////////// T O K E N I Z A T I O N /////////////////////////////
