@extends('layouts.app') @section('content') 


@section('page_title')Account Statement  @endsection


<?php
use App\User;

use App\Card_mandate;

use Carbon\Carbon;
?>

<style type="text/css">
    #featuredbox{

        display: none!important; 
        visibility: hidden!important;
    }
</style>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            Account Statement 
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">Accountstatement </a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>Accountstatement </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body
                        <div class="" style="display:none;" id="creator-form">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                        Add New Account Statement
                                    </h2>
                                    <span>Adding new records for Accountstatement</span> 
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
                                                            <form id="add_kc_form">
                                                               {{ csrf_field() }}
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="staff">staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="staff_add" name = "staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="accout_no">accout_no</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="accout_no_add" name = "accout_no" type="text" class="form-control">
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
                                                                        <label class="col-form-label" for="customer_name">customer_name</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_name_add" name = "customer_name" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_cif">customer_cif</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_cif_add" name = "customer_cif" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="opening_balance">opening_balance</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="opening_balance_add" name = "opening_balance" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="closing_balance">closing_balance</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="closing_balance_add" name = "closing_balance" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="transaction_count">transaction_count</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="transaction_count_add" name = "transaction_count" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="start_date">start_date</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="start_date_add" name = "start_date" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="end_date">end_date</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="end_date_add" name = "end_date" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="cust_email">cust_email</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="cust_email_add" name = "cust_email" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="cust_phone">cust_phone</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="cust_phone_add" name = "cust_phone" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="others">others</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="others_add" name = "others" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- Date card end -->
                                                </div>
                                            </div>
                                            <div class="text-center modal-footer">
                                                <button type="submit" class="btn btn-primary btn-lg m-b-0 add">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="display:none;" id="edit-form">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2>
                                                Editing accountstatement
                                            </h2>
                                            <span>Editing accountstatement</span> 
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
                                                                    <form id="edit_kc_form">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" class="form-control" id="id_edit" disabled>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="staff">staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="staff_edit" name = "staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="accout_no">accout_no</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="accout_no_edit" name = "accout_no" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="body">body</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="body_edit" name = "body" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_name">customer_name</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_name_edit" name = "customer_name" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_cif">customer_cif</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_cif_edit" name = "customer_cif" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="opening_balance">opening_balance</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="opening_balance_edit" name = "opening_balance" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="closing_balance">closing_balance</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="closing_balance_edit" name = "closing_balance" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="transaction_count">transaction_count</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="transaction_count_edit" name = "transaction_count" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="start_date">start_date</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="start_date_edit" name = "start_date" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="end_date">end_date</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="end_date_edit" name = "end_date" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="cust_email">cust_email</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="cust_email_edit" name = "cust_email" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="cust_phone">cust_phone</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="cust_phone_edit" name = "cust_phone" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="others">others</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="others_edit" name = "others" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- Date card end -->
                                                        </div>
                                                    </div>
                                                    <div class="text-center modal-footer">
                                                        <button type="submit" class="btn btn-primary btn-lg m-b-0 edit">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" id="table-content-display">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2>
                                                        Account Statement
                                                    </h2>
                                                    <span>Displaying Account Statement</span> 
                                                    <button id="btn-form-create" class="btn btn-lg btn-success" style="margin:30px;" > Generate Account Statement </button>
                                                    <div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
                                                </div>
                                                <div class="card-body
                                                    <div>
                                                        <div id="new-cons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12">
                                                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>Staff</th>
                                                                                <th>Accout No</th>
                                                                                
                                                                                <th>Customer Name</th>
                                                                                <th>Customer CIF</th>
                                                                                <th>Opening Balance</th>
                                                                                <th>Closing Balance</th>
                                                                                <th>Count</th>
                                                                                <th>Start Date</th>
                                                                                <th>End Date</th>
                                                                                <th>Email</th>
                                                                                <th>Phone</th>
                                                                              
                                                                                <th>Last Update</th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="McMoSxDAKomaonZJGhR8O9pz03y7AjvezVEvV07Y">
                                                                        </thead>
                                                                        <tbody id="PostContent">
                                                                            @foreach($accountstatements as $accountstatement) 
                                                                            <tr class="item{!!$accountstatement->
                                                                                id!!}" > 
                                                                                <td>{{ User::find($accountstatement->staff)->display_name   }}</td>
                                                                                <td>{!!$accountstatement->accout_no!!}</td>
                                                                                
                                                                                <td>{!!$accountstatement->customer_name!!}</td>
                                                                                <td>{!!$accountstatement->customer_cif!!}</td>
                                                                                <td>{!!$accountstatement->opening_balance!!}</td>
                                                                                <td>{!!$accountstatement->closing_balance!!}</td>
                                                                                <td>{!!$accountstatement->transaction_count!!}</td>
                                                                                <td>{!!$accountstatement->start_date!!}</td>
                                                                                <td>{!!$accountstatement->end_date!!}</td>
                                                                                <td>{!!$accountstatement->cust_email!!}</td>
                                                                                <td>{!!$accountstatement->cust_phone!!}</td>
                                                                                
                                                                                <td>{!!$accountstatement->updated_at->diffForHumans()!!} </td>
                                                                                <td>
                                                                                    <a href="{{ route('accountstatement.show', $accountstatement->id) }}"><button  class="btn btn-success btn-sm">View & Download
                                                                    </button></a>

                                                                                   <!--  <button class="edit-modal btn btn-info btn-sm" data-id="{!!$accountstatement->id!!}" data-staff="{!!$accountstatement->staff!!}" data-accout_no="{!!$accountstatement->accout_no!!}" data-body="{!!$accountstatement->staff!!}" data-customer_name="{!!$accountstatement->customer_name!!}" data-customer_cif="{!!$accountstatement->customer_cif!!}" data-opening_balance="{!!$accountstatement->opening_balance!!}" data-closing_balance="{!!$accountstatement->closing_balance!!}" data-transaction_count="{!!$accountstatement->transaction_count!!}" data-start_date="{!!$accountstatement->start_date!!}" data-end_date="{!!$accountstatement->end_date!!}" data-cust_email="{!!$accountstatement->cust_email!!}" data-cust_phone="{!!$accountstatement->cust_phone!!}" data-others="{!!$accountstatement->others!!}" > Edit </button> -->
                                                                                    <button class="delete-modal btn btn-danger btn-sm" data-id="{!!$accountstatement->id!!}"> Delete </button>
                                                                                </td>
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
                                        <!-- Modal form to delete a form -->
                                        <!-- Modal form to delete a form -->
                                        <div id="deleteModal" class="modal fade bs-modal-sm" role="dialog" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-center"> Do you want to delete this Accountstatement record </p>
                                                        <br/>
                                                        <form>
                                                            <input type="hidden" class="form-control" id="id_delete" disabled>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger delete" data-dismiss="modal"> <span id="" class='glyphicon glyphicon-trash'></span> Delete </button>
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal"> <span class='glyphicon glyphicon-remove'></span> Close </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <style> .card { box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2); transition: 0.3s; padding:15px; border-radius: 5px; /* 5px rounded corners */ } </style>
                                        <!-- Page body start -->
                                        <!-- Page body end of content before includes of component-->
                                        <!-- Modal form to delete a form -->
                                        @section('scripts') 
                                        <!-- sweet alert js -->
                                        <script src="http://pirs.primera/app/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
                                        <link href="http://pirs.primera/app/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
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
            url: 'accountstatement',
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
                    $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.staff + "</td> <td>" + data.accout_no + "</td> <td>" + data.body + "</td> <td>" + data.customer_name + "</td> <td>" + data.customer_cif + "</td> <td>" + data.opening_balance + "</td> <td>" + data.closing_balance + "</td> <td>" + data.transaction_count + "</td> <td>" + data.start_date + "</td> <td>" + data.end_date + "</td> <td>" + data.cust_email + "</td> <td>" + data.cust_phone + "</td> <td>" + data.others + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff='" + data.staff + "'   data-accout_no='" + data.accout_no + "'   data-body='" + data.body + "'   data-customer_name='" + data.customer_name + "'   data-customer_cif='" + data.customer_cif + "'   data-opening_balance='" + data.opening_balance + "'   data-closing_balance='" + data.closing_balance + "'   data-transaction_count='" + data.transaction_count + "'   data-start_date='" + data.start_date + "'   data-end_date='" + data.end_date + "'   data-cust_email='" + data.cust_email + "'   data-cust_phone='" + data.cust_phone + "'   data-others='" + data.others + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");

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
                                                    $('#staff_edit').val($(this).data('staff'));
                                                    $('#accout_no_edit').val($(this).data('accout_no'));
                                                    $('#body_edit').val($(this).data('body'));
                                                    $('#customer_name_edit').val($(this).data('customer_name'));
                                                    $('#customer_cif_edit').val($(this).data('customer_cif'));
                                                    $('#opening_balance_edit').val($(this).data('opening_balance'));
                                                    $('#closing_balance_edit').val($(this).data('closing_balance'));
                                                    $('#transaction_count_edit').val($(this).data('transaction_count'));
                                                    $('#start_date_edit').val($(this).data('start_date'));
                                                    $('#end_date_edit').val($(this).data('end_date'));
                                                    $('#cust_email_edit').val($(this).data('cust_email'));
                                                    $('#cust_phone_edit').val($(this).data('cust_phone'));
                                                    $('#others_edit').val($(this).data('others'));
                                                id = $('#id_edit').val();

        // $('#editModal').modal('show');
    });
    $('.modal-footer').on('click', '.edit', function () {
        $.ajax({
            type: 'PUT',
            url: 'accountstatement/' + id,
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
                    $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'> <td>" + data.staff + "</td> <td>" + data.accout_no + "</td> <td>" + data.body + "</td> <td>" + data.customer_name + "</td> <td>" + data.customer_cif + "</td> <td>" + data.opening_balance + "</td> <td>" + data.closing_balance + "</td> <td>" + data.transaction_count + "</td> <td>" + data.start_date + "</td> <td>" + data.end_date + "</td> <td>" + data.cust_email + "</td> <td>" + data.cust_phone + "</td> <td>" + data.others + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff='" + data.staff + "'   data-accout_no='" + data.accout_no + "'   data-body='" + data.body + "'   data-customer_name='" + data.customer_name + "'   data-customer_cif='" + data.customer_cif + "'   data-opening_balance='" + data.opening_balance + "'   data-closing_balance='" + data.closing_balance + "'   data-transaction_count='" + data.transaction_count + "'   data-start_date='" + data.start_date + "'   data-end_date='" + data.end_date + "'   data-cust_email='" + data.cust_email + "'   data-cust_phone='" + data.cust_phone + "'   data-others='" + data.others + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");


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
            url: 'accountstatement/' + id,
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