@extends('layouts.app')
@section('page_title')Fasttrack TAT
 @endsection

 @section('content') 
<!-- BEGIN CONTENT -->
    <?php
use App\User;
?>

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            Fasttrack TAT
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">            Fasttrack TAT
  </a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>            Fasttrack TAT
  </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body



                        <div class="" style="display:none;" id="creator-form">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                       Generate Fasttrack TAT
                                    </h2>
                                    <span>Generate Fasttrack TAT </span> 
                                    <div class="card-header-right" style="padding:30px;">
                                        <a href="#back" id="btn-form-close" class="btn btn-lg red">
                                            <i class="icofont icofont-rounded-left"></i>
                                            << Cancel & Return</a>
                                         </div>
                                    </div>
                                    <div class="card-body
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-12">
                                                <!-- Date card start -->
                                                <div class="card">
                                                    <div class="card-header"></div>
                                                    <div class="card-bodytyle="">
                                                         <form id="leave_apply" class="form-horizontal" action="{{ route('sms.fasttrack')}}" method="POST">
                                                         {{ csrf_field() }}


                                                         <div class="form-group">
                                                            <label class="control-label col-md-3">Title:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text"id="title_add" name = "title"  required placeholder="Title"
                                                                class="form-control" maxlength="100" />

                                                            </div>
                                                        </div>




                                                        <div class="form-group">

                                                         <label class="control-label col-md-3">From:

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

                                                        <label class="control-label col-md-3">To:

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


<br /> <br />

                                                     <div class="col-md-offset-4">
                                                        <button id="submit" type="submit" class="btn btn-primary btn-lg m-b-0">Generate TAT</button>
                                                    </div>



                                                </form>
                                            </div>
                                        </div>
                                        <!-- Date card end -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                      <!--   <div class="" style="display:none;" id="creator-form">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                        Add New SMS PORTAL 
                                    </h2>
                                    <span>Adding new records for SMS PORTAL</span> 
                                    <div class="card-header-right" style="padding:30px;">
                                        <a href="#back" id="btn-form-close" class="btn btn-lg red">
                                            <i class="icofont icofont-rounded-left"></i>
                                            << Cancel & Return</a>
                                            </div>
                                        </div>
                                        <div class="card-body
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                              
                                                    <div class="card">
                                                        <div class="card-header"></div>
                                                        <div class="card-bodytyle="">
                                                            <form id="add_kc_form">
                                                         {{ csrf_field() }}
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="staff_id">staff_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="staff_id_add" name = "staff_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="name">name</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="name_add" name = "name" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="phone">phone</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="phone_add" name = "phone" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="email">email</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="email_add" name = "email" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="cif">cif</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="cif_add" name = "cif" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="message">message</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="message_add" name = "message" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="sent">sent</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="sent_add" name = "sent" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="body">body</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="body_add" name = "body" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other1">other1</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other1_add" name = "other1" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other2">other2</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other2_add" name = "other2" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                               
                                                </div>
                                            </div>
                                            <div class="text-center modal-footer">
                                                <button type="submit" class="btn btn-primary btn-lg m-b-0 add">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                              
                                        <div class="" id="table-content-display">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2>
                                                       FASTTRACK TAT 
                                                    </h2>
                                                    <span>Displaying   FASTTRACK TAT REPORT  </span> 
                                                    <button id="btn-form-create" class="btn btn-lg btn-success" style="margin:30px;" > GENERATE NEW FASTTRACK TAT REPORT  </button>
                                                    <div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
                                                </div>
                                                <div class="card-body
                                                    <div>
                                                        <div id="new-cons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12">
                                                                    <!-- <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>Staff</th>
                                                                                <th>Name</th>
                                                                                
                                                                                
                                                                                <th>BULK CIF</th>
                                                                               
                                                                                <th>Last Update</th>
                                                                                <th>Actions</th>
                                                                                <th>SEND SMS / EMAIL</th>
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="LbDsA3BCz5OtxtJtAMYCHtfPLKn4iTVS4IU9ClTO">
                                                                        </thead>
                                                                        <tbody id="PostContent">
                                                                            @foreach($sms as $sm) 
                                                                            <tr class="item{!!$sm->
                                                                                id!!}" > 
                                                                                <td>{!!$sm->staff_id!!}</td>
                                                                                <td>{!!$sm->name!!}</td>
                                                                                
                                                                                <td>{!!substr($sm->body,0,300)!!}...</td>
                                                                               
                                                                                <td>{!!$sm->updated_at->diffForHumans()!!} </td>
                                                                            <!-     <td>

                                                                                    <button class="edit-modal btn btn-info btn-sm" data-id="{!!$sm->id!!}" data-staff_id="{!!$sm->staff_id!!}" data-name="{!!$sm->name!!}" data-phone="{!!$sm->phone!!}" data-email="{!!$sm->email!!}" data-cif="{!!$sm->cif!!}" data-message="{!!$sm->message!!}" data-sent="{!!$sm->sent!!}" data-body="{!!$sm->body!!}" data-other1="{!!$sm->other1!!}" data-other2="{!!$sm->other2!!}" > Edit </button>
                                                                                    <button class="delete-modal btn btn-danger btn-sm" data-id="{!!$sm->id!!}"> Delete </button>



                                                                                    - <a href="{{ route('sms.populate', $sm->id) }}"><button class="btn btn-success btn-sm" data-id="{!!$sm->id!!}"> Populate T24 </button></a> 
                                                                                       

                                                                                </td> --

                                                                                <td> <form method="post" id="leave_apply_{{$sm->id}}" action="{{ route('sms.populate', $sm->id) }}">  {{ csrf_field() }} <button type="submit" class="btn btn-success btn-sm" id="submit_{{$sm->id}}"> Populate T24 & Send SMS / EMAIL </button></form>
                                                                                </td>
                                                                            </tr>





                                                                            @endforeach 
                                                                        </tbody>
                                                                    </table> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal form to delete a form -->
                                        <!-- Modal form to delete a form -->
                               
                                        <style> .card { box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2); transition: 0.3s; padding:15px; border-radius: 5px; /* 5px rounded corners */ } </style>
                                        <!-- Page body start -->
                                        <!-- Page body end of content before includes of component-->
                                        <!-- Modal form to delete a form -->
                                        @section('scripts') 
                                        <!-- sweet alert js -->








                                        <script type="text/javascript">

    $(document).on('click', '#btn-form-create', function () {
        // alert('Thanks');
        $("#table-content-display").hide();
        $("form").trigger('reset'); //reset the form

        var $window = $(window)
        var windowSize = $window.width();
        if (windowSize > 992) {
            setTimeout(function () {
                $('#creator-form').show().addClass('animated bounceInRight');
            });
        }
        else($('#creator-form').show().removeClass('animated bounce'));

        $('#creator-form').show();
    });

    $(document).on('click', '#btn-form-close', function () {

        // alert('Thanks');
        $("#creator-form").hide();
        $("#edit-form").hide();
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
    });


</script>
                                        <!-- AJAX CRUD operations -->
                                        <script type="text/javascript">
    // add a new post
    $(document).on('click', '.add-modal', function () {
        $('.modal-title').text('Add');
        $('#addModal').modal('show');
    });
    $('.modal-footer').on('click', '.add', function () {
        $.ajax({
            type: 'POST',
            url: 'sm',
            data: $("#add_kc_form").serialize(),
            success: function (data) {
                $('.errorTitle').addClass('hidden');
                $('.errorContent').addClass('hidden');

                if ((data.errors)) {
                    setTimeout(function () {
                        var errorsHtml= '';
                        $.each( data.errors, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>';
                        });
                        toastr.error( errorsHtml, 'Error:', {timeOut: 5000});
                    }, 500);


                } else {
                    toastr.success('Successfully Posted', 'Success Alert', {timeOut: 5000});
                    $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.staff_id + "</td> <td>" + data.name + "</td> <td>" + data.phone + "</td> <td>" + data.email + "</td> <td>" + data.cif + "</td> <td>" + data.message + "</td> <td>" + data.sent + "</td> <td>" + data.body + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff_id='" + data.staff_id + "'   data-name='" + data.name + "'   data-phone='" + data.phone + "'   data-email='" + data.email + "'   data-cif='" + data.cif + "'   data-message='" + data.message + "'   data-sent='" + data.sent + "'   data-body='" + data.body + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");

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

</script>
                                        <script>


    // Edit a post
    $(document).on('click', '.edit-modal', function () {
        //////////////////////////////////////////////////////////////////
        // alert('Thanks');
        $("#table-content-display").hide();
        $("form").trigger('reset'); //reset the form

        var $window = $(window)
        var windowSize = $window.width();
        if (windowSize > 992) {
            setTimeout(function () {
                $('#edit-form').show().addClass('animated bounceInRight');
            });
        }
        else($('#edit-form').show().removeClass('animated bounce'));

        $('#edit-form').show();
        //////////////////////////////////////////////////////////////////

        $('.modal-title').text('Edit');
        $('#id_edit').val($(this).data('id'));
                                                    $('#staff_id_edit').val($(this).data('staff_id'));
                                                    $('#name_edit').val($(this).data('name'));
                                                    $('#phone_edit').val($(this).data('phone'));
                                                    $('#email_edit').val($(this).data('email'));
                                                    $('#cif_edit').val($(this).data('cif'));
                                                    $('#message_edit').val($(this).data('message'));
                                                    $('#sent_edit').val($(this).data('sent'));
                                                    $('#body_edit').val($(this).data('body'));
                                                    $('#other1_edit').val($(this).data('other1'));
                                                    $('#other2_edit').val($(this).data('other2'));
                                                id = $('#id_edit').val();

        // $('#editModal').modal('show');
    });
    $('.modal-footer').on('click', '.edit', function () {
        $.ajax({
            type: 'PUT',
            url: 'sm/' + id,
            data: $("#edit_kc_form").serialize(),
            success: function (data) {
                $('.errorTitle').addClass('hidden');
                $('.errorContent').addClass('hidden');

                if ((data.errors)) {
                    setTimeout(function () {
                        var errorsHtml= '';
                        $.each( data.errors, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>';
                        });
                        toastr.error( errorsHtml, 'Error:', {timeOut: 5000});
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
                    toastr.success('Successfully Updated', 'Success Alert', {timeOut: 5000});
                    $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'> <td>" + data.staff_id + "</td> <td>" + data.name + "</td> <td>" + data.phone + "</td> <td>" + data.email + "</td> <td>" + data.cif + "</td> <td>" + data.message + "</td> <td>" + data.sent + "</td> <td>" + data.body + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff_id='" + data.staff_id + "'   data-name='" + data.name + "'   data-phone='" + data.phone + "'   data-email='" + data.email + "'   data-cif='" + data.cif + "'   data-message='" + data.message + "'   data-sent='" + data.sent + "'   data-body='" + data.body + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");


                    /* START Closing the form after successful post*/
                    // alert('Thanks');
                    $("#edit-form").hide();
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
            }
        });
    });


</script>
                                        <script>

    // Show a post
    $(document).on('click', '.show-modal', function () {
        $('.modal-title').text('Show');
        
        $('#showModal').modal('show');
    });

    // reloading data from table


    // delete a post
    $(document).on('click', '.delete-modal', function () {
        $('.modal-title').text('Delete');
        $('#id_delete').val($(this).data('id'));
                        $('#deleteModal').modal('show');
                        id = $('#id_delete').val();

    });
    $('.modal-footer').on('click', '.delete', function () {
        $.ajax({
            type: 'DELETE',
            url: 'sm/' + id,
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function (data) {
                toastr.success('Successfully deleted', 'Success Alert', {timeOut: 5000});
                $('.item' + data['id']).remove();
            }
        });
    });
</script>
                                        @endsection @section('styles') 
                                        <!-- sweet alert framework -->
                                        <link rel="stylesheet" type="text/css" href="http://pirs.primera/app/bower_components/sweetalert/dist/sweetalert.css">
                                        <!-- animation nifty modal window effects css -->
                                        <link rel="stylesheet" type="text/css" href="http://pirs.primera/app/assets/css/component.css">
                                        @endsection 
                                        <!-- Page body start -->
                                       
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <script type="text/javascript">

    $(document).ready(function () {


        //$(this).dataTable().fnClearTable();
        // $(this).dataTable().fnDestroy();

    });
</script>
                @endsection
                @include('includes.scripts_form')
