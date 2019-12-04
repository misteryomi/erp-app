@extends('layouts.app') @section('content') 
<!-- BEGIN CONTENT -->
@section('page_title')Card Token Payment   @endsection

  <?php
            use App\User;
            ?>
<!-- BEGIN CONTENT -->
@include('flutterwafe.menu')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
           Card Token Payment  
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">           Card Token Payment  
 </a> </li>
            </ul>
        </div>


















         <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-green-sharp">
                                <span data-counter="counterup" data-value="{!! number_format($total_successful,2) !!}">{!! number_format($total_successful,2) !!} NGN</span>
                                {{--<small class="font-green-sharp">NAIRA</small>--}}
                            </h3>
                            <small>TOTAL SUCCESSFUL PAYMENT</small>
                        </div>
                        <div class="icon">
                            <i class="icon-pie-chart"></i>
                        </div>
                    </div>
                     <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 50%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">50</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> {!! number_format($total_successful,2) !!} </div>
                            <div class="status-number"> % </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-blue-sharp">
                                <span style= "color: red;" data-counter="counterup" data-value="{!! number_format($total_failed,2) !!}">{!! number_format($total_failed,2) !!} NGN</span>
                            </h3>
                            <small style= "color: red;">TOTAL FAILED PAYMENT</small>
                        </div>
                        <div class="icon">
                            <i class="icon-pie-chart"></i>
                        </div>
                    </div>
                     <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 50%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">50</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title">{!! number_format($total_failed,2) !!} </div>
                            <div class="status-number"> % </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-red-haze">
                                <span data-counter="counterup" data-value="{!! number_format($total_monthly,2) !!}">{!! number_format($total_monthly,2) !!} NGN</span>
                            </h3>
                            <small>CURRENT MONTH TOTAL PAYMENT </small>
                        </div>
                        <div class="icon">
                            <i class="icon-bar-chart"></i>
                        </div>
                    </div>
                     <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 50%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only"></span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> {!! number_format($total_monthly,2) !!} </div>
                            <div class="status-number"> % </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-purple-soft">
                                <span data-counter="counterup" data-value="{!! number_format($total_daily,2 ) !!}">{!! number_format($total_daily,2 ) !!} NGN</span>
                            </h3>
                            <small>TODAY'S TOTAL PAYMENT</small>
                        </div>
                        <div class="icon">
                            <i class="icon-bar-chart"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 50%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only"></span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> {!! number_format($total_daily,2) !!} </div>
                            <div class="status-number"> % </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- /////////////////////////////////////////////e n d/////////////////////////////////////////////////////// -->


        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>           Card Token Payment  
 </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body
                      
                                
                                        <div class="" id="table-content-display">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2>
                                                                   Card Token Payment  

                                                    </h2>
                                                    <span>Displaying            Card Token Payment  </span> 
                                                    <div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
                                                </div>

                                                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>token_id</th>
                                                                                <th>transaction_id</th>
                                                                                <th>transaction_reference</th>
                                                                                <th>processor_reference</th>
                                                                                <th>amount</th>
                                                                                <th>currency</th>
                                                                                <th>amount_charged</th>
                                                                                <th>rave_fee</th>
                                                                                <th>merchant_fee</th>
                                                                                <th>merchant_bore_fee</th>
                                                                                <th>processor_response_code</th>
                                                                                <th>processor_response_message</th>
                                                                                <th>auth_model</th>
                                                                                <th>customer_ip</th>
                                                                                <th>narration</th>
                                                                                <th>status</th>
                                                                                <th>payment_entity</th>
                                                                                <th>payment_entity_id</th>
                                                                                <th>date_created</th>
                                                                                <th>unique_reference</th>
                                                                                <th>amount_due_merchant</th>
                                                                                <th>customer_id</th>
                                                                                <th>customer_email</th>
                                                                                <th>customer_phonenumber</th>
                                                                                <th>customer_fullname</th>
                                                                                <th>customer_date_created</th>
                                                                                <th>card_id</th>
                                                                                <th>masked_pan</th>
                                                                                <th>expiry_year</th>
                                                                                <th>expiry_month</th>
                                                                                <th>type</th>
                                                                                <th>country</th>
                                                                                <th>issuer_info</th>
                                                                                <th>date_created</th>
                                                                                <th>merchant_id</th>
                                                                                <th>payment_count</th>
                                                                                <th>other1</th>
                                                                                <th>other2</th>
                                                                                <th>other3</th>
                                                                                <th>other4</th>
                                                                                <th>other5</th>
                                                                                <th>Last Update</th>
                                                                                
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="Aq80piw7362mYMissu1A8UdyZwRjdH9hd5xODb4h">
                                                                        </thead>
                                                                        <tbody id="PostContent">
                                                                            @foreach($flutterwavetransactions as $flutterwavetransaction) 

                                                                           

                                                                            <tr  @if($flutterwavetransaction->status == "successful") style="color:green" @else style="color:red" @endif class="item{!!$flutterwavetransaction->
                                                                                id!!}" > 
                                                                                <td>{!!$flutterwavetransaction->token_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->transaction_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->transaction_reference!!}</td>
                                                                                <td>{!!$flutterwavetransaction->processor_reference!!}</td>
                                                                                <td>{!!$flutterwavetransaction->amount!!}</td>
                                                                                <td>{!!$flutterwavetransaction->currency!!}</td>
                                                                                <td>{!!$flutterwavetransaction->amount_charged!!}</td>
                                                                                <td>{!!$flutterwavetransaction->rave_fee!!}</td>
                                                                                <td>{!!$flutterwavetransaction->merchant_fee!!}</td>
                                                                                <td>{!!$flutterwavetransaction->merchant_bore_fee!!}</td>
                                                                                <td>{!!$flutterwavetransaction->processor_response_code!!}</td>
                                                                                <td>{!!$flutterwavetransaction->processor_response_message!!}</td>
                                                                                <td>{!!$flutterwavetransaction->auth_model!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_ip!!}</td>
                                                                                <td>{!!$flutterwavetransaction->narration!!}</td>
                                                                                <td>{!!$flutterwavetransaction->status!!}</td>
                                                                                <td>{!!$flutterwavetransaction->payment_entity!!}</td>
                                                                                <td>{!!$flutterwavetransaction->payment_entity_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->date_created!!}</td>
                                                                                <td>{!!$flutterwavetransaction->unique_reference!!}</td>
                                                                                <td>{!!$flutterwavetransaction->amount_due_merchant!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_email!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_phonenumber!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_fullname!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_date_created!!}</td>
                                                                                <td>{!!$flutterwavetransaction->card_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->masked_pan!!}</td>
                                                                                <td>{!!$flutterwavetransaction->expiry_year!!}</td>
                                                                                <td>{!!$flutterwavetransaction->expiry_month!!}</td>
                                                                                <td>{!!$flutterwavetransaction->type!!}</td>
                                                                                <td>{!!$flutterwavetransaction->country!!}</td>
                                                                                <td>{!!$flutterwavetransaction->issuer_info!!}</td>
                                                                                <td>{!!$flutterwavetransaction->date_created!!}</td>
                                                                                <td>{!!$flutterwavetransaction->merchant_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->payment_count!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other1!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other2!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other3!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other4!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other5!!}</td>
                                                                                <td>{!!$flutterwavetransaction->updated_at->diffForHumans()!!} </td>
                                                                               
                                                                            </tr>
                                                                            @endforeach 
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                @endsection

                 @include('includes.scripts_table')
