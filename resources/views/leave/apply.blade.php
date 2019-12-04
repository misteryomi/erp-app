@extends('layouts.app')

@section('page_title')Leave Application  @endsection

@section('content')


<?php
use App\User;


use Carbon\Carbon;
?>


@include('leave.menu')

<div class="page-content-wrapper">

    <!-- BEGIN CONTENT BODY -->

    <div class="page-content">

        <!-- BEGIN PAGE HEADER-->



        <div class="page-bar">


                <ol class="breadcrumb breadcrumb-links breadcrumb-light">
                        <li class="breadcrumb-item"><a href="./"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Leave</li>
                    </ol>


            <div class="page-toolbar">

                <div class="btn-group pull-right">



                </div>

            </div>

        </div>

        <!-- END PAGE HEADER-->


            <div class="row">

                <div class="col-md-12">

                    <!-- BEGIN VALIDATION STATES-->

                    <div class="card">

                        <div class="card-header">

                            <div class="caption">

                                <i class="icon-settings font-dark"></i>

                                <span class="caption-subject font-dark sbold uppercase">Application</span>

                            </div>

                            <div class="actions">



                            </div>

                        </div>

                        <div class="card-body

                            <!-- BEGIN FORM-->

                            <form id="leave_apply" class="form-horizontal" action="{{ route('leave.store')}}" method="post">

                                <div class="form-body">



                                    {{--<div class="form-group">

                                        <label class="control-label col-md-3">Leave Type

                                            <span class="required"> * </span>

                                        </label>

                                        <div class="col-md-4">

                                            <input type="text" name="name" data-required="1" class="form-control" /> </div>

                                        </div>--}}



                                        {{ csrf_field() }}



                                        <div class="form-group">

                                            <label class="control-label col-md-3">Leave Category

                                                <span class="required"> * </span>

                                            </label>

                                            <div class="col-md-4">

                                                <select class="form-control select2me" required name="leave_category">

                                                    <option value="">Select Leave Category...</option>

                                                    <option value="sick">Sick</option>

                                                   <!--  <option value="casual">Casual</option> -->

                                                    <option value="annual">Annual</option>

                                                    <option value="maternity">Maternity</option>

                                                    <option value="examination">Examination</option>

                                                    <option value="paternity">Paternity</option>

                                                    <option value="compassionate">Compassionate</option>

                                                  <!--  <option value="other">Other</option> -->



                                                </select>

                                            </div>

                                        </div>





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


<!--
<div class="form-group">
<label class="control-label col-md-3">Date Range</label>
<div class="col-md-4">
<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
<input type="text" class="form-control" name="from">
<span class="input-group-addon"> to </span>
<input type="text" class="form-control" name="to"> </div>
                                                    - /input-group --
                                                    <span class="help-block"> Select date range </span>
                                                    </div>
                                                    </div>
                                                -->





                                                <div class="form-group">

                                                   <label class="control-label col-md-3">Start Date

                                                       <span class="required"> * </span>

                                                   </label>



                                                   <div class="col-md-4">

                                                       <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">

                                                           <input type="text" required class="form-control" readonly name="from">

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

                                                        <input type="text" class="form-control" required readonly name="to">

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

                                                <label class="control-label col-md-3">Leave Year

                                                    <span class="required"> * </span>

                                                </label>

                                                <div class="col-md-4">

                                                    <select class="form-control select2me" required name="leave_year">


                                                        <?php
                                                        $carbon = new Carbon('now');

                                                        $carbon_new  = new Carbon('now');
                                                        $dt = new Carbon('now');
                                                        //$dt      = Carbon::now();
                                                                                                                          $exact_year =  $carbon->year;  //$thisyear->format('Y');

                                                                    $thisyear = $carbon->startOfYear();         // 2012-01-31 23:59:59
                                                                    $lastyear =  $dt->subYear(1);

                                                                    $check_year =  $thisyear->addMonths(3);

                                                                     $exact_year_dt =  $dt->year;  //$thisyear->format('Y');
                                                                     if($carbon_new->lessThanOrEqualTo($check_year)   ){

                                                                        $options = '<option value="'.$exact_year_dt.'" >'.$exact_year_dt.' (expires on '.$check_year->format('D d M').' )</option>  <option value="'.$exact_year.'" selected>'.$exact_year.'</option>';
                                                                    }else
                                                                    {
                                                                        $options = '<option value="'.$exact_year.'" selected>'.$exact_year.'</option>';
                                                                    }

                                                                    echo "$options";
                                                                    ?>







                                                                </select>

                                                            </div>

                                                        </div>








                                                        <div class="form-group">

                                                            <label class="control-label col-md-3">Name of Supervisor

                                                                <span class="required"> * </span>

                                                            </label>

                                                            <div class="col-md-4">

                                                                <select class="form-control select2me" required name="supervisor">

                                                                    <option value="">Select...</option>

                                                                    @foreach($users as $user)

                                                                    <option value="{{ $user->ID }}">{{ $user->display_name }}</option>

                                                                    @endforeach





                                                                </select>

                                                            </div>

                                                        </div>









                                                        <div class="form-group">

                                                            <label class="control-label col-md-3">Name of Reliever

                                                                <span class="required"> * </span>

                                                            </label>

                                                            <div class="col-md-4">

                                                                <select class="form-control select2me" required name="reliever">

                                                                    <option value="">Select...</option>

                                                                    @foreach($users as $user)

                                                                    <option value="{{ $user->ID }}">{{ $user->display_name }}</option>

                                                                    @endforeach





                                                                </select>

                                                            </div>

                                                        </div>












                                                        <div class="form-group">

                                                            <label class="col-md-3 control-label">Handover Note

                                                                <span class="required"> * </span>

                                                            </label>

                                                            <div class="col-md-9">

                                                                <div class="mt-repeater">

                                                                    <div data-repeater-list="handover">

                                                                        <div data-repeater-item class="row">

                                                                            <div class="col-md-4">

                                                                                <label class="control-label">Task</label>

                                                                                <input type="text" name="task" required placeholder="Task"

                                                                                class="form-control" /> </div>

                                                                                <div class="col-md-5">

                                                                                    <label class="control-label">Status</label>

                                                                                    <textarea name ="status" type="text" required

                                                                                    placeholder="Status"

                                                                                    class="form-control"

                                                                                    ></textarea>

                                                                                </div>
                                                                                <div class="col-md-2">

                                                                                    <label class="control-label">Category</label>

                                                                                    <select class="form-control" style="font-size: 12px;" name="category">



                                                                                        <option value="SPECIFIC TASK">SPECIFIC TASK</option>

                                                                                        <option value="OUTSTANDINGS OR DELIVERABLES">OUTSTANDINGS OR DELIVERABLES</option>

                                                                                        <option value="ISSUES AWAITING APPROVAL">ISSUES AWAITING APPROVAL</option>
                                                                                        <option value="ISSUES APPROVED AWAITING IMPLEMENTATION">ISSUES APPROVED AWAITING IMPLEMENTATION</option>
                                                                                        <option value="OUTSTANDING LOANS - SALES STAFF">OUTSTANDING LOANS - (SALES STAFF)</option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-1">

                                                                                    <label class="control-label">Del</label>

                                                                                    <a href="javascript:;" data-repeater-delete class="btn btn-danger">

                                                                                        x

                                                                                    </a>

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <hr>

                                                                        <a style="float:right; margin-right: 30px;" href="javascript:;"

                                                                        data-repeater-create

                                                                        class="btn btn-danger

                                                                        mt-repeater-add">

                                                                        <i class="fa fa-plus"></i> Add More Task</a>

                                                                        <br>

                                                                        <br> </div>

                                                                    </div>

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

                                                            <div class="form-actions">

                                                                <div class="row">

                                                                    <div class="col-md-offset-3 col-md-9">

                                                                        <button id="submit" type="submit" class="btn btn-success btn-lg">&nbsp;&nbsp;&nbsp;&nbsp; Apply &nbsp;&nbsp;&nbsp;&nbsp;

                                                                        </button>



                                                                    </div>

                                                                </div>

                                                            </div>

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

                                          $("#leave_apply").submit(function(evt){

                                           evt.preventDefault();

                                           $('#submit').empty().prepend('Loading...').attr('disabled','disabled');

                                           var url = $(this).attr('action');

                                           var postData = $(this).serialize();

                                           $.post(url, postData, function(dor){

                                            $('#submit').empty().prepend('Apply').removeAttr('disabled');

                                            if (dor.result == 1){



          $("#leave_apply").trigger('reset'); //reset the form



          swal("Success", dor.message, "success");

          theNotification(dor.message);



      }else{

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

</div>   </div>


<!-- <script src="{{ asset('assets/pages/scripts/components-date-time-pickers.min.js') }}" type="text/javascript"></script>
-->
@endsection

@include('includes.scripts_form')


