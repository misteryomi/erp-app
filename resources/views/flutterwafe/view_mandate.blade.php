@extends('layouts.app')
@section('page_title')Print Mandate @endsection

@section('content') 

<?php
use App\User;
use App\Flutterwave_sector;
use Carbon\Carbon;
?>
<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT -->
@include('flutterwafe.menu')

@php
use App\Flutterwave_permission;
$user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();
@endphp
<style type="text/css">
#featuredbox{

    display: none!important; 
    visibility: hidden!important;
}

.modal-backdrop{
  display: none !important; 
}

.text_details{
    text-align: right;
}
</style>
    <link href="{{ asset('assets/pages/css/invoice-2.min.css') }}" rel="stylesheet" type="text/css" />
          <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->
                   
                    <!-- END PAGE HEADER-->



<div class="invoice-content-2 ">
                        <div class="row invoice-head">
                            <div class="col-md-7 col-xs-6">
                                <div class="invoice-logo">
                                    <img src="{{ asset('download/icon.png') }} " width= "80px"  alt="">
                                </div>
                            </div>   
                            <div class="col-md-5 col-xs-6">
                                <div class="company-address">
                                    <span class="bold uppercase">Customer Tokenization Mandate </span>
                                    <br> Generated on {{ date('l jS \of F Y h:i:s A') }}
                                    
                                   <!--  <br>
                                    <span class="bold">PRR</span> 1800 123 456 -->
                                    <br>
                                    <span class="bold">E: </span> irs@primeramfbank.com
                                    <br>
                                    <span class="bold">W: </span> www.primeramfbank.com </div>
                            </div>
                        </div>
                     




                        <div class="row invoice-body">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="invoice-title uppercase">Customer Information</th>
                                            
                                            <th class="invoice-title uppercase text_details">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h3>Customer Name</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->customer_name!!}</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Phone Number</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->phone_number!!}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>Email</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->email!!}</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Primera Account No.</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->cfi!!}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>LD</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->ld!!}</td>
                                        </tr>

                                         <tr>
                                            <td>
                                                <h3>Sector</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">@if(isset($flutterwafe->sector)) {{ Flutterwave_sector::find($flutterwafe->sector)->name }} @endif</td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <h3>Commercial Bank Account Details</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->other4!!} ( {!!$flutterwafe->customer_bank!!} ) </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <h3>Date Initiated</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!! Carbon::parse($flutterwafe->created_at)->format('d-m-Y: h:i:s') !!} </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>





<br /> <br />

 <div class="row invoice-body">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="invoice-title uppercase">Mandate Details</th>
                                            
                                            <th class="invoice-title uppercase text_details">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h3>Description of Payment</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">Loan Repayment</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Amount</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">N{{ number_format($flutterwafe->amount,2)}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>Frequency</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->frequency!!}</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Tenure</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->other3!!}</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Start Date</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold" style="color:{{$date_color}} !important">{!! Carbon::parse($start_date_display)->format('d-m-Y') !!} </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>End Date</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold" style="color: {{$date_color}} !important">{!! Carbon::parse($end_date_display)->format('d-m-Y') !!}</td>
                                        </tr>

                                         <tr>
                                            <td>
                                                <h3>Inputer</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">@if(isset($flutterwafe->inputer)) {{User::find($flutterwafe->inputer)->name}} @endif</td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <h3>Mandate Input Date</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">@if(isset($flutterwafe->inputer_date)) {!! Carbon::parse($flutterwafe->inputer_date)->format('d-m-Y: h:i:s') !!}@endif</td>
                                        </tr>



                                         <tr>
                                            <td>
                                                <h3>Authorizer</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">@if(isset($flutterwafe->authorizer)) {{ User::find($flutterwafe->authorizer)->name   }} @endif</td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <h3>Mandate Authorized Date</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">@if(isset($flutterwafe->authorizer_date)){!! Carbon::parse($flutterwafe->authorizer_date)->format('d-m-Y: h:i:s') !!}@endif</td>
                                        </tr>

                                         <tr>
                                            <td>
                                                <h3>Mandate Status</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">@if($flutterwafe->authorizer_status == 1)<span style="color:#075B01"> {!!$flutterwafe->authorizer_comment!!} </span> @elseif($flutterwafe->authorizer_status == 2)<span style="color:#BD0000"> Rejected : ({!!$flutterwafe->authorizer_comment!!}) </span> @else <span style="color:#BD0000"> Pending Authorization </span> @endif</td>
                                        </tr>





                                    </tbody>
                                </table>
                            </div>
                        </div>







<br /> <br />

 <div class="row invoice-body">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="invoice-title uppercase">Tokenization Details</th>
                                            
                                            <th class="invoice-title uppercase text_details">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h3>Status</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->status!!}</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Amount</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">N{{ number_format($flutterwafe->amount_tokenized,2)}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>Bank Card Tokenized</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->card_brand!!}</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Card Type</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!!$flutterwafe->card_type!!}</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Initiated (Staff)</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">@if(isset($flutterwafe->user_id)) {{ User::find($flutterwafe->user_id)->name   }} @endif</td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <h3>Date Tokenized</h3>
                                                
                                            </td>
                                           
                                            <td class="text_details sbold">{!! Carbon::parse($flutterwafe->tokenize_date)->format('d-m-Y') !!} </td>
                                        </tr>



                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>



@if(isset($_GET['approval']))

   



                                      <form  id="do_reject_leave_apply" style="display: none" action="{{ route('authorizer.do_reject', ['id' => $flutterwafe->id])}}" method="POST" class="form-horizontal">
                                        <!-- TASK HEAD -->
                                        <div class="form">
                                          <div class="form-group">
                                            <label class="control-label col-md-12">ENTER COMMENT FOR REJECTING BELOW
                                               <span class="required"> * </span>
                                            </label>

                                            <div class="col-md-12">
                                              <textarea id="comment_edit" name = "comment" required="required"  placeholder="COMMENT "
                                              class="form-control" ></textarea>
                                            </div>
                                          </div>
                                              @csrf
                                              <div class="actions">
                                                <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    
                                                    <button type="submit" id="approve_button_submit1"   class="btn btn-outline green btn-lg">Submit Decline</button>
                                                    <button id="btn-reject_return" type="button" class="btn btn-outline red btn-lg" >Return Back</button>
                                                   
                                                  </div>
                                                </div>
                                              </div>                                        
                                            </div>
                                          </form>






                                      



<form  id="leave_apply" action="{{ route('authorizer.do_approve', ['id' => $flutterwafe->id])}}" method="POST" class="form-horizontal">
                                        <!-- TASK HEAD -->
                                        <div class="form">
                   


                                         <!--  <div class="form-group">
                                            <label class="control-label col-md-12">Liquidation Option:
                                              <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-12">
                                              <select class="form-control " required id="other1_edit" name = "other1">
                                                <option value="">Select b...</option>
                                                <option value="part liquidation">Part Liquidation</option>
                                                <option value="full liquidation">Full Liquidation</option>


                                              </select>
                                            </div>
                                          </div>


                                          <div class="form-group">
                                            <label class="control-label col-md-12">T24 ACCOUNT NUMBER
                                              <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-12">
                                              <input type="text" id="t24_acc_no_edit" name = "t24_acc_no"  required placeholder="T24 ACCOUNT NUMBER "
                                              class="form-control" />
                                            </div>
                                          </div>


                                          <div class="form-group">
                                            <label class="control-label col-md-12">COMMENT
                                            </label>
                                            <div class="col-md-12">
                                              <textarea id="other2_edit" name = "other2"   placeholder="COMMENT "
                                              class="form-control" ></textarea>
                                            </div>
                                          </div>

 -->


                                              @csrf






                                              <div class="actions">

                                                <div class="mt-action-buttons ">

                                                  <div class="btn-group btn-group-circle">
                                                     @if($flutterwafe->authorizer_status == 2)
                                                       <h4 style="color: red"> Rejected : {{$flutterwafe->authorizer_comment}} </h4>
                                                     @endif

                                                      @if($flutterwafe->authorizer_status != 1)

                                                    <button type="submit" id="approve_button_submit"   class="btn btn-outline green btn-lg">Submit & Approve</button>

                                                     <button id="btn-reject" type="button" class="btn btn-outline red btn-lg" >Reject</button>

                                                    @else 


                                                      <h4 style="color: green"> Successfully Approved </h4>



                                                    @endif

                                                  </div>



                                                </div>

                                              </div>
                                             <!--  <div class="form-actions right todo-form-actions">
                                                <button class="btn btn-circle btn-sm green">Save Changes</button>
                                                <button class="btn btn-circle btn-sm btn-default">Cancel</button>
                                              </div> -->
                                            </div>


                                          </form>






 <script type="text/javascript">

                                    /*using the been here before completed and successful*/

                                    $(function(){

                                      $("#leave_apply").submit(function(evt){

                                       evt.preventDefault();

                                       $('#approve_button_submit').empty().prepend('Loading...').attr('disabled','disabled');

                                       var url = $(this).attr('action');

                                       var postData = $(this).serialize();

                                       $.post(url, postData, function(dor){

                                        $('#approve_button_submit').empty().prepend('Submit & Approve').removeAttr('disabled');

                                        if (dor.result == 1){
                                  $("#leave_apply").trigger('reset'); //reset the form
                                  swal("Success", dor.message, "success");

                                  window.location = "http://irs.primeramfbank.com/app/tokenize/authorizer"; //Add your success 
                                
                                }else{

                                          swal("Error!", dor.message, "error");

                                        }

                                      }, 'json');



                                     });

                                    });





                                    /*doing the rejection post */


                                    $(function(){

                                      $("#do_reject_leave_apply").submit(function(evt){

                                       evt.preventDefault();

                                       $('#approve_button_submit1').empty().prepend('Loading...').attr('disabled','disabled');

                                       var url = $(this).attr('action');

                                       var postData = $(this).serialize();

                                       $.post(url, postData, function(dor){

                                        $('#approve_button_submit1').empty().prepend('Submit Decline').removeAttr('disabled');

                                        if (dor.result == 1){
                                  $("#do_reject_leave_apply").trigger('reset'); //reset the form
                                  swal("Success", dor.message, "success");

                                           window.location = "http://irs.primeramfbank.com/app/tokenize/authorizer"; //Add your success 
                                       }else{

                                          swal("Error!", dor.message, "error");

                                        }

                                      }, 'json');



                                     });

                                    });




                                  </script>



 <script type="text/javascript">

    $(document).on('click', '#btn-reject', function () {
        // alert('Thanks');
        $("#leave_apply").hide();
        $("form").trigger('reset'); //reset the form

        var $window = $(window)
        var windowSize = $window.width();
        if (windowSize > 992) {
            setTimeout(function () {
                $('#do_reject_leave_apply').show().addClass('animated bounceInRight');
            });
        }
        else($('#do_reject_leave_apply').show().removeClass('animated bounce'));

        $('#do_reject_leave_apply').show();
    });

    $(document).on('click', '#btn-reject_return', function () {

        // alert('Thanks');
        $("#do_reject_leave_apply").hide();
        $("#leave_apply").hide();
        //  $("form").trigger('reset'); //reset the form

        var $window = $(window)
        var windowSize = $window.width();
        if (windowSize > 992) {
            setTimeout(function () {
                $('#leave_apply').show().addClass('animated bounceInRight');
            });
        }
        else($('#leave_apply').show().removeClass('animated bounce'));

        $('#leave_apply').show();
    });


</script>

                                          


@else

   <div class="row">   
                            <div class="col-xs-12">
                                <a class="btn btn-lg green-haze hidden-print uppercase print-btn" onclick="javascript:window.print();">Print</a>

                                   <a class="btn-primary btn btn-sm" href="{!! route('card_mandate.customer_mandate', $flutterwafe->id)!!}"> View Schedule</a>
                            </div>
                        </div>

@endif
                        
                     
                    </div>


</div></div>






                    @endsection

@include('includes.scripts_table')

@include('includes.scripts_form')
