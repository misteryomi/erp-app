@extends('layouts.app') 
@section('page_title'){!!$liquidation->customer_name!!}  @endsection

@section('content') 
<?php

use App\User;



Auth()->user()->unreadNotifications->markAsRead();

?>

@include('liquidation.menu')
                                  <link href="{{ asset('assets/apps/css/todo-2.min.css') }}" rel="stylesheet" type="text/css" />

<style type="text/css">

.expense{
  border-top:none;
  font-size: 40px!important;
}

.table td, .table th {
  font-size: 14px!important;
}


.modal {
  display: block !important;
  overflow: hidden !important;
  position: fixed !important;

  z-index: 1050 !important;
  -webkit-overflow-scrolling: touch !important;
  outline: 0!important;
  left: 50%!important;
  bottom: auto!important;
  right: auto!important;
  padding: 0;
  border: 1px solid #999999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px !important;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.5)!important;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.5)!important;
  background-clip: padding-box !important;
  width: auto !important;
  /* margin-left: -250px; */
  /* background-color: #ffffff; */


  margin-left: -250px!important;
  background-color: transparent !important;
  /* border: 1px solid #999999; */
  /* border: 1px solid rgba(0, 0, 0, 0.2); */
  /* border-radius: 6px; */
}

.pdfobject{
  height: 900px !important;
}


</style>





<!-- static -->

<div id="myModal" class="modal">

  <form id="do_reject" action="{{ route('liquidation.do_reject', ['id' => $liquidation->id])}}" method="POST">

    <div class="modal-body">

      @csrf

      <p style="color:#fff">To reject leave , kindly enter comment: </p>

      <textarea name="comment" required="required" style="margin: 0px; width: 467px; height: 146px;" ></textarea>

    </div>

    <div class="modal-footer">

      <button type="button" data-dismiss="modal" class=" btn red closed">Cancel</button>

      <button type="submit"  class="btn green"> Submit </button>

    </div>



  </form>

</div>








<!-- static -->

<div id="static2" id="modal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">

  <form id="do_reject" action="{{ route('liquidation.do_reject', ['id' => $liquidation->id])}}" method="POST">

    <div class="modal-body">

      @csrf

      <p>Enter comment: </p>

      <textarea name="comment" style="margin: 0px; width: 467px; height: 146px;" ></textarea>

    </div>

    <div class="modal-footer">

      <button type="button" data-dismiss="modal" class="btn btn-outline dark">Cancel</button>

      <button type="submit"  class="btn green">Submit</button>

    </div>



  </form>

</div>



<!-- static -->

<div id="myModal" class="modal">

  <form id="do_reject" action="{{ route('liquidation.do_reject', ['id' => $liquidation->id])}}" method="POST">

    <div class="modal-body">

      @csrf

      <p style="color:#fff">To reject leave , kindly enter comment: </p>

      <textarea name="comment" required="required" style="margin: 0px; width: 467px; height: 146px;" ></textarea>

    </div>

    <div class="modal-footer">

      <button type="button" data-dismiss="modal" class=" btn red closed">Cancel</button>

      <button type="submit"  class="btn green"> Submit </button>

    </div>



  </form>

</div>








<style>
body {font-family: Arial, Helvetica, sans-serif;}


.modal, .modal-backdrop {
 background: #1d2144;
 top: 138px !important;
 right: auto !important;
 bottom: 50% !important;
 left: 32% !important;
 padding: 13px !important;
}


/* The Modal (background) */
.modal {
  display: none !important; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  
  overflow: auto; /* Enable scroll if needed */
  
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
  position: fixed;
  bottom: 0;
  width: 50%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}
</style>




<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closed")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>














<style>

.btn-group-lg>.btn, .btn-lg

{

  padding: 12px 38px;

  font-size: 18px;



}

.btn.btn-outline.green {

  border-color: #118c0b;

  color: #2b820f;

  background: 0 0;

}

.btn.btn-outline.green.active, .btn.btn-outline.green:active, .btn.btn-outline

.green:active:focus, .btn.btn-outline.green:active:hover, .btn.btn-outline.green:focus, .btn.btn-outline.green:hover{

  border-color: #118c0b;

  color: #FFF;

  background-color: #118c0b;

}

</style>




<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
 <!--  <div class="page-content">
  <!-- BEGIN PAGE HEADER-->

  <div class="row">
    <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
      <div class="card">
        <div class="card-header">
          <div class="caption"> <i class="fa fa-globe"></i>Liquidation for {!!$liquidation->customer_name!!} </div>
          <div class="actions"></div>
        </div>
        <div class="card-body


          <!--   <section class="content card-body
              <h4>
                Show Liquidation for {!!$liquidation->customer_name!!}
              </h4>
              <br>
<!--     <a href='{!!url("liquidation")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Liquidation Index</a>
--  <br>
<table class = 'table table-bordered table-responsive table-striped table-hover table responsive '  cellpadding="40" border="1" bordercolor="#000" style=" width: 50%; margin-top:10px;  border:1px solid #000; text-align: left;">
  <thead>
    <th>Key</th>
    <th>Value</th>
  </thead>
  <tbody>
            <!-- <tr>
                <td> <b>staff_id</b> </td>
                <td>{!!$liquidation->staff_id!!}</td>
              </tr> --
              <tr>
                <td> <b>CUSTOMER NAME</b> </td>
                <td>{!!$liquidation->customer_name!!}</td>
              </tr>
              <tr>
                <td> <b>AMOUNT PAID</b> </td>
                <td>{!!$liquidation->amount_paid!!}</td>
              </tr>
              <tr>
                <td> <b>DATE PAID</b> </td>
                <td>{!!$liquidation->date_paid!!}</td>
              </tr>
              <tr>
                <td> <b>NAME OF PAYEE</b> </td>
                <td>{!!$liquidation->payee!!}</td>
              </tr>
              <tr>
                <td> <b>LIQUIDATION TYPE</b> </td>
                <td>{!!$liquidation->liquidation_type!!}</td>
              </tr>
          <!--   <tr>
                <td> <b>documents</b> </td>
                <td>{!!$liquidation->documents!!}</td>
              </tr> --
              <tr>
                <td> <b>PRODUCT TYPE</b> </td>
                <td>{!!$liquidation->product_type!!}</td>
              </tr>
              <tr>
                <td> <b>AMOUNT CONFIRMED BY OPERATIONS</b> </td>
                <td>{!!$liquidation->amount_confirmed!!}</td>
              </tr>
              <tr>
                <td> <b>LD(LOAN ID)</b> </td>
                <td>{!!$liquidation->ld!!}</td>
              </tr>
              <tr>
                <td> <b>LIQUIDATION TYPES OPERATIONS</b> </td>
                <td>{!!$liquidation->liquidation_type_ops!!}</td>
              </tr>
              <tr>
                <td> <b>T24 ACCOUNT NUMBER</b> </td>
                <td>{!!$liquidation->t24_acc_no!!}</td>
              </tr>

              @if($liquidation->approved_by_ops != "")
              <tr>
                <td> <b>APPROVED BY (OPERATIONS):</b> </td>
                <td>  {!! User::find($liquidation->approved_by_ops)->display_name!!}</td>
              </tr>
              @endif
              @if($liquidation->approved_by_cad != "")
              <tr>
                <td> <b>APPROVED BY (CAD)</b> </td>
                <td>{{ User::find($liquidation->approved_by_cad)->display_name }}</td>
              </tr>
              @endif
              <tr>
                <td> <b>STATUS OPERATIONS</b> </td>
                <td>{!!$liquidation->status_ops!!}</td>
              </tr>
              <tr>
                <td> <b>status_cad</b> </td>
                <td>{!!$liquidation->status_cad!!}</td>
              </tr>
              <tr>
                <td> <b>COMMENTS</b> </td>
                <td>{!!$liquidation->comment!!}</td>
              </tr>
            <!-- <tr>
                <td> <b>other1</b> </td>
                <td>{!!$liquidation->other1!!}</td>
            </tr>
            <tr>
                <td> <b>other2</b> </td>
                <td>{!!$liquidation->other2!!}</td>
            </tr>
            <tr>
                <td> <b>other3</b> </td>
                <td>{!!$liquidation->other3!!}</td>
              </tr> --
            </tbody>
          </table>





        </section> -->




<!--                                @if(Auth::user()->admin == "4")
--


<form id="do_approve" action="{{ route('liquidation.do_approve', ['id' => $liquidation->id])}}" method="POST"

  style="display:initial !important; float:right;">

  @csrf



  {{-- <input  type="hidden" name="supervisor_id" value="{{ $liquidation->supervisor_id }}" >--}}



  <div class="actions">

    <div class="mt-action-buttons ">

      <div class="btn-group btn-group-circle">



        <button type="submit" id="approve_button"   class="btn btn-outline green btn-lg">Posted & Push</button>

        <button id="myBtn" type="button" class="btn btn-outline red btn-lg" >Reject</button>

      </div>



    </div>

  </div>

</form>


<!-- 
                            <form id="do_approve" action="{{ route('liquidation.do_approve', ['id' => $liquidation->id])}}" method="POST"

                                  style="display:initial !important; float:right;">

                                @csrf



                               {{-- <input  type="hidden" name="supervisor_id" value="{{ $leave->supervisor_id }}" >--}}



                            <div class="actions">

                                <div class="mt-action-buttons ">

                                    <div class="btn-group btn-group-circle">



                                        <button type="submit"   class="btn btn-outline green btn-lg">Approve</button>

                                        <button type="button" class="btn btn-outline red btn-lg" data-target="#static" data-toggle="modal">Reject</button>

                                    </div>



                                </div>

                            </div>

                          </form> -->

                          <!--   @endif
                          -->






                          <!-- @if(Auth::user()->admin == "5") -

                          <form id="do_approve" action="{{ route('liquidation.do_approve', ['id' => $liquidation->id])}}" method="POST"

                            style="display:initial !important; float:right;">

                            @csrf



                            {{-- <input  type="hidden" name="supervisor_id" value="{{ $liquidation->supervisor_id }}" >--}}



                            <div class="actions">

                              <div class="mt-action-buttons ">

                                <div class="btn-group btn-group-circle">



                                  <button type="submit"  id="approve_button" class="btn btn-outline green btn-lg">Liquidated & Approve</button>

                                  <button id="myBtn"  type="button" class="btn btn-outline red btn-lg" >Reject</button>

                                </div>



                              </div>

                            </div>

                          </form>

                          <!--    @endif -










                       <!--      <form id="do_approve" action="{{ route('liquidation.do_approve', ['id' => $liquidation->id])}}" method="POST"

                                  style="display:initial !important; float:right;">

                                @csrf



                               {{-- <input  type="hidden" name="supervisor_id" value="{{ $leave->supervisor_id }}" >--}}



                            <div class="actions">

                                <div class="mt-action-buttons ">

                                    <div class="btn-group btn-group-circle">



                                        <button type="submit"   class="btn btn-outline green btn-lg">Approve</button>

                                        <button type="button" class="btn btn-outline red btn-lg" data-target="#static" data-toggle="modal">Reject</button>

                                    </div>



                                </div>

                            </div>

                          </form> -->





<!-- 



                             @if(($liquidation->approved_by_cad == "".Auth::user()->id."") && ($liquidation->approved_by_cad == 0) )



                                <form id="do_approve" action="{{ route('liquidation.do_approve', ['id' => $liquidation->id])}}" method="POST"

                                      style="display:initial !important; float:right;">

                                    @csrf



                                    {{-- <input  type="hidden" name="supervisor_id" value="{{ $leave->supervisor_id }}" >--}}



                                    <div class="actions">

                                        <div class="mt-action-buttons ">

                                            <div class="btn-group btn-group-circle">



                                                <button type="submit"   class="btn btn-outline green btn-lg">Approve</button>

                                                <button type="button" class="btn btn-outline red btn-lg" data-target="#static" data-toggle="modal">Reject</button>

                                            </div>



                                        </div>

                                    </div>

                                </form>

                                @endif --





                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                    -->





                    <div class="portlet light ">
                      <!-- PROJECT HEAD -->
                      <div class="card-header">
                        <div class="caption">
                          <i class="icon-bar-chart font-green-sharp hide"></i>
                          <span class="caption-helper">Displaying:</span> &nbsp;
                          <span class="caption-subject font-green-sharp bold uppercase">Liquidation for {!!$liquidation->customer_name!!}</span>
                        </div>
                        <div class="actions">
                          <div class="btn-group">
                            <a class="btn white btn-circle btn-sm" href="javascript:;"  style="border: 1px solid #ccc; color:#2b4a5c;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">  OPS : @if ($liquidation->status_ops == 1)
                                                                                 <span style='color:green; font-weight: bold;'>Approved</span>
                                                                                 @elseif($liquidation->status_ops == 2)
                                                                                 <span style='color:red; font-weight: bold;'>Rejected</span>
                                                                                 @else
                                                                                 <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                                                                 @endif
                              <i class="fa fa-angle-down"></i>
                            </a>

                            <a class="btn white btn-circle btn-sm" href="javascript:;" style="border: 1px solid #ccc;  color:#2b4a5c;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> CAD : @if ($liquidation->status_cad == 1)
                                                                                 <span style='color:green; font-weight: bold;'>Approved</span>
                                                                                 @elseif($liquidation->status_cad == 2)
                                                                                 <span style='color:red; font-weight: bold;'>Rejected</span>
                                                                                 @else
                                                                                 <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                                                                 @endif
                              <i class="fa fa-angle-down"></i>
                            </a>

                            <!-- <ul class="dropdown-menu pull-right">
                              <li>
                                <a href="javascript:;"> New Task </a>
                              </li>
                              <li class="divider"> </li>
                              <li>
                                <a href="javascript:;"> Pending
                                  <span class="badge badge-danger"> 4 </span>
                                </a>
                              </li>
                              <li>
                                <a href="javascript:;"> Completed
                                  <span class="badge badge-success"> 12 </span>
                                </a>
                              </li>
                              <li>
                                <a href="javascript:;"> Overdue
                                  <span class="badge badge-warning"> 9 </span>
                                </a>
                              </li>
                              <li class="divider"> </li>
                              <li>
                                <a href="javascript:;"> Delete Project </a>
                              </li>
                            </ul> -->
                          </div>
                        </div>
                      </div>


                      <!-- end PROJECT HEAD -->
                      <div class="card-body
                        <div class="row">
                          <div class="col-md-5 col-sm-4">
                            <div class="todo-tasklist">

                              <style type="text/css">
                              .liquidation_first {
                                border: 1px #ccc solid; 
                                border-bottom: none!important;
                              }

                              .liquidation_second {
                                border: 1px #ccc solid; 
                                border-bottom: none!important;
                              }
                            </style>

                            <div class="todo-tasklist-item todo-tasklist-item-border-purple"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Originator  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid">{{ User::find($liquidation->staff_id)->display_name }} </div> </div>

                            <div class="todo-tasklist-item todo-tasklist-item-border-green"><div class="todo-tasklist-item-title col-md-6 liquidation_first">  Name of Customer  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second"> {!!$liquidation->customer_name!!} </div> </div>


                            <div class="todo-tasklist-item todo-tasklist-item-border-red"><div class="todo-tasklist-item-title col-md-6 liquidation_first" >  Amount Paid  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->amount_paid!!}</div> </div>


                            <div class="todo-tasklist-item todo-tasklist-item-border-blue"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Date Paid  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->date_paid!!} </div> </div>

                            <div class="todo-tasklist-item todo-tasklist-item-border-blue"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Payment Comm. Bank </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->other3!!} </div> </div>


                            <div class="todo-tasklist-item todo-tasklist-item-border-green"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Name of Payee  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->payee!!} </div> </div>

                            <div class="todo-tasklist-item todo-tasklist-item-border-green"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > OPERATIONS STATUS  </div>

                             <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid">
                             @if ($liquidation->status_ops == 1)
                                                                                 <span style='color:green; font-weight: bold;'>Approved</span>
                                                                                 @elseif($liquidation->status_ops == 2)
                                                                                 <span style='color:red; font-weight: bold;'>Rejected</span>
                                                                                 @else
                                                                                 <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                                                                 @endif
                                </div> </div>
                              <div class="todo-tasklist-item todo-tasklist-item-border-green"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > CAD STATUS  </div>

                           <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid">

                                                                               @if ($liquidation->status_cad == 1)
                                                                                 <span style='color:green; font-weight: bold;'>Approved</span>
                                                                                 @elseif($liquidation->status_cad == 2)
                                                                                 <span style='color:red; font-weight: bold;'>Rejected</span>
                                                                                 @else
                                                                                 <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                                                                 @endif
                                 </div> </div>


                            <div class="todo-tasklist-item todo-tasklist-item-border-blue"><div class="todo-tasklist-item-title col-md-6 liquidation_first" >  Liquidation Type  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->liquidation_type!!} </div> </div>

                            <div class="todo-tasklist-item todo-tasklist-item-border-purple"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Product Type </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->product_type!!} </div> </div>

                            @if($liquidation->amount_confirmed != "")
                            <div class="todo-tasklist-item todo-tasklist-item-border-green"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Amount Confirmed(Operations)  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->amount_confirmed!!} </div> </div>
                            @endif
                            @if($liquidation->ld != "")
                            <div class="todo-tasklist-item todo-tasklist-item-border-red"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > LD  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->ld!!} </div> </div>
                            @endif
                            @if($liquidation->liquidation_type_ops != "")
                            <div class="todo-tasklist-item todo-tasklist-item-border-green"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Type Confirmed (OPS)  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->liquidation_type_ops!!} </div> </div>
                            @endif
                            @if($liquidation->t24_acc_no != "")
                            <div class="todo-tasklist-item todo-tasklist-item-border-red"><div class="todo-tasklist-item-title col-md-6 liquidation_first" >T24 Account Number   </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->t24_acc_no!!} </div> </div>
                            @endif
                            @if($liquidation->approved_by_ops != "")
                            <div class="todo-tasklist-item todo-tasklist-item-border-yellow"><div class="todo-tasklist-item-title col-md-6 liquidation_first" >Approved By (OPS)  </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!! User::find($liquidation->approved_by_ops)->display_name!!}</div> </div>
                            @endif
                            @if($liquidation->approved_by_cad != "")

                            <div class="todo-tasklist-item todo-tasklist-item-border-purple"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Approved By (CAD)   </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid">{{ User::find($liquidation->approved_by_cad)->display_name }} </div> </div>

                            @endif
                            @if($liquidation->comment != "")

                            <div class="todo-tasklist-item todo-tasklist-item-border-yellow"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Comment (Operations)   </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid">{!!$liquidation->comment!!} </div> </div>

                            @endif

                            @if($liquidation->other1 != "")
                            <div class="todo-tasklist-item todo-tasklist-item-border-green"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Type Confirmed (CAD)   </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->other1!!} </div> </div>
                            @endif

                            @if($liquidation->other2 != "")
                            <div class="todo-tasklist-item todo-tasklist-item-border-green"><div class="todo-tasklist-item-title col-md-6 liquidation_first" > Comment (CAD) </div> <div class="todo-tasklist-item-title col-md-6 liquidation_second" style="border-left: 1px solid"> {!!$liquidation->other2!!} </div> </div>
                            @endif











<!-- 
                    <div class="todo-tasklist-item todo-tasklist-item-border-red">
                      <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar5.jpg" width="27px" height="27px">
                      <div class="todo-tasklist-item-title"> Homepage Alignments to adjust </div>
                      <div class="todo-tasklist-item-text"> </div>
                      <div class="todo-tasklist-controls pull-left">
                        <span class="todo-tasklist-date">
                          <i class="fa fa-calendar"></i> 14 Sep 2014 </span>
                          <span class="todo-tasklist-badge badge badge-roundless">Important</span>
                        </div>
                      </div>
                      <div class="todo-tasklist-item todo-tasklist-item-border-green">
                        <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar9.jpg" width="27px" height="27px">
                        <div class="todo-tasklist-item-title"> Slider Redesign </div>
                        <div class="todo-tasklist-controls pull-left">
                          <span class="todo-tasklist-date">
                            <i class="fa fa-calendar"></i> {!!$liquidation->date_paid!!} </span>
                            <span class="todo-tasklist-badge badge badge-roundless">Important</span>&nbsp; </div>
                          </div>
                          <div class="todo-tasklist-item todo-tasklist-item-border-blue">
                            <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar6.jpg" width="27px" height="27px">
                            <div class="todo-tasklist-item-title"> Contact Us Map Location changes </div>
                            <div class="todo-tasklist-item-text"> Lorem ipsum amet, consectetuer dolore dolor sit amet. </div>
                            <div class="todo-tasklist-controls pull-left">
                              <span class="todo-tasklist-date">
                                <i class="fa fa-calendar"></i> 04 Oct 2014 </span>
                                <span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp;
                                <span class="todo-tasklist-badge badge badge-roundless">Test</span>
                              </div>
                            </div>
                            <div class="todo-tasklist-item todo-tasklist-item-border-purple">
                              <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar7.jpg" width="27px" height="27px">
                              <div class="todo-tasklist-item-title"> Projects list new Forms </div>
                              <div class="todo-tasklist-item-text"> {!!$liquidation->liquidation_type!!}</div>
                              <div class="todo-tasklist-controls pull-left">
                                <span class="todo-tasklist-date">
                                  <i class="fa fa-calendar"></i> 19 Dec 2014 </span>
                                </div>
                              </div>
                              <div class="todo-tasklist-item todo-tasklist-item-border-yellow">
                                <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar8.jpg" width="27px" height="27px">
                                <div class="todo-tasklist-item-title"> New Search Keywords </div>
                                <div class="todo-tasklist-item-text"> {!!$liquidation->product_type!!} </div>
                                <div class="todo-tasklist-controls pull-left">
                                  <span class="todo-tasklist-date">
                                    <i class="fa fa-calendar"></i> 02 Feb 2015 </span>
                                    <span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp; </div>
                                  </div>
                                  <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                    <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar9.jpg" width="27px" height="27px">
                                    <div class="todo-tasklist-item-title"> Slider Redesign </div>
                                    <div class="todo-tasklist-controls pull-left">
                                      <span class="todo-tasklist-date">
                                        <i class="fa fa-calendar"></i> 10 Feb 2015 </span>
                                        <span class="todo-tasklist-badge badge badge-roundless">Important</span>&nbsp; </div>
                                      </div>
                                      <div class="todo-tasklist-item todo-tasklist-item-border-red">
                                        <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar5.jpg" width="27px" height="27px">
                                        <div class="todo-tasklist-item-title"> Homepage Alignments to adjust </div>
                                        <div class="todo-tasklist-item-text"> Lorem ipsum dolor sit amet, consectetuer dolore psum dolor sit. </div>
                                        <div class="todo-tasklist-controls pull-left">
                                          <span class="todo-tasklist-date">
                                            <i class="fa fa-calendar"></i> 14 Sep 2014 </span>
                                            <span class="todo-tasklist-badge badge badge-roundless">Important</span>
                                          </div>
                                        </div>
                                        <div class="todo-tasklist-item todo-tasklist-item-border-blue">
                                          <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar6.jpg" width="27px" height="27px">
                                          <div class="todo-tasklist-item-title"> Contact Us Improvement </div>
                                          <div class="todo-tasklist-item-text"> Lorem ipsum amet, psum dolor sit consectetuer dolore. </div>
                                          <div class="todo-tasklist-controls pull-left">

                                          </div>
                                        </div> -->
                                      </div>
                                    </div>
                                    <div class="todo-tasklist-devider"> </div>
                                    <div class="col-md-7 col-sm-8">









                                      <form  id="do_reject_leave_apply" style="display: none" action="{{ route('liquidation.do_reject', ['id' => $liquidation->id])}}" method="POST" class="form-horizontal">
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






                                      @if( $user_permission_group == 'operations')
                                      <form  id="leave_apply" action="{{ route('liquidation.do_approve', ['id' => $liquidation->id])}}" method="POST" class="form-horizontal">
                                        <!-- TASK HEAD -->
                                        <div class="form">
                                         <!--  <div class="form-group">
                                            <div class="col-md-8 col-sm-8">
                                              <div class="todo-taskbody-user">
                                                <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar6.jpg" width="50px" height="50px">
                                                <span class="todo-username pull-left">Vanessa Bond</span>
                                                <button type="button" class="todo-username-btn btn btn-circle btn-default btn-sm">&nbsp;edit&nbsp;</button>
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                              <div class="todo-taskbody-date pull-right">
                                                <button type="button" class="todo-username-btn btn btn-circle btn-default btn-sm">&nbsp; Complete &nbsp;</button>
                                              </div>
                                            </div>
                                          </div> -->
                                          <!-- END TASK HEAD -->
                                          <!-- TASK TITLE -->

                                          <div class="form-group">
                                            <label class="control-label col-md-12">Amount Paid Confirmation
                                              <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-12">
                                              <input type="text" id="amount_confirmed_edit" name = "amount_confirmed"  required placeholder="Amount Paid Confirmation"
                                              class="form-control" />
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-md-12">LD
                                              <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-12">
                                              <input type="text" id="ld_edit" name = "ld"  required placeholder="LOAN ID "
                                              class="form-control" />
                                            </div>
                                          </div>


                                          <div class="form-group">
                                            <label class="control-label col-md-12">Liquidation Option:
                                              <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-12">
                                              <select class="form-control select2me" required id="liquidation_type_ops_edit" name = "liquidation_type_ops">
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
                                              <textarea id="comment_edit" name = "comment"   placeholder="COMMENT "
                                              class="form-control" ></textarea>
                                            </div>
                                          </div>



                                              @csrf






                                              <div class="actions">

                                                <div class="mt-action-buttons ">

                                                  <div class="btn-group btn-group-circle">

                                                      @if($liquidation->status_ops != 1)

                                                    <button type="submit" id="approve_button_submit"   class="btn btn-outline green btn-lg">Submit & Approve</button>

                                                    <button id="btn-reject" type="button" class="btn btn-outline red btn-lg" >Reject</button>

                                                    @else 


                                                      <h4 style="color: green"> Done / Actioned </h4>



                                                    @endif

                                                  </div>



                                                </div>

                                              </div>
                                             
                                            </div>


                                          </form>







                                          @elseif( $user_permission_group == 'cad')



<form  id="leave_apply" action="{{ route('liquidation.do_approve', ['id' => $liquidation->id])}}" method="POST" class="form-horizontal">
                                        <!-- TASK HEAD -->
                                        <div class="form">
                   


                                          <div class="form-group">
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


                                          <!-- <div class="form-group">
                                            <label class="control-label col-md-12">T24 ACCOUNT NUMBER
                                              <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-12">
                                              <input type="text" id="t24_acc_no_edit" name = "t24_acc_no"  required placeholder="T24 ACCOUNT NUMBER "
                                              class="form-control" />
                                            </div>
                                          </div>

 -->
                                          <div class="form-group">
                                            <label class="control-label col-md-12">COMMENT
                                            </label>
                                            <div class="col-md-12">
                                              <textarea id="other2_edit" name = "other2"   placeholder="COMMENT "
                                              class="form-control" ></textarea>
                                            </div>
                                          </div>




                                       <!--    <div class="form-group">
                                            <div class="col-md-12">
                                              <input type="text" class="form-control todo-taskbody-tasktitle" placeholder="Task Title..."> </div>
                                            </div>
                                            <!-- TASK DESC --
                                            <div class="form-group">
                                              <div class="col-md-12">
                                                <textarea class="form-control todo-taskbody-taskdesc" rows="8" placeholder="Task Description..."></textarea>
                                              </div>
                                            </div>
                                            <!-- END TASK DESC -->
                                            <!-- TASK DUE DATE --
                                            <div class="form-group">
                                              <div class="col-md-12">
                                                <div class="input-icon">
                                                  <i class="fa fa-calendar"></i>
                                                  <input type="text" class="form-control todo-taskbody-due" placeholder="Due Date..."> </div>
                                                </div>
                                              </div>
                                              <!-- TASK TAGS --
                                              <div class="form-group">
                                                <div class="col-md-12">
                                                  <select class="form-control todo-taskbody-tags select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                    <option value="Pending">Pending</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Testing">Testing</option>
                                                    <option value="Approved">Approed</option>
                                                    <option value="Rejected">Rejected</option>
                                                  </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 792px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-0c9g-container"><span class="select2-selection__rendered" id="select2-0c9g-container" title="Pending">Pending</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                              </div> -->
                                              <!-- TASK TAGS -->

                                              @csrf






                                              <div class="actions">

                                                <div class="mt-action-buttons ">

                                                  <div class="btn-group btn-group-circle">

                                                      @if($liquidation->status_cad != 1)

                                                    <button type="submit" id="approve_button_submit"   class="btn btn-outline green btn-lg">Submit & Approve</button>

                                                     <button id="btn-reject" type="button" class="btn btn-outline red btn-lg" >Reject</button>

                                                    @else 


                                                      <h4 style="color: green"> Done / Actioned </h4>



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



                                          @endif



                                          <div class="tabbable-line">

                                            <div class="tab-content">
                                              <div class="tab-pane active" id="tab_1">
                                                <!-- TASK COMMENTS -->
                                                <div class="form-group">
                                                  <div class="col-md-12">

                                                    <script
                                                    src="https://code.jquery.com/jquery-3.4.1.min.js"
                                                    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                                                    crossorigin="anonymous"></script>

                                                      

                                                    @if(!empty($liquidation->documents))
                                                    <script src="{{ asset('assets/global/scripts/pdf.js') }}" type="text/javascript"></script>
                                                    <h4> ATTACHED DOCUMENTS </h4>
                                                    <div id="pdf1"></div>
                                                    <script>PDFObject.embed("{!! url('liquidation_files/'.$liquidation->documents.'')!!}", "#pdf1");</script>


                                                    @endif

                                                  </div>
                                                </div>
                                                <!-- END TASK COMMENTS -->
                                                <!-- TASK COMMENT FORM -->
                                               
                                                  <!-- END TASK COMMENT FORM -->
                                                </div>

                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- BEGIN PAGE LEVEL STYLES -->





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

                                           window.location = "http://irs.primeramfbank.com/app/liquidation/"+dor.id; //Add your success 
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

                                           window.location = "http://irs.primeramfbank.com/app/liquidation/"+dor.id; //Add your success 
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





                                  <script src="{{ asset('assets/apps/scripts/todo-2.min.js') }} " type="text/javascript"></script>


                                  @endsection

                                  @include('includes.scripts_form')
