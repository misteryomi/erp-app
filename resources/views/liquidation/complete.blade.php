@extends('layouts.app') 
@section('page_title') COMPLETED LIQUIDATION AND PART LIQUIDATION  @endsection

@section('content') 
<?php
use App\User;
?>
<!-- BEGIN CONTENT -->

@include('liquidation.menu')

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            Liquidation 
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">Liquidation </a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>Liquidation </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body
                        
                                        <div class="" id="table-content-display">
                                            <div class="card">
                                           
                                                <div class="card-header">
                                                    <h2>
                                                        COMPLETED LIQUIDATION
                                                    </h2>
                                                    <span>Displaying Completed Liquidation</span> 
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
                                                                                 <th>Actions</th>
                                                                                <th>Staff / RO</th>
                                                                                <th>Name of Customer</th>
                                                                                <th>Amount Paid</th>
                                                                                 <th>Operations</th>
                                                                               <th>CAD</th>
                                                                                <th>Date Paid</th>
                                                                                <th>Payee Name </th>
                                                                                <th>Approved_by (OPS)</th>
                                                                                <th>Approved By (CAD)</th>
                                                                                <th>Liquidation Option</th>
                                                                                <!-- <th>documents</th> -->
                                                                                <th>Product Type</th>
                                                                                <th>Amount Comfirmed 
                                                                                By OPS</th>
                                                                                <th>LD </th>
                                                                                <th>LIQUI TYPE OPS</th>
                                                                                <th>T24 ACC NO</th>
                                                                                <!-- <th>approved_by_ops</th>
                                                                                <th>approved_by_cad</th>
                                                                                <th>status_ops</th>
                                                                                <th>status_cad</th> -->
                                                                                <th>Comments</th>
                                                                                <!-- <th>other1</th>
                                                                                <th>other2</th>
                                                                                <th>other3</th> -->
                                                                                <th>Last Update</th>
                                                                               
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="fi6NeDrIyn5A9MzAXGEQ4rwSCNyadGZwB8qwsg9S">
                                                                        </thead>
                                                                        <tbody id="PostContent">
                                                                            @foreach($liquidations as $liquidation) 
                                                                            <tr class="item{!!$liquidation->
                                                                                id!!}" > 

                                                                                 @if($user_permission_group == 'sales')
                                                                                 <td>
                                                                                    <a href="{{ route('liquidation.show', $liquidation->id) }}"><button class="btn btn-warning btn-sm" data-id="{!!$liquidation->id!!}"> View </button></a>
                                                                                   <!--  <button class="edit-modal btn btn-info btn-sm" data-id="{!!$liquidation->id!!}" data-staff_id="{!!$liquidation->staff_id!!}" data-customer_name="{!!$liquidation->customer_name!!}" data-amount_paid="{!!$liquidation->amount_paid!!}" data-date_paid="{!!$liquidation->date_paid!!}" data-payee="{!!$liquidation->payee!!}" data-liquidation_type="{!!$liquidation->liquidation_type!!}" data-documents="{!!$liquidation->documents!!}" data-product_type="{!!$liquidation->product_type!!}" data-amount_confirmed="{!!$liquidation->amount_confirmed!!}" data-ld="{!!$liquidation->ld!!}" data-liquidation_type_ops="{!!$liquidation->liquidation_type_ops!!}" data-t24_acc_no="{!!$liquidation->t24_acc_no!!}" data-approved_by_ops="{!!$liquidation->approved_by_ops!!}" data-approved_by_cad="{!!$liquidation->approved_by_cad!!}" data-status_ops="{!!$liquidation->status_ops!!}" data-status_cad="{!!$liquidation->status_cad!!}" data-comment="{!!$liquidation->comment!!}" data-other1="{!!$liquidation->other1!!}" data-other2="{!!$liquidation->other2!!}" data-other3="{!!$liquidation->other3!!}" > Edit </button> -->
                                                                                    <!-- <button class="delete-modal btn btn-danger btn-sm" data-id="{!!$liquidation->id!!}"> Delete </button> -->
                                                                                </td>
                                                                                @else
                                                                                 <td>
                                                                                 <a href="{{ route('liquidation.show', $liquidation->id) }}"><button class="btn btn-success btn-sm" data-id="{!!$liquidation->id!!}"> View >> </button></a>
                                                                                  </td>
                                                                                @endif
                                                                                <td> {{ User::find($liquidation->staff_id)->display_name   }} </td>
                                                                                <td>{!!$liquidation->customer_name!!}</td>
                                                                                <td>{!!$liquidation->amount_paid!!}</td>
                                                                                 <td> @if ($liquidation->status_ops == 1)
                                                                                 <span style='color:green; font-weight: bold;'>Approved</span>
                                                                                 @elseif($liquidation->status_ops == 2)
                                                                                 <span style='color:red; font-weight: bold;'>Rejected</span>
                                                                                 @else
                                                                                 <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                                                                 @endif
                                                                             </td>
                                                                             <td> @if ($liquidation->status_cad == 1)
                                                                                 <span style='color:green; font-weight: bold;'>Approved</span>
                                                                                 @elseif($liquidation->status_cad == 2)
                                                                                 <span style='color:red; font-weight: bold;'>Rejected</span>
                                                                                 @else
                                                                                 <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                                                                 @endif
                                                                             </td>
                                                                                <td>{!!$liquidation->date_paid!!}</td>
                                                                                <td>{!!$liquidation->payee!!}</td>
                                                                                  <td style="color:green"> @if($liquidation->approved_by_ops != "") {{ User::find($liquidation->approved_by_ops)->display_name   }}  @endif</td>
                                                                                
                            
                                                                                <td style="color:green"> @if($liquidation->approved_by_cad != "") {{ User::find($liquidation->approved_by_cad)->display_name   }}  @endif </td>

                                                                                <td>{!!$liquidation->liquidation_type!!}</td>
                                                                                <!-- <td>{!!$liquidation->documents!!}</td> -->
                                                                                <td>{!!$liquidation->product_type!!}</td>
                                                                                <td>{!!$liquidation->amount_confirmed!!}</td>
                                                                                <td>{!!$liquidation->ld!!}</td>
                                                                                <td>{!!$liquidation->liquidation_type_ops!!}</td>
                                                                                <td>{!!$liquidation->t24_acc_no!!}</td>
                                                                                <!-- <td>{!!$liquidation->approved_by_ops!!}</td>
                                                                                <td>{!!$liquidation->approved_by_cad!!}</td>
                                                                                <td>{!!$liquidation->status_ops!!}</td>
                                                                                <td>{!!$liquidation->status_cad!!}</td> -->
                                                                                <td>{!!$liquidation->comment!!}</td>
                                                                                <!-- <td>{!!$liquidation->other1!!}</td>
                                                                                <td>{!!$liquidation->other2!!}</td>
                                                                                <td>{!!$liquidation->other3!!}</td> -->
                                                                                <td>{!!$liquidation->updated_at->diffForHumans()!!} </td>
                                                                               
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
                                                        <p class="text-center"> Do you want to delete this Liquidation record </p>
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
            url: 'liquidation',
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
                    $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.staff_id + "</td> <td>" + data.customer_name + "</td> <td>" + data.amount_paid + "</td> <td>" + data.date_paid + "</td> <td>" + data.payee + "</td> <td>" + data.liquidation_type + "</td> <td>" + data.documents + "</td> <td>" + data.product_type + "</td> <td>" + data.amount_confirmed + "</td> <td>" + data.ld + "</td> <td>" + data.liquidation_type_ops + "</td> <td>" + data.t24_acc_no + "</td> <td>" + data.approved_by_ops + "</td> <td>" + data.approved_by_cad + "</td> <td>" + data.status_ops + "</td> <td>" + data.status_cad + "</td> <td>" + data.comment + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td> <td>" + data.other3 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff_id='" + data.staff_id + "'   data-customer_name='" + data.customer_name + "'   data-amount_paid='" + data.amount_paid + "'   data-date_paid='" + data.date_paid + "'   data-payee='" + data.payee + "'   data-liquidation_type='" + data.liquidation_type + "'   data-documents='" + data.documents + "'   data-product_type='" + data.product_type + "'   data-amount_confirmed='" + data.amount_confirmed + "'   data-ld='" + data.ld + "'   data-liquidation_type_ops='" + data.liquidation_type_ops + "'   data-t24_acc_no='" + data.t24_acc_no + "'   data-approved_by_ops='" + data.approved_by_ops + "'   data-approved_by_cad='" + data.approved_by_cad + "'   data-status_ops='" + data.status_ops + "'   data-status_cad='" + data.status_cad + "'   data-comment='" + data.comment + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   data-other3='" + data.other3 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");

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
        $('#customer_name_edit').val($(this).data('customer_name'));
        $('#amount_paid_edit').val($(this).data('amount_paid'));
        $('#date_paid_edit').val($(this).data('date_paid'));
        $('#payee_edit').val($(this).data('payee'));
        $('#liquidation_type_edit').val($(this).data('liquidation_type'));
        $('#documents_edit').val($(this).data('documents'));
        $('#product_type_edit').val($(this).data('product_type'));
        $('#amount_confirmed_edit').val($(this).data('amount_confirmed'));
        $('#ld_edit').val($(this).data('ld'));
        $('#liquidation_type_ops_edit').val($(this).data('liquidation_type_ops'));
        $('#t24_acc_no_edit').val($(this).data('t24_acc_no'));
        $('#approved_by_ops_edit').val($(this).data('approved_by_ops'));
        $('#approved_by_cad_edit').val($(this).data('approved_by_cad'));
        $('#status_ops_edit').val($(this).data('status_ops'));
        $('#status_cad_edit').val($(this).data('status_cad'));
        $('#comment_edit').val($(this).data('comment'));
        $('#other1_edit').val($(this).data('other1'));
        $('#other2_edit').val($(this).data('other2'));
        $('#other3_edit').val($(this).data('other3'));
        id = $('#id_edit').val();

        // $('#editModal').modal('show');
    });
    $('.modal-footer').on('click', '.edit', function () {
        $.ajax({
            type: 'PUT',
            url: 'liquidation/' + id,
            data: $("#edit_kc_form").serialize(),
            processData: false,
            contentType: false, 
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
                    $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'> <td>" + data.staff_id + "</td> <td>" + data.customer_name + "</td> <td>" + data.amount_paid + "</td> <td>" + data.date_paid + "</td> <td>" + data.payee + "</td> <td>" + data.liquidation_type + "</td> <td>" + data.documents + "</td> <td>" + data.product_type + "</td> <td>" + data.amount_confirmed + "</td> <td>" + data.ld + "</td> <td>" + data.liquidation_type_ops + "</td> <td>" + data.t24_acc_no + "</td> <td>" + data.approved_by_ops + "</td> <td>" + data.approved_by_cad + "</td> <td>" + data.status_ops + "</td> <td>" + data.status_cad + "</td> <td>" + data.comment + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td> <td>" + data.other3 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff_id='" + data.staff_id + "'   data-customer_name='" + data.customer_name + "'   data-amount_paid='" + data.amount_paid + "'   data-date_paid='" + data.date_paid + "'   data-payee='" + data.payee + "'   data-liquidation_type='" + data.liquidation_type + "'   data-documents='" + data.documents + "'   data-product_type='" + data.product_type + "'   data-amount_confirmed='" + data.amount_confirmed + "'   data-ld='" + data.ld + "'   data-liquidation_type_ops='" + data.liquidation_type_ops + "'   data-t24_acc_no='" + data.t24_acc_no + "'   data-approved_by_ops='" + data.approved_by_ops + "'   data-approved_by_cad='" + data.approved_by_cad + "'   data-status_ops='" + data.status_ops + "'   data-status_cad='" + data.status_cad + "'   data-comment='" + data.comment + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   data-other3='" + data.other3 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");


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
            url: 'liquidation/' + id,
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


@include('includes.scripts_table')