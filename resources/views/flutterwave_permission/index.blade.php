@extends('layouts.app') @section('content') 
@section('page_title')Staff Permission / Privilege @endsection

<?php
    use App\User;
    ?>
<!-- BEGIN CONTENT -->

<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
<!-- BEGIN PAGE HEADER-->
<h1 class="page-title">
Staff Permission
</h1>
<div class="page-bar">
<ul class="page-breadcrumb">
<li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
<li> <a href="#">Staff Permission </a> </li>
</ul>
</div>
<div class="row">
<div class="col-md-12">
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="card">
<div class="card-header">
<div class="caption"> <i class="fa fa-globe"></i>Staff Permission </div>
<div class="actions"></div>
</div>
<div class="card-body
<div class="" style="display:none;" id="creator-form">
<div class="card">
<div class="card-header">
<h2>
Add New Staff Permission
</h2>
<span>Adding new records for Staff Permission</span>
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
<form id="add_kc_form" class="form-horizontal" >

{{ csrf_field() }}


<div class="form-group">
<div class="col-md-3">

<label class="control-label col-md-3">Select Staff
</label>
</div>
<div class="col-md-4">
<select class="form-control select2me" required  id="staff_add" name = "staff" >
<option value="">Select...</option>
@foreach($users as $user)
<option value="{{ $user->ID }}">{{ $user->display_name   }}</option>
@endforeach


</select>
</div>
</div>


<div class=" form-group">
<div class="col-md-3">
<label class="control-label col-md-3">Select Staff Department</label>
</div>
<div class="col-md-4">


<select class="form-control select2me" required id="staff_department_add" name = "staff_department">
<option value="">Select Department</option>
<option value="sales">Sales</option>
<option value="operations">Operations</option>
<option value="recovery">Recovery</option>
<option value="cad">CAD</option>
<option value="cap">CAP</option>
<option value="it">IT</option>
<option value="finance">Finance</option>
<option value="strategy">Strategy</option>
<option value="internal_control">Internal Control</option>
<option value="others">Others</option>
</select>

</div>
</div>

<div class=" form-group">
<div class="col-md-3">
<label class="control-label col-md-3">Assign Permission</label>
</div>
<div class="col-md-4">

<select class="form-control select2me" required id="staff_permission_add" name = "staff_permission">
<option value="">Select Permission</option>
<option value="view">View</option>
<option value="set_mandate">Set Mandate</option>
<option value="posting">Posting</option>
<option value="liquidation">Liquidation</option>
<option value="mandate_authorizer">Mandate Authorizer</option>
<option value="mandate_inputter">Mandate Inputter</option>
<option value="create">View and Create / Edit</option>
<option value="delete">View , Create and Delete</option>

</select>
</div>
</div>


<input id="staff_status_add" name = "staff_status" type="hidden" value="active" class="form-control">


<input id="permitted_by_add" name = "permitted_by" type="hidden" value="{{ Auth::user()->ID }}" class="form-control">


<!--
<div class=" form-group">
<div class="col-md-3">
<label class="control-label col-md-3">others</label>
</div>
<div class="col-md-4">
<input id="others_add" name = "others" type="text" class="form-control">
</div>
</div>

-->

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
Editing Staff Permission
</h2>
<span>Editing Staff Permission</span>
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
<!-- <div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="staff_department">staff_department</label>
</div>
<div class="col-sm-9">
<input id="staff_department_edit" name = "staff_department" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="staff_permission">staff_permission</label>
</div>
<div class="col-sm-9">
<input id="staff_permission_edit" name = "staff_permission" type="text" class="form-control">
</div>
</div> -->


<div class=" form-group">
<div class="col-md-3">
<label class="control-label col-md-3">Select Staff Department</label>
</div>
<div class="col-md-4">


<select class="form-control select2me" required id="staff_department_edit" name = "staff_department">
<option value="">Select Department</option>
<option value="sales">Sales</option>
<option value="operations">Operations</option>
<option value="recovery">Recovery</option>
<option value="cad">CAD</option>
<option value="cap">CAP</option>
<option value="it">IT</option>
<option value="finance">Finance</option>
<option value="strategy">Strategy</option>
<option value="internal_control">Internal Control</option>
<option value="others">Others</option>
</select>

</div>
</div>

<div class=" form-group">
<div class="col-md-3">
<label class="control-label col-md-3">Assign Permission</label>
</div>
<div class="col-md-4">

<select class="form-control select2me" required id="staff_permission_edit" name = "staff_permission">
<option value="">Select Permission</option>
<option value="view">View</option>
<option value="set_mandate">Set Mandate</option>
<option value="posting">Posting</option>
<option value="liquidation">Liquidation</option>
<option value="mandate_authorizer">Mandate Authorizer</option>
<option value="mandate_inputter">Mandate Inputter</option>

<option value="create">View and Create / Edit</option>
<option value="delete">View , Create and Delete</option>
</select>
</div>
</div>


<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="staff_email">staff email</label>
</div>
<div class="col-sm-9">
<input id="staff_email_edit" name = "staff_email" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="staff_status">staff status</label>
</div>
<div class="col-sm-9">
<input id="staff_status_edit" name = "staff_status" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="permitted_by">permitted by</label>
</div>
<div class="col-sm-9">
<input id="permitted_by_edit" name = "permitted_by" type="text" class="form-control">
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
Staff Permission
</h2>
<span>Displaying Staff Permission</span>
<button id="btn-form-create" class="btn btn-lg btn-success" style="margin:30px;" > Add new Staff Permission </button>
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
<th>staff</th>
<th>Staff Dept</th>
<th>Staff Permission</th>

<th>Status</th>
<th>Activated By</th>

<th>Last Update</th>
<th>Actions</th>
</tr>
{{ csrf_field() }}
</thead>
<tbody id="PostContent">
@foreach($flutterwave_permissions as $flutterwave_permission)
<tr class="item{!!$flutterwave_permission->
id!!}" >
<td>{!! User::find($flutterwave_permission->staff)->display_name !!}</td>
<td>{!!$flutterwave_permission->staff_department!!}</td>
<td>{!!$flutterwave_permission->staff_permission!!}</td>
<td>{!!$flutterwave_permission->staff_status!!}</td>
<td>{!! User::find($flutterwave_permission->permitted_by)->display_name !!}</td>
<td>{!!$flutterwave_permission->updated_at->diffForHumans()!!} </td>
<td>
<button class="edit-modal btn btn-info btn-sm" data-id="{!!$flutterwave_permission->id!!}" data-staff="{!!$flutterwave_permission->staff!!}" data-staff_department="{!!$flutterwave_permission->staff_department!!}" data-staff_permission="{!!$flutterwave_permission->staff_permission!!}" data-staff_email="{!!$flutterwave_permission->staff_email!!}" data-staff_status="{!!$flutterwave_permission->staff_status!!}" data-permitted_by="{!!$flutterwave_permission->permitted_by!!}" data-others="{!!$flutterwave_permission->others!!}" > Edit </button>
<button class="delete-modal btn btn-danger btn-sm" data-id="{!!$flutterwave_permission->id!!}"> Delete </button>
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
<button type="button" class="close" data-dismiss="modal">�</button>
</div>
<div class="modal-body">
<p class="text-center"> Do you want to delete this Staff Permission record </p>
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
<script src="http://irs.primeramfbank.com/app/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<link href="http://irs.primeramfbank.com/app/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
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
                             url: 'flutterwave_permission',
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
                             $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.staff + "</td> <td>" + data.staff_department + "</td> <td>" + data.staff_permission + "</td> <td>" + data.staff_email + "</td> <td>" + data.staff_status + "</td> <td>" + data.permitted_by + "</td> <td>" + data.others + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff='" + data.staff + "'   data-staff_department='" + data.staff_department + "'   data-staff_permission='" + data.staff_permission + "'   data-staff_email='" + data.staff_email + "'   data-staff_status='" + data.staff_status + "'   data-permitted_by='" + data.permitted_by + "'   data-others='" + data.others + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");
                             
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
               $('#staff_department_edit').val($(this).data('staff_department'));
               $('#staff_permission_edit').val($(this).data('staff_permission'));
               $('#staff_email_edit').val($(this).data('staff_email'));
               $('#staff_status_edit').val($(this).data('staff_status'));
               $('#permitted_by_edit').val($(this).data('permitted_by'));
               $('#others_edit').val($(this).data('others'));
               id = $('#id_edit').val();
               
               // $('#editModal').modal('show');
               });
$('.modal-footer').on('click', '.edit', function () {
                      $.ajax({
                             type: 'PUT',
                             url: 'flutterwave_permission/' + id,
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
                             $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'> <td>" + data.staff + "</td> <td>" + data.staff_department + "</td> <td>" + data.staff_permission + "</td> <td>" + data.staff_email + "</td> <td>" + data.staff_status + "</td> <td>" + data.permitted_by + "</td> <td>" + data.others + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff='" + data.staff + "'   data-staff_department='" + data.staff_department + "'   data-staff_permission='" + data.staff_permission + "'   data-staff_email='" + data.staff_email + "'   data-staff_status='" + data.staff_status + "'   data-permitted_by='" + data.permitted_by + "'   data-others='" + data.others + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");
                             
                             
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
                             url: 'flutterwave_permission/' + id,
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
<link rel="stylesheet" type="text/css" href="http://irs.primeramfbank.com/app/bower_components/sweetalert/dist/sweetalert.css">
<!-- animation nifty modal window effects css -->
<link rel="stylesheet" type="text/css" href="http://irs.primeramfbank.com/app/assets/css/component.css">
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
