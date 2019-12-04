@extends('layouts.app')

@section('page_title')Leave Application Form @endsection

@section('content')





@include('leave.menu')

<div class="page-content-wrapper">

<!-- BEGIN CONTENT BODY -->

<div class="page-content">

<!-- BEGIN PAGE HEADER-->



<div class="page-bar">

<ul class="page-breadcrumb">

<li>

<i class="icon-home"></i>

<a href="/">Home</a>

<i class="fa fa-angle-right"></i>

</li>

<li>

<span>Apply For Leave</span>

</li>

</ul>

<div class="page-toolbar">

<div class="btn-group pull-right">



</div>

</div>

</div>

<!-- END PAGE HEADER-->



<div class="row">

{{--    <div class="col-md-12">
    
    <!-- BEGIN VALIDATION STATES-->
    
    <div class="portlet light portlet-fit portlet-form " id="form_wizard_1">
    
    <div class="card-header">
    
    <div class="caption">
    
    <i class=" icon-layers font-green"></i>
    
    <span class="caption-subject font-green sbold uppercase">Validation States</span>
    
    </div>
    
    <div class="actions">
    
    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
    
    <i class="icon-cloud-upload"></i>
    
    </a>
    
    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
    
    <i class="icon-wrench"></i>
    
    </a>
    
    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
    
    <i class="icon-trash"></i>
    
    </a>
    
    </div>
    
    </div>
    
    <div class="card-body
    
    <!-- BEGIN FORM-->
    
    <form action="#" class="form-horizontal">
    
    <div class="form-body">
    
    <h3 class="form-section">Basic validation States</h3>
    
    <div class="form-group has-warning">
    
    <label class="control-label col-md-3" for="inputWarning">Input with warning</label>
        
        <div class="col-md-4">
        
        <input type="text" class="form-control" id="inputWarning" />
        
        <span class="help-block"> Something may have gone wrong </span>
        
        </div>
        
        </div>
        
        <div class="form-group has-error">
        
        <label class="control-label col-md-3" for="inputError">Input with error</label>
            
            <div class="col-md-4">
            
            <input type="text" class="form-control" id="inputError" />
            
            <span class="help-block"> Please correct the error </span>
            
            </div>
            
            </div>
            
            <div class="form-group has-success">
            
            <label class="control-label col-md-3" for="inputSuccess">Input with success</label>
                
                <div class="col-md-4">
                
                <input type="text" class="form-control" id="inputSuccess" /> </div>
                
                </div>
                
                <h3 class="form-section">Validation States With Icons</h3>
                
                <div class="form-group has-warning">
                
                <label class="control-label col-md-3">Input with warning</label>
                
                <div class="col-md-4">
                
                <div class="input-icon right">
                
                <i class="fa fa-exclamation tooltips" data-original-title="please write a valid email"></i>
                
                <input type="text" class="form-control" /> </div>
                
                </div>
                
                </div>
                
                <div class="form-group has-error">
                
                <label class="control-label col-md-3">Input with error</label>
                
                <div class="col-md-4">
                
                <div class="input-icon right">
                
                <i class="fa fa-warning tooltips" data-original-title="please write a valid email"></i>
                
                <input type="text" class="form-control" /> </div>
                
                </div>
                
                </div>
                
                <div class="form-group has-success">
                
                <label class="control-label col-md-3">Input with success</label>
                
                <div class="col-md-4">
                
                <div class="input-icon right">
                
                <i class="fa fa-check tooltips" data-original-title="success input!"></i>
                
                <input type="text" class="form-control" /> </div>
                
                </div>
                
                </div>
                
                </div>
                
                <div class="form-actions">
                
                <div class="row">
                
                <div class="col-md-offset-3 col-md-9">
                
                <button type="submit" class="btn green">Submit</button>
                
                <button type="button" class="btn default">Cancel</button>
                
                </div>
                
                </div>
                
                </div>
                
                </form>
                
                <!-- END FORM-->
                
                </div>
                
                </div>
                
                <!-- END VALIDATION STATES-->
                
                </div>
                
                </div>
                
                <div class="row">
                
                <div class="col-md-12">
                
                <!-- BEGIN VALIDATION STATES-->
                
                <div class="portlet light portlet-fit portlet-form ">
                
                <div class="card-header">
                
                <div class="caption">
                
                <i class="icon-settings font-red"></i>
                
                <span class="caption-subject font-red sbold uppercase">Basic Validation</span>
                
                </div>
                
                <div class="actions">
                
                <div class="btn-group btn-group-devided" data-toggle="buttons">
                
                <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                
                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                
                <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                
                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                
                </div>
                
                </div>
                
                </div>
                
                <div class="card-body
                
                <!-- BEGIN FORM-->
                
                <form action="#" id="form_sample_1" class="form-horizontal">
                
                <div class="form-body">
                
                <div class="alert alert-danger display-hide">
                
                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                
                <div class="alert alert-success display-hide">
                
                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                
                <div class="form-group">
                
                <label class="control-label col-md-3">Name
                
                <span class="required"> * </span>
                
                </label>
                
                <div class="col-md-4">
                
                <input type="text" name="name" data-required="1" class="form-control" /> </div>
                
                </div>
                
                <div class="form-group">
                
                <label class="control-label col-md-3">Email
                
                <span class="required"> * </span>
                
                </label>
                
                <div class="col-md-4">
                
                <input name="email" type="text" class="form-control" /> </div>
                
                </div>
                
                <div class="form-group">
                
                <label class="control-label col-md-3">URL
                
                <span class="required"> * </span>
                
                </label>
                
                <div class="col-md-4">
                
                <input name="url" type="text" class="form-control" />
                
                <span class="help-block"> e.g: http://www.demo.com or http://demo.com </span>
                
                </div>
                
                </div>
                
                <div class="form-group">
                
                <label class="control-label col-md-3">Number
                
                <span class="required"> * </span>
                
                </label>
                
                <div class="col-md-4">
                
                <input name="number" type="text" class="form-control" /> </div>
                
                </div>
                
                <div class="form-group">
                
                <label class="control-label col-md-3">Digits
                
                <span class="required"> * </span>
                
                </label>
                
                <div class="col-md-4">
                
                <input name="digits" type="text" class="form-control" /> </div>
                
                </div>
                
                <div class="form-group">
                
                <label class="control-label col-md-3">Credit Card
                
                <span class="required"> * </span>
                
                </label>
                
                <div class="col-md-4">
                
                <input name="creditcard" type="text" class="form-control" />
                
                <span class="help-block"> e.g: 5500 0000 0000 0004 </span>
                
                </div>
                
                </div>
                
                <div class="form-group">
                
                <label class="control-label col-md-3">Occupation&nbsp;&nbsp;</label>
    
    <div class="col-md-4">
    
    <input name="occupation" type="text" class="form-control" />
    
    <span class="help-block"> optional field </span>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Select
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <select class="form-control" name="select">
    
    <option value="">Select...</option>
    
    <option value="Category 1">Category 1</option>
    
    <option value="Category 2">Category 2</option>
    
    <option value="Category 3">Category 5</option>
    
    <option value="Category 4">Category 4</option>
    
    </select>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Multi Select
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <select class="form-control" name="select_multi" multiple>
    
    <option value="Category 1">Category 1</option>
    
    <option value="Category 2">Category 2</option>
    
    <option value="Category 3">Category 3</option>
    
    <option value="Category 4">Category 4</option>
    
    <option value="Category 5">Category 5</option>
    
    </select>
    
    <span class="help-block"> select max 3 options, min 1 option </span>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Input Group
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="input-group">
    
    <span class="input-group-addon">
    
    <i class="fa fa-envelope"></i>
    
    </span>
    
    <input type="text" class="form-control" name="input_group" placeholder="Email Address"> </div>
    
    </div>
    
    </div>
    
    </div>
    
    <div class="form-actions">
    
    <div class="row">
    
    <div class="col-md-offset-3 col-md-9">
    
    <button type="submit" class="btn green">Submit</button>
    
    <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
    
    </div>
    
    </div>
    
    </div>
    
    </form>
    
    <!-- END FORM-->
    
    </div>
    
    </div>
    
    <!-- END VALIDATION STATES-->
    
    </div>
    
    </div>
    
    <div class="row">
    
    <div class="col-md-12">
    
    <!-- BEGIN VALIDATION STATES-->
    
    <div class="portlet light portlet-fit portlet-form ">
    
    <div class="card-header">
    
    <div class="caption">
    
    <i class="icon-bubble font-green"></i>
    
    <span class="caption-subject font-green bold uppercase">Validation Using Icons</span>
    
    </div>
    
    <div class="actions">
    
    <div class="btn-group">
    
    <a class="btn green btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
    
    <i class="fa fa-angle-down"></i>
    
    </a>
    
    <ul class="dropdown-menu pull-right">
    
    <li>
    
    <a href="javascript:;"> Option 1</a>
    
    </li>
    
    <li class="divider"> </li>
    
    <li>
    
    <a href="javascript:;">Option 2</a>
    
    </li>
    
    <li>
    
    <a href="javascript:;">Option 3</a>
    
    </li>
    
    <li>
    
    <a href="javascript:;">Option 4</a>
    
    </li>
    
    </ul>
    
    </div>
    
    </div>
    
    </div>
    
    <div class="card-body
    
    <!-- BEGIN FORM-->
    
    <form action="#" id="form_sample_2" class="form-horizontal">
    
    <div class="form-body">
    
    <div class="alert alert-danger display-hide">
    
    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
    
    <div class="alert alert-success display-hide">
    
    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
    
    <div class="form-group  margin-top-20">
    
    <label class="control-label col-md-3">Name
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="input-icon right">
    
    <i class="fa"></i>
    
    <input type="text" class="form-control" name="name" /> </div>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Email
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="input-icon right">
    
    <i class="fa"></i>
    
    <input type="text" class="form-control" name="email" /> </div>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">URL
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="input-icon right">
    
    <i class="fa"></i>
    
    <input type="text" class="form-control" name="url" /> </div>
    
    <span class="help-block"> e.g: http://www.demo.com or http://demo.com </span>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Number
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="input-icon right">
    
    <i class="fa"></i>
    
    <input type="text" class="form-control" name="number" /> </div>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Digits
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="input-icon right">
    
    <i class="fa"></i>
    
    <input type="text" class="form-control" name="digits" /> </div>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Credit Card
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="input-icon right">
    
    <i class="fa"></i>
    
    <input type="text" class="form-control" name="creditcard" /> </div>
    
    <span class="help-block"> e.g: 5500 0000 0000 0004 </span>
    
    </div>
    
    </div>
    
    </div>
    
    <div class="form-actions">
    
    <div class="row">
    
    <div class="col-md-offset-3 col-md-9">
    
    <button type="submit" class="btn green">Submit</button>
    
    <button type="button" class="btn default">Cancel</button>
    
    </div>
    
    </div>
    
    </div>
    
    </form>
    
    <!-- END FORM-->
    
    </div>
    
    </div>
    
    <!-- END VALIDATION STATES-->
    
    </div>
    
    </div>--}}

<div class="row">

<div class="col-md-12">

<!-- BEGIN VALIDATION STATES-->

<div class="portlet light portlet-fit portlet-form ">

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

<label class="control-label col-md-3">From

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

<label class="control-label col-md-3">To

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

<select class="form-control select2me" required name="supervisor">



<option value="2019" selected>2019</option>






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

<option value="{{ $user->ID }}">{{ $user->name }}</option>

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

<option value="{{ $user->ID }}">{{ $user->name }}</option>

@endforeach





</select>

</div>

</div>







{{--
    
    <div class="form-group">
    
    <label class="col-md-3 control-label">Email Address
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="input-group">
    
    <span class="input-group-addon">
    
    <i class="fa fa-envelope"></i>
    
    </span>
    
    <input type="email" name="email" class="form-control" placeholder="Email Address"> </div>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Occupation&nbsp;&nbsp;</label>
    
    <div class="col-md-4">
    
    <input name="occupation" type="text" class="form-control" /> </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Select2 Dropdown
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <select class="form-control select2me" name="options2">
    
    <option value="">Select...</option>
    
    <option value="Option 1">Option 1</option>
    
    <option value="Option 2">Option 2</option>
    
    <option value="Option 3">Option 3</option>
    
    <option value="Option 4">Option 4</option>
    
    </select>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Datepicker</label>
    
    <div class="col-md-4">
    
    <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
    
    <input type="text" class="form-control" readonly name="datepicker">
    
    <span class="input-group-btn">
    
    <button class="btn default" type="button">
    
    <i class="fa fa-calendar"></i>
    
    </button>
    
    </span>
    
    </div>
    
    <!-- /input-group -->
    
    <span class="help-block"> select a date </span>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Membership
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="mt-radio-list" data-error-container="#form_2_membership_error">
    
    <label class="mt-radio">
    
    <input type="radio" name="membership" value="1" /> Fee
    
    <span></span>
    
    </label>
    
    <label class="mt-radio">
    
    <input type="radio" name="membership" value="2" /> Professional
    
    <span></span>
    
    </label>
    
    </div>
    
    <div id="form_2_membership_error"> </div>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Services
    
    <span class="required"> * </span>
    
    </label>
    
    <div class="col-md-4">
    
    <div class="mt-checkbox-list" data-error-container="#form_2_services_error">
    
    <label class="mt-checkbox">
    
    <input type="checkbox" value="1" name="service" /> Service 1
    
    <span></span>
    
    </label>
    
    <label class="mt-checkbox">
    
    <input type="checkbox" value="2" name="service" /> Service 2
    
    <span></span>
    
    </label>
    
    <label class="mt-checkbox">
    
    <input type="checkbox" value="3" name="service" /> Service 3
    
    <span></span>
    
    </label>
    
    </div>
    
    <span class="help-block"> (select at least two) </span>
    
    <div id="form_2_services_error"> </div>
    
    </div>
    
    </div>
    
    <div class="form-group">
    
    <label class="control-label col-md-3">Markdown</label>
    
    <div class="col-md-9">
    
    <textarea name="markdown" data-provide="markdown" rows="10" data-error-container="#editor_error"></textarea>
    
    <div id="editor_error"> </div>
    
    </div>
    
    </div>--}}







<div class="form-group">

<label class="col-md-3 control-label">Handover Note

<span class="required"> * </span>

</label>

<div class="col-md-9">

<div class="mt-repeater">

<div data-repeater-list="handover">

<div data-repeater-item class="row">

<div class="col-md-5">

<label class="control-label">Task</label>

<input type="text" name="task" required placeholder="Task"

class="form-control" /> </div>

<div class="col-md-6">

<label class="control-label">Status</label>

<textarea name ="status" type="text" required

placeholder="Status"

class="form-control"

></textarea></div>

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

<button type="submit" class="btn green">&nbsp;&nbsp;&nbsp;&nbsp; Apply &nbsp;&nbsp;&nbsp;&nbsp;

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
                           
                           var url = $(this).attr('action');
                           
                           var postData = $(this).serialize();
                           
                           $.post(url, postData, function(dor){
                                  
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

@endsection

@include('includes.scripts_form')

