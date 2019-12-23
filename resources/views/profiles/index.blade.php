@php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
@endphp

@extends('layouts.app')
@section('content')

@section('page_title')Staff Records  @endsection

@php




//
//function get_bio($id,$conn) {
//    $sql2 = "SELECT value FROM wp_bp_xprofile_data WHERE field_id = '8320' and user_id = '".$id."'";
//    if ($result=mysqli_query($conn,$sql2))
//    {
//        while ($appraisal_contents=mysqli_fetch_object($result))
//        {
//            return  $appraisal_contents->value;
//        }
//
//
//    }
//}
////get department of user
//
//function get_department($id,$conn) {
//    $sql2 = "SELECT value FROM wp_bp_xprofile_data WHERE field_id = '8262' and user_id = '".$id."'";
//    if ($result=mysqli_query($conn,$sql2))
//    {
//        while ($appraisal_contents=mysqli_fetch_object($result))
//        {
//            return  $appraisal_contents->value;
//        }
//
//
//    }
//}

function get_xprofile_data($user_id,$xprofile_id){

    $names = DB::table('wp_bp_xprofile_data')->select('value')->where('field_id', $xprofile_id)->where('user_id', $user_id)->get();
    foreach($names as $name){
        return $name->value;
    }
}
@endphp

<style>
#content-container a {
color: #040846 !important;
}
</style>

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
<!-- BEGIN PAGE HEADER-->
<h1 class="page-title">
Staff
</h1>
<div class="page-bar">
<ul class="page-breadcrumb">
<li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
<li>  <i class="fa fa-angle-right"></i> </li>
<li> <a href="#">Staff Records</a> </li>
</ul>
</div>
<div class="row">
<div class="col-md-12">
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue">
<div class="portlet-title">
<div class="caption"> <i class="fa fa-globe"></i>Staff </div>
<div class="actions"></div>
</div>
<div class="portlet-body">
<div class="" style="display:none;" id="creator-form">
<div class="card">
<div class="card-header">
<h2>
</h2>
<span>Adding new records for Staff</span>
<div class="card-header-right" style="padding:30px;">
<a href="#back" id="btn-form-close" class="btn btn-lg red">
<i class="icofont icofont-rounded-left"></i>
<< Cancel & Return</a>
</div>
</div>
<div class="portlet-body">
<div class="row">
<div class="col-lg-12 col-xl-12">
<!-- Date card start -->
<div class="card">
<div class="card-header"></div>
<div class="portlet-body" style="">
<form id="add_kc_form">
<input type="hidden" name="_token" value="FAoKt9NQHDIAz0lpuHOdHu6IeWveBXg4ZTA5ppyd">
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="role_id">role_id</label>
</div>
<div class="col-sm-9">
<input id="role_id_add" name = "role_id" type="text" class="form-control">
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
<label class="col-form-label" for="email">email</label>
</div>
<div class="col-sm-9">
<input id="email_add" name = "email" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="password">password</label>
</div>
<div class="col-sm-9">
<input id="password_add" name = "password" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="avatar">avatar</label>
</div>
<div class="col-sm-9">
<input id="avatar_add" name = "avatar" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="admin">admin</label>
</div>
<div class="col-sm-9">
<input id="admin_add" name = "admin" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="department">department</label>
</div>
<div class="col-sm-9">
<input id="department_add" name = "department" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="sub_unit">sub_unit</label>
</div>
<div class="col-sm-9">
<input id="sub_unit_add" name = "sub_unit" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="level">level</label>
</div>
<div class="col-sm-9">
<input id="level_add" name = "level" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="designation">designation</label>
</div>
<div class="col-sm-9">
<input id="designation_add" name = "designation" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="dob">dob</label>
</div>
<div class="col-sm-9">
<input id="dob_add" name = "dob" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="sex">sex</label>
</div>
<div class="col-sm-9">
<input id="sex_add" name = "sex" type="text" class="form-control">
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
Editing staff
</h2>
<span>Editing staff</span>
<div class="card-header-right" style="padding:30px;">
<a href="#back" id="btn-form-close" class="btn btn-lg red">
<i class="icofont icofont-rounded-left"></i>
<< Cancel & Return</a>
</div>
</div>
<div class="portlet-body">
<div class="row">
<div class="col-lg-12 col-xl-12">
<!-- Date card start -->
<div class="card">
<div class="card-header"></div>
<div class="portlet-body" style="">
<form id="edit_kc_form">
<input type="hidden" name="_token" value="FAoKt9NQHDIAz0lpuHOdHu6IeWveBXg4ZTA5ppyd">
<input type="hidden" class="form-control" id="id_edit" disabled>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="role_id">role_id</label>
</div>
<div class="col-sm-9">
<input id="role_id_edit" name = "role_id" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="name">name</label>
</div>
<div class="col-sm-9">
<input id="name_edit" name = "name" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="email">email</label>
</div>
<div class="col-sm-9">
<input id="email_edit" name = "email" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="password">password</label>
</div>
<div class="col-sm-9">
<input id="password_edit" name = "password" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="avatar">avatar</label>
</div>
<div class="col-sm-9">
<input id="avatar_edit" name = "avatar" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="admin">admin</label>
</div>
<div class="col-sm-9">
<input id="admin_edit" name = "admin" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="department">department</label>
</div>
<div class="col-sm-9">
<input id="department_edit" name = "department" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="sub_unit">sub_unit</label>
</div>
<div class="col-sm-9">
<input id="sub_unit_edit" name = "sub_unit" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="level">level</label>
</div>
<div class="col-sm-9">
<input id="level_edit" name = "level" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="designation">designation</label>
</div>
<div class="col-sm-9">
<input id="designation_edit" name = "designation" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="dob">dob</label>
</div>
<div class="col-sm-9">
<input id="dob_edit" name = "dob" type="text" class="form-control">
</div>
</div>
<div class="row form-group">
<div class="col-sm-3">
<label class="col-form-label" for="sex">sex</label>
</div>
<div class="col-sm-9">
<input id="sex_edit" name = "sex" type="text" class="form-control">
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
Staff
</h2>
<span>Displaying Staff Records</span>
<div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
</div>
<div class="portlet-body">
<div>
<div id="new-cons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<table  class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
<thead>
<tr role="row">
<th>Staff ID</th>
<th>Username</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Department</th>
<th>Sex</th>
<th>Birthday</th>
<th>Address</th>
<th>State Of Origin</th>
<th>Marital Status</th>
<th>Bio</th>

<th>Sub Unit</th>
<th>Grade / Level</th>
<th>Designation</th>
<th>Int. Passport No.</th>
<th>Name (Emergency Contact)</th>
<th>Mobile Number (Emergency Contact)</th>
<th>Work Phone (Emergency Contact)</th>

<th>Bank Name</th>
<th>Account Number</th>
<th>Pension PIN Number</th>
<th>PFA</th>
<th>Date Employed</th>


<th>Onboard on IRS</th>
<th>Actions</th>
</tr>
<input type="hidden" name="_token" value="FAoKt9NQHDIAz0lpuHOdHu6IeWveBXg4ZTA5ppyd">
</thead>
<tbody id="PostContent">
@foreach($staff as $staff)
<tr class="item{!!$staff->
id!!}" >

<td>{!!$staff->ID!!}</td>
<td>{!!$staff->user_nicename!!}</td>
<td>{!!$staff->display_name!!}</td>
<td>{!!$staff->user_email!!}</td>
<td>{!! $staff->details ? $staff->details->phone : '' !!}</td><!-- PHONE NUMBER -->
<td>{!! $staff->department !!}</td><!-- department-->
<td>{!! $staff->sex !!}</td><!-- SEX-->
<td>{!! $staff->dob !!}</td><!-- BIRTHDAY-->
<td>{!! $staff->details ? $staff->details->location  : ''!!}</td><!-- ADDRESS-->
<td>{!! $staff->details ? $staff->details->state_of_origin : '' !!}</td><!-- S OF ORIGIN-->
<td>{!! $staff->details ? $staff->details->marital_status : '' !!}</td><!-- MARITAL STATUS-->
<td>{!! $staff->details ? $staff->details->bio : '' !!}</td><!-- BIO-->

<td>{!! $staff->sub_unit !!}</td><!-- SUB Unit-->
<td>{!! $staff->level !!}</td><!-- Grade-->
<td>{!! $staff->designation !!}} </td><!-- Designation-->
<td>{!! $staff->details ? $staff->details->intl_passport_no : '' !!}</td><!-- Int. Passport NUMBER-->
<td>{!! $staff->details ? $staff->details->emergency_contact_person : '' !!}</td><!-- name Emergency-->
<td>{!! $staff->details ? $staff->details->emergency_contact_phone : '' !!}</td><!-- Mobile Emergency-->
<td>{!! $staff->details ? $staff->details->office_phone : '' !!}</td><!-- work Emergency-->

<td>{!! $staff->details ? $staff->details->salary_account_bank : '' !!}</td><!-- Bank name-->
<td>{!! $staff->details ? $staff->details->salary_account_name : '' !!}</td><!-- Account NUMBER-->
<td>{!! $staff->details ? $staff->details->pension_pin : '' !!}</td><!-- Pension PIN-->
<td>{!! $staff->details ? $staff->details->pension_admin : '' !!}</td><!-- Pension PFA-->
<td>{!! $staff->details ? $staff->details->date_employed : '' !!}</td><!-- DATE Employed-->

<td>{!!$staff->user_registered!!}</td>

<td>
<a href="{{ route('profile.edit', ['user' => $staff->user_nicename])}}"> <button class=" btn btn-info btn-sm"  > Edit </button> </a>
<a href="{{ route('profile.edit', ['user' => $staff->user_nicename])}}#change-avatar/"> <button class=" btn btn-warning btn-sm"  > Change Profile Pic </button> </a>

<a href="{{ route('profile.edit', ['user' => $staff->user_nicename])}}"> <button class=" btn btn-danger btn-sm"  > Deactivate Staff </button> </a>





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
<p class="text-center"> Do you want to delete this Staff record </p>
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
<script src="http://irs.primera/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<link href="http://irs.primera/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
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
                             url: 'staff',
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
                             $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.role_id + "</td> <td>" + data.name + "</td> <td>" + data.email + "</td> <td>" + data.password + "</td> <td>" + data.avatar + "</td> <td>" + data.admin + "</td> <td>" + data.department + "</td> <td>" + data.sub_unit + "</td> <td>" + data.level + "</td> <td>" + data.designation + "</td> <td>" + data.dob + "</td> <td>" + data.sex + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-role_id='" + data.role_id + "'   data-name='" + data.name + "'   data-email='" + data.email + "'   data-password='" + data.password + "'   data-avatar='" + data.avatar + "'   data-admin='" + data.admin + "'   data-department='" + data.department + "'   data-sub_unit='" + data.sub_unit + "'   data-level='" + data.level + "'   data-designation='" + data.designation + "'   data-dob='" + data.dob + "'   data-sex='" + data.sex + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");

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
               $('#role_id_edit').val($(this).data('role_id'));
               $('#name_edit').val($(this).data('name'));
               $('#email_edit').val($(this).data('email'));
               $('#password_edit').val($(this).data('password'));
               $('#avatar_edit').val($(this).data('avatar'));
               $('#admin_edit').val($(this).data('admin'));
               $('#department_edit').val($(this).data('department'));
               $('#sub_unit_edit').val($(this).data('sub_unit'));
               $('#level_edit').val($(this).data('level'));
               $('#designation_edit').val($(this).data('designation'));
               $('#dob_edit').val($(this).data('dob'));
               $('#sex_edit').val($(this).data('sex'));
               id = $('#id_edit').val();

               // $('#editModal').modal('show');
               });
$('.modal-footer').on('click', '.edit', function () {
                      $.ajax({
                             type: 'PUT',
                             url: 'staff/' + id,
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
                             $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'> <td>" + data.role_id + "</td> <td>" + data.name + "</td> <td>" + data.email + "</td> <td>" + data.password + "</td> <td>" + data.avatar + "</td> <td>" + data.admin + "</td> <td>" + data.department + "</td> <td>" + data.sub_unit + "</td> <td>" + data.level + "</td> <td>" + data.designation + "</td> <td>" + data.dob + "</td> <td>" + data.sex + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-role_id='" + data.role_id + "'   data-name='" + data.name + "'   data-email='" + data.email + "'   data-password='" + data.password + "'   data-avatar='" + data.avatar + "'   data-admin='" + data.admin + "'   data-department='" + data.department + "'   data-sub_unit='" + data.sub_unit + "'   data-level='" + data.level + "'   data-designation='" + data.designation + "'   data-dob='" + data.dob + "'   data-sex='" + data.sex + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");


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
                             url: 'staff/' + id,
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
<link rel="stylesheet" type="text/css" href="http://irs.primera/bower_components/sweetalert/dist/sweetalert.css">
<!-- animation nifty modal window effects css -->
<link rel="stylesheet" type="text/css" href="http://irs.primera/assets/css/component.css">
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


@include('includes.scripts_just_datatable')

