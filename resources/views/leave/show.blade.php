@extends('layouts.app')

@section('page_title')Leave Application   @endsection


@section('content')

    <?php

    use App\User;



    Auth()->user()->unreadNotifications->markAsRead();

    ?>



    @include('leave.menu')

        <!-- static -->

<div id="myModal" class="modal">

    <form id="do_reject" action="{{ route('leave.do_reject', ['id' => $leave->id])}}" method="POST">

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















<div class="page-content-wrapper">

        <!-- BEGIN CONTENT BODY -->

        <div class="page-content">

            <!-- BEGIN PAGE HEADER-->



            <h1 class="page-title"> Leave Application Form

                {{--  <small>bootstrap form validation demos using jquery validation plugin</small>--}}

            </h1>

            <div class="page-bar">

                <ol class="breadcrumb breadcrumb-links breadcrumb-light">
                    <li class="breadcrumb-item"><a href="./"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Leave</li>
                </ol>




            </div>



            <div class="row">

                <div class="col-md-12">

                    <!-- BEGIN VALIDATION STATES-->

                    <div class="portlet light portlet-fit portlet-form ">





                        <div class="card-header">

                            <div class="caption">

                                <i class="icon-settings font-dark"></i>

                                <span class="caption-subject font-dark sbold uppercase">Application</span>







                            </div>



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







                            @if(($leave->supervisor_id == "".Auth::user()->ID."") && ($leave->supervisor_action == 0) )



                            <form id="do_approve" action="{{ route('leave.do_approve', ['id' => $leave->id])}}" method="POST"

                                  style="display:initial !important; float:right;">

                                @csrf



                               {{-- <input  type="hidden" name="supervisor_id" value="{{ $leave->supervisor_id }}" >--}}



                            <div class="actions">

                                <div class="mt-action-buttons ">

                                    <div class="btn-group btn-group-circle">



                                        <button type="submit" id="approve_button"   class="btn btn-outline green btn-lg">Approve</button>

                                        <button type="button" id="myBtn" class="btn btn-outline red btn-lg">Reject</button>

                                    </div>



                                </div>

                            </div>

                            </form>

                            @endif







@if(Auth::user()->department == "HR")

                                <form id="do_approve" action="{{ route('leave.do_approve', ['id' => $leave->id])}}" method="POST"

                                      style="display:initial !important; float:right;">

                                    @csrf



                                    {{-- <input  type="hidden" name="supervisor_id" value="{{ $leave->supervisor_id }}" >--}}



                                    <div class="actions">

                                        <div class="mt-action-buttons ">

                                            <div class="btn-group btn-group-circle">



                                                <button type="submit"   class="btn btn-outline green btn-lg">Approve</button>

                                                <button id="myBtn" type="button" class="btn btn-outline red btn-lg" >Reject</button>

                                            </div>



                                        </div>

                                    </div>

                                </form>

                            @endif







                        </div>

                        <div class="card-body







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
  display: none; /* Hidden by default */
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




                            <!-- BEGIN FORM-->

                            <form id="leave_apply" class="form-horizontal" action="{{ route('leave.store')}}" method="post">

                                <div class="form-body">





                                    {{ csrf_field() }}



                                    <div class="form-group">

                                        <label class="control-label col-md-3">Name:

                                            <span class="required"> * </span>

                                        </label>

                                        <div class="col-md-4">

                                            {{User::find($leave->user_id)->name }}

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label class="control-label col-md-3">Leave Category

                                            <span class="required"> * </span>

                                        </label>

                                        <div class="col-md-4">

                                            <select class="form-control select2me" required name="leave_category">

                                                <option value=" {{ ucwords($leave ->leave_category) }} " selected> {{ ucwords($leave ->leave_category) }} </option>

                                                <option value="">Select Leave Category...</option>

                                                <option value="sick">Sick</option>

                                                <option value="casual">Casual</option>

                                                <option value="annual">Annual</option>

                                                <option value="maternity">Maternity</option>

                                                <option value="examination">Examination</option>

                                                <option value="paternity">Paternity</option>

                                                <option value="compassionate">Compassionate</option>

                                                <option value="other">Other</option>



                                            </select>

                                        </div>

                                    </div>







                                    <div class="form-group">

                                        <label class="control-label col-md-3">Duration

                                            <span class="required"> * </span>

                                        </label>

                                        <div class="col-md-4">

                                            {{ $leave ->no_days }} Days

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-md-3">Leave Year

                                            <span class="required"> * </span>

                                        </label>

                                        <div class="col-md-4">

                                            {{ $leave ->leave_year }}

                                        </div>

                                    </div>







                              {{--      <td> {{User::find($leave->user_id)->name }} </td>

                                    <td> {{ ucwords($leave ->leave_category) }} </td>

                                    <td> {{ $leave ->no_days }} Days </td>

                                    <td> {{ Carbon\Carbon::parse($leave->start_date)->format('d-m-Y') }} </td>

                                    <td> {{ Carbon\Carbon::parse($leave->end_date)->format('d-m-Y') }}  </td>

                                    <td> {{User::find($leave->supervisor_id)->name }} </td>

                                    <td> {{User::find($leave->reliever_id)->name }} </td>

                                    <td> {{ Carbon\Carbon::parse($leave->created_at)->format('d-m-Y') }} </td>--}}

                                    {{--  <div class="form-group">

                                          <label class="control-label col-md-3">Leave Type

                                              <span class="required"> * </span>

                                          </label>

                                          <div class="col-md-4">

                                              <select class="form-control select2me" name="type">

                                                  <option value="">Select...</option>

                                                  <option value="full">Full</option>

                                                  <option value="Half">Half</option>

                                                  <option value="short">Short</option>



                                              </select>

                                          </div>

                                      </div>--}}

                                    {{-- <div class="form-group">

                                         <label class="control-label col-md-3">Number of Days

                                             <span class="required"> * </span>

                                         </label>

                                         <div class="col-md-4">

                                             <select class="form-control select2me" name="options2">

                                                 <option value="">Select...</option>

                                                 <option value="Option 1">1</option>

                                                 <option value="Option 2">2</option>

                                                 <option value="Option 3">3</option>



                                             </select>

                                         </div>

                                     </div>--}}



                                    <div class="form-group">

                                        <label class="control-label col-md-3">Start Date

                                            <span class="required"> * </span>

                                        </label>



                                        <div class="col-md-4">

                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">

                                                <input type="text" required class="form-control" readonly name="from"

                                                       value="{{ Carbon\Carbon::parse($leave->start_date)->format('d-m-Y') }}">

                                                        <span class="input-group-btn">

                                                            <button class="btn default" type="button">

                                                                <i class="fa fa-calendar"></i>

                                                            </button>

                                                        </span>

                                            </div>

                                            <!-- /input-group -->



                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label class="control-label col-md-3">Resumption Date

                                            <span class="required"> * </span>

                                        </label>



                                        <div class="col-md-4">

                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">

                                                <input type="text" class="form-control" required readonly name="to" value="{{ Carbon\Carbon::parse($leave->end_date)->format('d-m-Y') }}">

                                                        <span class="input-group-btn">

                                                            <button class="btn default" type="button">

                                                                <i class="fa fa-calendar"></i>

                                                            </button>

                                                        </span>

                                            </div>

                                            <!-- /input-group -->



                                        </div>

                                    </div>















                                    <div class="form-group">

                                        <label class="control-label col-md-3">Name of Supervisor

                                            <span class="required"> * </span>

                                        </label>

                                        <div class="col-md-4">

                                            <select class="form-control select2me" required name="supervisor">

                                                <option value="{{$leave->supervisor_id}}" selected>{{User::find($leave->supervisor_id)->display_name

                                                }}</option>







                                            </select>

                                        </div>

                                    </div>









                                    <div class="form-group">

                                        <label class="control-label col-md-3">Name of Reliever

                                            <span class="required"> * </span>

                                        </label>

                                        <div class="col-md-4">

                                            <select class="form-control select2me" required name="reliever">

                                                <option value="{{$leave->reliever_id}}" selected>{{User::find($leave->reliever_id)->display_name

                                                }}</option>







                                            </select>

                                        </div>

                                    </div>











                                    <div class="form-group">

                                        <label class="col-md-3 control-label">Handover Note

                                            <span class="required"> * </span>

                                        </label>

                                        <div class="col-md-9">







                                            <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">

                                                <thead>

                                                <tr>

                                                    <th> Task </th>

                                                    <th> Status </th>
                                                     <th> Category </th>



                                                </tr>

                                                </thead>



                                                <tbody>











                                                        @foreach ($leave->handover_task as $sample => $data)

                                                        <tr>





                                                            <td>      {{$data['task']}}  </td>

                                                            <td>      {{$data['status']}}  </td>
                                                            @if(isset($data['category']))
                                                            <td>      {{$data['category']}}  </td>
                                                            @endif


                                                        </tr>

                                                        @endforeach

















                                                </tbody>

                                            </table>







                                    </div>

















                                    {{--<div class="form-group">

                                        <label class="control-label col-md-3">Hand Over Note

                                            <span class="required"> * </span>

                                        </label>

                                        <div class="col-md-9">

                                            <textarea class="wysihtml5 form-control" rows="6" name="handover"

                                                      data-error-container="#editor1_error"></textarea>

                                            <div id="editor1_error"> </div>

                                        </div>

                                    </div>--}}

                                    {{--  <div class="form-group last">

                                          <label class="control-label col-md-3">CKEditor

                                              <span class="required"> * </span>

                                          </label>

                                          <div class="col-md-9">

                                              <textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>

                                              <div id="editor2_error"> </div>

                                          </div>

                                      </div>--}}

                                </div>

                              {{--  <div class="form-actions">

                                    <div class="row">

                                        <div class="col-md-offset-3 col-md-9">

                                            <button type="submit" class="btn green">&nbsp;&nbsp;&nbsp;&nbsp; Edit

                                                &nbsp;&nbsp;&nbsp;&nbsp;

                                            </button>



                                        </div>

                                    </div>

                                </div>--}}

                            </form>

                            <!-- END FORM-->

                        </div>

                        <!-- END VALIDATION STATES-->

                    </div>

                </div>

            </div>





        </div>

        <!-- END CONTENT BODY -->









        <script>

            /*using the been here before completed and successful*/

            $(function(){

                $("#do_approve").submit(function(evt){

                    evt.preventDefault();

                $('#approve_button').empty().prepend('Loading...').attr('disabled','disabled');

                    var url = $(this).attr('action');

                    var postData = $(this).serialize();

                    $.post(url, postData, function(dor){

                           $('#approve_button').empty().prepend('Approve').removeAttr('disabled');

                        if (dor.result == 1){



                            $("#do_approve").trigger('reset'); //reset the form



                            swal("Success", dor.message, "success");



                            $("#do_approve").hide(); //hide button

                            theNotification(dor.message);



                        }else{



                            $("#do_approve").trigger('reset'); //reset the form

                            $("#do_approve").hide(); //hide button

                            theNotification(dor.message);

                            swal("Error!", dor.message, "error");

                            /*   //  swal({

                             title: "Good job!",

                             text: dor.message,

                             icon: "success",

                             button: "Aww yiss!",

                             html: true,

                             });*/

                        }

                    }, 'json');



                });

            });





            $(function(){

                $("#do_reject").submit(function(evt){

                    evt.preventDefault();

                    var url = $(this).attr('action');

                    var postData = $(this).serialize();

                    $.post(url, postData, function(dor){

                        if (dor.result == 1){



                            $("#do_reject").trigger('reset'); //reset the form



                            $('.modal').modal('toggle');

                            swal("Success", dor.message, "warning");

$("#myModal").hide(); //hide button

                            $("#do_approve").hide(); //hide button

                            theNotification(dor.message);



                        }else{



                            $("#do_reject").trigger('reset'); //reset the form



                            $('.modal').modal('toggle');

                            swal("Error!", dor.message, "error");



                            $("#do_approve").hide(); //hide button

                            theNotification(dor.message);

                            /*   //  swal({

                             title: "Good job!",

                             text: dor.message,

                             icon: "success",

                             button: "Aww yiss!",

                             html: true,

                             });*/

                        }

                    }, 'json');



                });

            });



        </script>







        <script type="text/javascript">

            function theNotification(message) {

                if (window.Notification) {

                    Notification.requestPermission(function (status) {

                        console.log('Status: ', status);

                        var n = new Notification('Title', {

                            body: message,

                            icon: 'http://primera-africa.com/assets/images/logo.png' // optional

                        });

                    });

                }

                else {

                    alert('Your browser doesn\'t support notifications.');

                }

            }



        </script>





        {{--



            <script type="text/javascript">



                if(window.Notification && Notification.permission !== "denied") {

                    Notification.requestPermission(function(status) {  // status is "granted", if accepted by user

                        var n = new Notification('Title', {

                            body: 'I am the body text!',

                            icon: '/path/to/icon.png' // optional

                        });

                    });

                }



                // Query selector

                var button = document.querySelector('#button');



                // When the button is clicked

                button.addEventListener('click', function () {



                    // If notifications are granted show the notification

                    if (Notification && Notification.permission === "granted") {

                        theNotification();

                    }



                    // If they are not denied (i.e. default)

                    else if (Notification && Notification.permission !== "denied") {



                        // Request permission

                        Notification.requestPermission(function (status) {



                            // Change based on user's decision

                            if (Notification.permission !== status) {

                                Notification.permission = status;

                            }



                            // If it's granted show the notification

                            if (status === "granted") {

                                theNotification();

                            }



                            else {

                                // Back up if the user's browser doesn't support notifications

                            }



                        });



                    }



                    else {

                        // Back up if the user's browser doesn't support notifications

                    }



                });





                window.addEventListener('load', function() {



                    function theNotification() {



                        var n = new Notification("I'm a notification!",  {

                            icon: 'http://www.inserthtml.com/demos/javascript/notification/icon.jpg',

                            tag: 'note',

                            body: 'Notification content...'

                        });

                    }



                    function timeOut() {



                        setTimeout(function() {



                            var a  = document.querySelectorAll('[data-fade]');



                            for(s = 0; s < a.length; ++s) {



                                a[s].remove();



                            }



                            running = false;



                        }, 300);



                    }



                    var running = false;



                    function fallbackNote() {



                        if(running === false) {

                            running = true;



                            var attr = document.createAttribute('data-fade');

                            var at = document.createAttribute('data-fade');

                            var not = document.querySelectorAll('.notification');



                            if(not !== null) {

                                for (i = 0; i < not.length; i++) {

                                    if(!not[i].hasAttribute('data-fade')) {

                                        not[i].setAttributeNode(attr);

                                    }

                                }

                            }



                            var ne = document.createElement('div');



                            ne.className = 'notification';



                            ne.innerHTML = '<h2>I\'m a notification! </h2><div>Notification Content</div><div class="close">&#x2421;</div>';



                            var org = document.querySelector('#container');



                            document.body.insertBefore(ne, org);



                            setTimeout(function() {

                                var a  = document.querySelectorAll('.notification');



                                for(s = 0; s < a.length; ++s) {



                                    a[s].style.top = '60px';



                                    a[s].onclick = function(e) {



                                        if(!this.hasAttribute('data-fade')) {

                                            this.setAttributeNode(at);

                                            timeOut();

                                        }

                                    }

                                }



                            }, 20);



                            timeOut();



                        }

                    }



                    // Query selector

                    var button = document.querySelector('#button');



                    // When the button is clicked

                    button.addEventListener('click', function () {



                        // If notifications are granted show the notification

                        if (Notification && Notification.permission === "granted") {

                            theNotification();

                        }



                        // If they are not denied (i.e. default)

                        else if (Notification && Notification.permission !== "denied") {



                            // Request permission

                            Notification.requestPermission(function (status) {



                                // Change based on user's decision

                                if (Notification.permission !== status) {

                                    Notification.permission = status;

                                }



                                // If it's granted show the notification

                                if (status === "granted") {

                                    theNotification();

                                }



                                else {

                                    fallbackNote();

                                }



                            });



                        }



                        else {

                            fallbackNote();

                        }



                    });





                    // Query selector

                    var button2 = document.querySelector('#button2');



                    button2.addEventListener('click', function() {



                        fallbackNote();



                    });





                });

            </script>

        --}}



        {{-- <script type="text/javascript">

                // add a new post

                $(document).on('click', '#leave_apply', function () {

                    $('.modal-title').text('Add');

                    $('#addModal').modal('show');

                });

                $(document).on('click', '#leave_apply', function () {

                    $.ajax({

                        type: 'POST',

                        url: 'student_class',

                        data: $("#add_kc_form").serialize(),

                        success: function (data) {

                            $('.errorTitle').addClass('hidden');

                            $('.errorContent').addClass('hidden');



                            if ((data.errors)) {

                                setTimeout(function () {

                                    //  $('#addModal').modal('show');

                                    toastr.error('Error occurred trying to Add a Student_class', 'Error Alert', {timeOut: 5000});

                                }, 500);



                                if (data.errors.title) {

                                    $('.errorTitle').removeClass('hidden');

                                    $('.errorTitle').text(data.errors.title);

                                }

                                if (data.errors.content) {

                                    $('.errorContent').removeClass('hidden');

                                    $('.errorContent').text(data.errors.content);

                                }

                            } else {

                                toastr.success('Successfully Posted', 'Success Alert', {timeOut: 5000});

                                $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.title + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-title='" + data.title + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");



                                //table.ajax.reload();   /// reloads the table





                                /* START Closing the form after successful post*/

                                // alert('Thanks');

                                $("#creator-form").hide();

                                //  $("form").trigger('reset'); //reset the form



                                var $window = $(window)

                                var windowSize = $window.width();

                                if (windowSize > 992) {

                                    setTimeout(function () {

                                        $('#table-content-display').show().addClass('animated bounceInRight');

                                    });

                                }

                                else($('#table-content-display').show().removeClass('animated bounce'));



                                $('#table-content-display').show();

                                /*END Closing the form after successful post*/







                            }

                        },

                    });

                });



            </script>--}}

@endsection

@include('includes.scripts_form')
