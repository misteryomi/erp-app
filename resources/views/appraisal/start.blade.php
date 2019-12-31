@extends('layouts.frontend_kpi')
@section('page_title')Annual Appraisal @endsection

@section('content')

<?php
    use App\User;
    
    Auth()->user()->unreadNotifications->markAsRead();
    ?>

<script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
@include('appraisal.menu')
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
<span>Appraisal</span>
</li>
</ul>
<div class="page-toolbar">
<div class="btn-group pull-right">

</div>
</div>
</div>
<!-- END PAGE HEADER-->





<!-- END PAGE HEADER-->
<div class="row">
<div class="col-md-12">
<!-- <div class="m-heading-1 border-green m-bordered">
<h3>Annual Appraisal and 2018 KEY PERFORMANCE INDICATORS
(KPI'S)</h3>
 
 </div> -->
 <div class="portlet light " id="form_wizard_1">
 <div class="portlet-title">
 <div class="caption">
 <i class=" icon-layers font-red"></i>
 <span class="caption-subject font-red bold uppercase"> Appraisal -
 <span class="step-title"> Step 1 of 7 </span>
 </span>
 </div>
 <!-- <div class="actions">
 <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
 <i class="icon-cloud-upload"></i>
 </a>
 <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
 <i class="icon-wrench"></i>
 </a>
 <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
 <i class="icon-trash"></i>
 </a>
 </div> -->
 </div>
 <div class="portlet-body form">
 <form class="form-horizontal" action="{{ route('appraisal.start', ['id' =>
 $appraisal_contents->id])}}" id="submit_form" method="POST">
<div class="form-wizard">
<div class="form-body">
<ul class="nav nav-pills nav-justified steps">
<li>
<a href="#tab1" data-toggle="tab" class="step">
<span class="number"> 1 </span>
<span class="desc">
<i class="icon-check"></i> KPI </span>
</a>
</li>
<li>
<a href="#tab2" data-toggle="tab" class="step">
<span class="number"> 2 </span>
<span class="desc">
<i class="icon-check"></i> COMPETENCIES </span>
</a>
</li>
<li>
<a href="#tab3" data-toggle="tab" class="step active">
<span class="number"> 3 </span>
<span class="desc">
<i class="icon-check"></i> BEHAVIOURIAL SKILLS  </span>
</a>
</li>
<li>
<a href="#tab4" data-toggle="tab" class="step">
<span class="number"> 4 </span>
<span class="desc">
<i class="icon-check"></i> DEVELOPMENTAL GOALS </span>
</a>
</li>
<li>
<a href="#tab5" data-toggle="tab" class="step">
<span class="number"> 5 </span>
<span class="desc">
<i class="icon-check"></i> COMPANY'S QUARTERLY PERFOMANCE </span>
</a>
</li>
<li>
<a href="#tab6" data-toggle="tab" class="step active">
<span class="number"> 6 </span>
<span class="desc">
<i class="icon-check"></i> PART B: PROMOTION </span>
</a>
</li>
{{-- <li>
    <a href="#tab4" data-toggle="tab" class="step">
    <span class="number"> 4 </span>
    <span class="desc">
    <i class="fa fa-check"></i> Confirm </span>
    </a>
    </li>--}}
</ul>
<div id="bar" class="progress progress-striped" role="progressbar">
<div class="progress-bar progress-bar-success"> </div>
</div>
<div class="tab-content">
<div class="alert alert-danger display-none">
<button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
<div class="alert alert-success display-none">
<button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>






<div class="tab-pane active" id="tab1">

<div class="row">
<div class="col-md-12">
<!-- BEGIN PROFILE SIDEBAR -->
@include('appraisal.start_sidebar')
<!-- END BEGIN PROFILE SIDEBAR -->
<!-- BEGIN TICKET LIST CONTENT -->
<div class="app-ticket app-ticket-list">
<div class="row">
<div class="col-md-12">

<div class="portlet-body">

<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
<thead>
<tr>
<th>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
<span></span>
</label>
</th>
<th> KPI </th>
<th>Target </th>
<th> Weight </th>
<th> Self Assessment (Actual) </th>
@if(("".Auth::user()->ID."" ==
     $appraisal_contents->manager_id))
<th>Managers Assessment (Actual) </th>
@endif


</tr>
</thead>
<tbody>

@if( !empty($appraisal_contents->kpi1_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->kpi1_field }}
</td>
<td>
{{ $appraisal_contents->kpi1_target }}
</td>
<td>   {{ $appraisal_contents->kpi1_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="kpi1_staff_add" name =
"kpi1_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->kpi1_target }}"
value="{{$appraisal_contents->kpi1_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="kpi1_staff_add" name =
"kpi1_staff" disabled type="number" max="{{ $appraisal_contents->kpi1_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi1_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="kpi1_staff_add" name =
"kpi1_staff" disabled type="number" max="{{ $appraisal_contents->kpi1_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi1_staff}}" />
</td>
<td>  <input id="kpi1_manager_add" name =
"kpi1_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi1_manager}}" max="{{ $appraisal_contents->kpi1_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="kpi1_staff_add" name =
"kpi1_staff" disabled type="number" max="{{ $appraisal_contents->kpi1_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi1_staff}}" />
</td>
<td>  <input id="kpi1_manager_add" name =
"kpi1_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi1_manager}}" max="{{ $appraisal_contents->kpi1_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif


@if( !empty($appraisal_contents->kpi2_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->kpi2_field }}
</td>
<td>
{{ $appraisal_contents->kpi2_target }}
</td>
<td>   {{ $appraisal_contents->kpi2_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="kpi2_staff_add" name =
"kpi2_staff" type="number" required
class="form-control" max=" {{ $appraisal_contents->kpi2_target }}"
value="{{$appraisal_contents->kpi2_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="kpi2_staff_add" name =
"kpi2_staff" disabled type="number" max=" {{ $appraisal_contents->kpi2_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi2_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="kpi2_staff_add" name =
"kpi2_staff" disabled type="number" max=" {{ $appraisal_contents->kpi2_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi2_staff}}" />
</td>
<td>  <input id="kpi2_manager_add" name =
"kpi2_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi2_manager}}" max=" {{ $appraisal_contents->kpi2_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="kpi2_staff_add" name =
"kpi2_staff" disabled type="number" max=" {{ $appraisal_contents->kpi2_target }}"
class="form-control"
value="{{$appraisal_contents->kpi2_staff}}" />
</td>
<td>  <input id="kpi2_manager_add" name =
"kpi2_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi2_manager}}" max=" {{ $appraisal_contents->kpi2_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif

@if( !empty($appraisal_contents->kpi3_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->kpi3_field }}
</td>
<td>
{{ $appraisal_contents->kpi3_target }}
</td>
<td>   {{ $appraisal_contents->kpi3_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="kpi3_staff_add" name =
"kpi3_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->kpi3_target }}"
value="{{$appraisal_contents->kpi3_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="kpi3_staff_add" name =
"kpi3_staff" disabled type="number" max="{{ $appraisal_contents->kpi3_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi3_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="kpi3_staff_add" name =
"kpi3_staff" disabled type="number" max="{{ $appraisal_contents->kpi3_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi3_staff}}" />
</td>
<td>  <input id="kpi3_manager_add" name =
"kpi3_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi3_manager}}" max="{{ $appraisal_contents->kpi3_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="kpi3_staff_add" name =
"kpi3_staff" disabled type="number" max="{{ $appraisal_contents->kpi3_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi3_staff}}" />
</td>
<td>  <input id="kpi3_manager_add" name =
"kpi3_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi3_manager}}" max="{{ $appraisal_contents->kpi3_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif

@if( !empty($appraisal_contents->kpi4_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->kpi4_field }}
</td>
<td>
{{ $appraisal_contents->kpi4_target }}
</td>
<td>   {{ $appraisal_contents->kpi4_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="kpi4_staff_add" name =
"kpi4_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->kpi4_target }}"
value="{{$appraisal_contents->kpi4_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="kpi4_staff_add" name =
"kpi4_staff" disabled type="number" max="{{ $appraisal_contents->kpi4_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi4_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="kpi4_staff_add" name =
"kpi4_staff" disabled type="number" max="{{ $appraisal_contents->kpi4_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi4_staff}}" />
</td>
<td>  <input id="kpi4_manager_add" name =
"kpi4_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi4_manager}}" max="{{ $appraisal_contents->kpi4_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="kpi4_staff_add" name =
"kpi4_staff" disabled type="number" max="{{ $appraisal_contents->kpi4_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi4_staff}}" />
</td>
<td>  <input id="kpi4_manager_add" name =
"kpi4_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi4_manager}}" max="{{ $appraisal_contents->kpi4_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif


@if( !empty($appraisal_contents->kpi5_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->kpi5_field }}
</td>
<td>
{{ $appraisal_contents->kpi5_target }}
</td>
<td>   {{ $appraisal_contents->kpi5_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="kpi5_staff_add" name =
"kpi5_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->kpi5_target }}"
value="{{$appraisal_contents->kpi5_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="kpi5_staff_add" name =
"kpi5_staff" disabled type="number" max="{{ $appraisal_contents->kpi5_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi5_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="kpi5_staff_add" name =
"kpi5_staff" disabled type="number" max="{{ $appraisal_contents->kpi5_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi5_staff}}" />
</td>
<td>  <input id="kpi5_manager_add" name =
"kpi5_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi5_manager}}" max="{{ $appraisal_contents->kpi5_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="kpi5_staff_add" name =
"kpi5_staff" disabled type="number" max="{{ $appraisal_contents->kpi5_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi5_staff}}" />
</td>
<td>  <input id="kpi5_manager_add" name =
"kpi5_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi5_manager}}" max="{{ $appraisal_contents->kpi5_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif


@if( !empty($appraisal_contents->kpi6_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->kpi6_field }}
</td>
<td>
{{ $appraisal_contents->kpi6_target }}
</td>
<td>   {{ $appraisal_contents->kpi6_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="kpi6_staff_add" name =
"kpi6_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->kpi6_target }}"
value="{{$appraisal_contents->kpi6_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="kpi6_staff_add" name =
"kpi6_staff" disabled type="number" max="{{ $appraisal_contents->kpi6_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi6_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="kpi6_staff_add" name =
"kpi6_staff" disabled type="number" max="{{ $appraisal_contents->kpi6_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi6_staff}}" />
</td>
<td>  <input id="kpi6_manager_add" name =
"kpi6_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi6_manager}}" max="{{ $appraisal_contents->kpi6_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="kpi6_staff_add" name =
"kpi6_staff" disabled type="number" max="{{ $appraisal_contents->kpi6_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi6_staff}}" />
</td>
<td>  <input id="kpi6_manager_add" name =
"kpi6_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi6_manager}}" max="{{ $appraisal_contents->kpi6_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif


@if( !empty($appraisal_contents->kpi7_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->kpi7_field }}
</td>
<td>
{{ $appraisal_contents->kpi7_target }}
</td>
<td>   {{ $appraisal_contents->kpi7_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="kpi7_staff_add" name =
"kpi7_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->kpi7_target }}"
value="{{$appraisal_contents->kpi7_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="kpi7_staff_add" name =
"kpi7_staff" disabled type="number" max="{{ $appraisal_contents->kpi7_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi7_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="kpi7_staff_add" name =
"kpi7_staff" disabled type="number" max="{{ $appraisal_contents->kpi7_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi7_staff}}" />
</td>
<td>  <input id="kpi7_manager_add" name =
"kpi7_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi7_manager}}" max="{{ $appraisal_contents->kpi7_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="kpi7_staff_add" name =
"kpi7_staff" disabled type="number" max="{{ $appraisal_contents->kpi7_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi7_staff}}" />
</td>
<td>  <input id="kpi7_manager_add" name =
"kpi7_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi7_manager}}" max="{{ $appraisal_contents->kpi7_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif



@if( !empty($appraisal_contents->kpi8_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->kpi8_field }}
</td>
<td>
{{ $appraisal_contents->kpi8_target }}
</td>
<td>   {{ $appraisal_contents->kpi8_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="kpi8_staff_add" name =
"kpi8_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->kpi8_target }}"
value="{{$appraisal_contents->kpi8_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="kpi8_staff_add" name =
"kpi8_staff" disabled type="number" max="{{ $appraisal_contents->kpi8_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi8_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="kpi8_staff_add" name =
"kpi8_staff" disabled type="number" max="{{ $appraisal_contents->kpi8_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi8_staff}}" />
</td>
<td>  <input id="kpi8_manager_add" name =
"kpi8_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi8_manager}}" max="{{ $appraisal_contents->kpi8_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="kpi8_staff_add" name =
"kpi8_staff" disabled type="number" max="{{ $appraisal_contents->kpi8_target }}"
class="form-control" required
value="{{$appraisal_contents->kpi8_staff}}" />
</td>
<td>  <input id="kpi8_manager_add" name =
"kpi8_manager" type="text"
class="form-control"
value="{{$appraisal_contents->kpi8_manager}}" max="{{ $appraisal_contents->kpi8_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif

{{--KPI COMMENT SECTION HERE --}}


@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea name = "kpi_comment_staff" class="form-control"  style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->kpi_comment_staff}}</textarea>
</td>
</tr>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "kpi_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->kpi_comment_staff}}</textarea>
</td>
</tr>
@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "kpi_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->kpi_comment_staff}}</textarea>
</td>
</tr>
<tr class="odd gradeX">
<td> </td>
<td >
Manager's Feedback &  Comments
</td>

<td colspan="6"><textarea name = "kpi_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->kpi_comment_manager}}</textarea>
</td>
</tr>
@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "kpi_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->kpi_comment_staff}}</textarea>
</td>
</tr>
<tr class="odd gradeX">
<td> </td>
<td >
Manager's Feedback &  Comments
</td>

<td colspan="6"><textarea  name = "kpi_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->kpi_comment_manager}}</textarea>
</td>
@else
<tr class="odd gradeX">
<td> </td> <td> Not authorized </td> <td> Not
authorized </td>
</tr>

@endif



{{--END OF KPI COMMENT SECTION HERE --}}


{{--end of KPI contents --}}


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- END PROFILE CONTENT -->
</div>

</div>

<div class="tab-pane" id="tab2">

<div class="row">
<div class="col-md-12">
<!-- BEGIN PROFILE SIDEBAR -->
@include('appraisal.start_sidebar')
<!-- END BEGIN PROFILE SIDEBAR -->
<!-- BEGIN TICKET LIST CONTENT -->
<div class="app-ticket app-ticket-list">
<div class="row">
<div class="col-md-12">

<div class="portlet-body">

<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
<thead>
<tr>
<th>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
<span></span>
</label>
</th>
<th>
Competencies </th>
<th>Target </th>
<th> Weight </th>
<th> Self Assessment (Actual) </th>
@if(("".Auth::user()->ID."" ==
     $appraisal_contents->manager_id))
<th>Managers Assessment (Actual) </th>
@endif


</tr>
</thead>
<tbody>

@if( !empty($appraisal_contents->competency1_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->competency1_field }}
</td>
<td>
{{ $appraisal_contents->competency1_target }}
</td>
<td>   {{ $appraisal_contents->competency1_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="competency1_staff_add" name =
"competency1_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->competency1_field }}"
value="{{$appraisal_contents->competency1_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="competency1_staff_add" name =
"competency1_staff" disabled type="number" max="{{ $appraisal_contents->competency1_field }}"
class="form-control" required
value="{{$appraisal_contents->competency1_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="competency1_staff_add" name =
"competency1_staff" disabled type="number" max="{{ $appraisal_contents->competency1_field }}"
class="form-control" required
value="{{$appraisal_contents->competency1_staff}}" />
</td>
<td>  <input id="competency1_manager_add" name =
"competency1_manager" type="text"
class="form-control"
value="{{$appraisal_contents->competency1_manager}}" max="{{ $appraisal_contents->competency1_field }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="competency1_staff_add" name =
"competency1_staff" disabled type="number" max="{{ $appraisal_contents->competency1_field }}"
class="form-control" required
value="{{$appraisal_contents->competency1_staff}}" />
</td>
<td>  <input id="competency1_manager_add" name =
"competency1_manager" type="text"
class="form-control"
value="{{$appraisal_contents->competency1_manager}}" max="{{ $appraisal_contents->competency1_field }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif


@if( !empty($appraisal_contents->competency2_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->competency2_field }}
</td>
<td>
{{ $appraisal_contents->competency2_target }}
</td>
<td>   {{ $appraisal_contents->competency2_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="competency2_staff_add" name =
"competency2_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->competency2_target }}"
value="{{$appraisal_contents->competency2_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="competency2_staff_add" name =
"competency2_staff" disabled type="number" max="{{ $appraisal_contents->competency2_target }}"
class="form-control" required
value="{{$appraisal_contents->competency2_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="competency2_staff_add" name =
"competency2_staff" disabled type="number" max="{{ $appraisal_contents->competency2_target }}"
class="form-control" required
value="{{$appraisal_contents->competency2_staff}}" />
</td>
<td>  <input id="competency2_manager_add" name =
"competency2_manager" type="text"
class="form-control"
value="{{$appraisal_contents->competency2_manager}}" max="{{ $appraisal_contents->competency2_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="competency2_staff_add" name =
"competency2_staff" disabled type="number" max="{{ $appraisal_contents->competency2_target }}"
class="form-control"
value="{{$appraisal_contents->competency2_staff}}" />
</td>
<td>  <input id="competency2_manager_add" name =
"competency2_manager" type="text"
class="form-control"
value="{{$appraisal_contents->competency2_manager}}" max="{{ $appraisal_contents->competency2_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif

@if( !empty($appraisal_contents->competency3_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->competency3_field }}
</td>
<td>
{{ $appraisal_contents->competency3_target }}
</td>
<td>   {{ $appraisal_contents->competency3_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="competency3_staff_add" name =
"competency3_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->competency3_target }}"
value="{{$appraisal_contents->competency3_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="competency3_staff_add" name =
"competency3_staff" disabled type="number" max="{{ $appraisal_contents->competency3_target }}"
class="form-control" required
value="{{$appraisal_contents->competency3_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="competency3_staff_add" name =
"competency3_staff" disabled type="number" max="{{ $appraisal_contents->competency3_target }}"
class="form-control" required
value="{{$appraisal_contents->competency3_staff}}" />
</td>
<td>  <input id="competency3_manager_add" name =
"competency3_manager" type="text"
class="form-control"
value="{{$appraisal_contents->competency3_manager}}" max="{{ $appraisal_contents->competency3_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="competency3_staff_add" name =
"competency3_staff" disabled type="number" max="{{ $appraisal_contents->competency3_target }}"
class="form-control" required
value="{{$appraisal_contents->competency3_staff}}" />
</td>
<td>  <input id="competency3_manager_add" name =
"competency3_manager" type="text"
class="form-control"
value="{{$appraisal_contents->competency3_manager}}" max="{{ $appraisal_contents->competency3_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif



{{--end of competency contents --}}


{{--competency COMMENT SECTION HERE --}}


@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea name = "competency_comment_staff" class="form-control"  style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->competency_comment_staff}}</textarea>
</td>
</tr>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "competency_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->competency_comment_staff}}</textarea>
</td>
</tr>
@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "competency_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->competency_comment_staff}}</textarea>
</td>
</tr>
<tr class="odd gradeX">
<td> </td>
<td >
Manager's Feedback &  Comments
</td>

<td colspan="6"><textarea name = "competency_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->competency_comment_manager}}</textarea>
</td>
</tr>
@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "competency_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->competency_comment_staff}}</textarea>
</td>
</tr>
<tr class="odd gradeX">
<td> </td>
<td >
Manager's Feedback &  Comments
</td>

<td colspan="6"><textarea  name = "competency_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->competency_comment_manager}}</textarea>
</td>
@else
<tr class="odd gradeX">
<td> </td> <td> Not authorized </td> <td> Not
authorized </td>
</tr>

@endif



{{--END OF competency COMMENT SECTION HERE --}}


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- END PROFILE CONTENT -->
</div>

</div>

<div class="tab-pane" id="tab3">

<div class="row">
<div class="col-md-12">
<!-- BEGIN PROFILE SIDEBAR -->
@include('appraisal.start_sidebar')
<!-- END BEGIN PROFILE SIDEBAR -->
<!-- BEGIN TICKET LIST CONTENT -->
<div class="app-ticket app-ticket-list">
<div class="row">
<div class="col-md-12">

<div class="portlet-body">

<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
<thead>
<tr>
<th>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
<span></span>
</label>
</th>
<th>
Behavioural Skills</th>
<th>Target </th>
<th> Weight </th>
<th> Self Assessment (Actual) </th>
@if(("".Auth::user()->ID."" ==
     $appraisal_contents->manager_id))
<th>Managers Assessment (Actual) </th>
@endif


</tr>
</thead>
<tbody>

@if( !empty($appraisal_contents->behavioural1_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->behavioural1_field }}
</td>
<td>
{{ $appraisal_contents->behavioural1_target }}
</td>
<td>   {{ $appraisal_contents->behavioural1_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="behavioural1_staff_add" name =
"behavioural1_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->behavioural1_target }}"
value="{{$appraisal_contents->behavioural1_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="behavioural1_staff_add" name =
"behavioural1_staff" disabled type="number" max="{{ $appraisal_contents->behavioural1_target }}"
class="form-control" required
value="{{$appraisal_contents->behavioural1_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="behavioural1_staff_add" name =
"behavioural1_staff" disabled type="number" max="{{ $appraisal_contents->behavioural1_target }}"
class="form-control" required
value="{{$appraisal_contents->behavioural1_staff}}" />
</td>
<td>  <input id="behavioural1_manager_add" name =
"behavioural1_manager" type="text"
class="form-control"
value="{{$appraisal_contents->behavioural1_manager}}" max="{{ $appraisal_contents->behavioural1_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="behavioural1_staff_add" name =
"behavioural1_staff" disabled type="number" max="{{ $appraisal_contents->behavioural1_target }}"
class="form-control" required
value="{{$appraisal_contents->behavioural1_staff}}" />
</td>
<td>  <input id="behavioural1_manager_add" name =
"behavioural1_manager" type="text"
class="form-control"
value="{{$appraisal_contents->behavioural1_manager}}" max="{{ $appraisal_contents->behavioural1_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif


@if( !empty($appraisal_contents->behavioural2_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->behavioural2_field }}
</td>
<td>
{{ $appraisal_contents->behavioural2_target }}
</td>
<td>   {{ $appraisal_contents->behavioural2_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="behavioural2_staff_add" name =
"behavioural2_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->behavioural2_target }}"
value="{{$appraisal_contents->behavioural2_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="behavioural2_staff_add" name =
"behavioural2_staff" disabled type="number" max="{{ $appraisal_contents->behavioural2_target }}"
class="form-control" required
value="{{$appraisal_contents->behavioural2_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="behavioural2_staff_add" name =
"behavioural2_staff" disabled type="number" max="{{ $appraisal_contents->behavioural2_target }}"
class="form-control" required
value="{{$appraisal_contents->behavioural2_staff}}" />
</td>
<td>  <input id="behavioural2_manager_add" name =
"behavioural2_manager" type="text"
class="form-control"
value="{{$appraisal_contents->behavioural2_manager}}" max="{{ $appraisal_contents->behavioural2_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="behavioural2_staff_add" name =
"behavioural2_staff" disabled type="number" max="{{ $appraisal_contents->behavioural2_target }}"
class="form-control"
value="{{$appraisal_contents->behavioural2_staff}}" />
</td>
<td>  <input id="behavioural2_manager_add" name =
"behavioural2_manager" type="text"
class="form-control"
value="{{$appraisal_contents->behavioural2_manager}}" max="{{ $appraisal_contents->behavioural2_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif

{{--end of behavioural contents --}}


{{--behavioural COMMENT SECTION HERE --}}


@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea name = "behavioural_comment_staff" class="form-control"  style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->behavioural_comment_staff}}</textarea>
</td>
</tr>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "behavioural_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->behavioural_comment_staff}}</textarea>
</td>
</tr>
@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "behavioural_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->behavioural_comment_staff}}</textarea>
</td>
</tr>
<tr class="odd gradeX">
<td> </td>
<td >
Manager's Feedback &  Comments
</td>

<td colspan="6"><textarea name = "behavioural_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->behavioural_comment_manager}}</textarea>
</td>
</tr>
@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "behavioural_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->behavioural_comment_staff}}</textarea>
</td>
</tr>
<tr class="odd gradeX">
<td> </td>
<td >
Manager's Feedback &  Comments
</td>

<td colspan="6"><textarea  name = "behavioural_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->behavioural_comment_manager}}</textarea>
</td>
@else
<tr class="odd gradeX">
<td> </td> <td> Not authorized </td> <td> Not
authorized </td>
</tr>

@endif



{{--END OF behavioural COMMENT SECTION HERE --}}


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- END PROFILE CONTENT -->
</div>

</div>

<div class="tab-pane" id="tab4">

<div class="row">
<div class="col-md-12">
<!-- BEGIN PROFILE SIDEBAR -->
@include('appraisal.start_sidebar')
<!-- END BEGIN PROFILE SIDEBAR -->
<!-- BEGIN TICKET LIST CONTENT -->
<div class="app-ticket app-ticket-list">
<div class="row">
<div class="col-md-12">

<div class="portlet-body">

<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
<thead>
<tr>
<th>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
<span></span>
</label>
</th>
<th>
Developmental Goals </th>
<th>Target </th>
<th> Weight </th>
<th> Self Assessment (Actual) </th>
@if(("".Auth::user()->ID."" ==
     $appraisal_contents->manager_id))
<th>Managers Assessment (Actual) </th>
@endif


</tr>
</thead>
<tbody>

@if( !empty($appraisal_contents->development1_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->development1_field }}
</td>
<td>
{{ $appraisal_contents->development1_target }}
</td>
<td>   {{ $appraisal_contents->development1_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="development1_staff_add" name =
"development1_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->development1_target }}"
value="{{$appraisal_contents->development1_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="development1_staff_add" name =
"development1_staff" disabled type="number" max="{{ $appraisal_contents->development1_target }}"
class="form-control" required
value="{{$appraisal_contents->development1_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="development1_staff_add" name =
"development1_staff" disabled type="number" max="{{ $appraisal_contents->development1_target }}"
class="form-control" required
value="{{$appraisal_contents->development1_staff}}" />
</td>
<td>  <input id="development1_manager_add" name =
"development1_manager" type="text"
class="form-control"
value="{{$appraisal_contents->development1_manager}}" max="{{ $appraisal_contents->development1_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="development1_staff_add" name =
"development1_staff" disabled type="number" max="{{ $appraisal_contents->development1_target }}"
class="form-control" required
value="{{$appraisal_contents->development1_staff}}" />
</td>
<td>  <input id="development1_manager_add" name =
"development1_manager" type="text"
class="form-control"
value="{{$appraisal_contents->development1_manager}}" max="{{ $appraisal_contents->development1_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif


@if( !empty($appraisal_contents->development2_field))
<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
{{ $appraisal_contents->development2_field }}
</td>
<td>
{{ $appraisal_contents->development2_target }}
</td>
<td>   {{ $appraisal_contents->development2_weight }} </td>

@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<td>
<input id="development2_staff_add" name =
"development2_staff" type="number" required
class="form-control" max="{{ $appraisal_contents->development2_target }}"
value="{{$appraisal_contents->development2_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<td>
<input id="development2_staff_add" name =
"development2_staff" disabled type="number" max="{{ $appraisal_contents->development2_target }}"
class="form-control" required
value="{{$appraisal_contents->development2_staff}}" />
</td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<td>
<input id="development2_staff_add" name =
"development2_staff" disabled type="number" max="{{ $appraisal_contents->development2_target }}"
class="form-control" required
value="{{$appraisal_contents->development2_staff}}" />
</td>
<td>  <input id="development2_manager_add" name =
"development2_manager" type="text"
class="form-control"
value="{{$appraisal_contents->development2_manager}}" max="{{ $appraisal_contents->development2_target }}">  </td>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))


<td>
<input id="development2_staff_add" name =
"development2_staff" disabled type="number" max="{{ $appraisal_contents->development2_target }}"
class="form-control"
value="{{$appraisal_contents->development2_staff}}" />
</td>
<td>  <input id="development2_manager_add" name =
"development2_manager" type="text"
class="form-control"
value="{{$appraisal_contents->development2_manager}}" max="{{ $appraisal_contents->development2_target }}">  </td>

@else
<td> Not authorized </td> <td> Not
authorized </td>

@endif


</tr>
@endif

{{--end of development contents --}}


{{--development COMMENT SECTION HERE --}}


@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 0) )
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea name = "development_comment_staff" class="form-control"  style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->development_comment_staff}}</textarea>
</td>
</tr>

@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->user_id) && ($appraisal_contents->manager_actioned == 1))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "development_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->development_comment_staff}}</textarea>
</td>
</tr>
@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 0))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "development_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->development_comment_staff}}</textarea>
</td>
</tr>
<tr class="odd gradeX">
<td> </td>
<td >
Manager's Feedback &  Comments
</td>

<td colspan="6"><textarea name = "development_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->development_comment_manager}}</textarea>
</td>
</tr>
@elseif(("".Auth::user()->ID."" ==
         $appraisal_contents->manager_id) && ($appraisal_contents->manager_actioned == 1))
<tr class="odd gradeX">
<td> </td>
<td >
Appraisee Feedback &  Comments
</td>

<td colspan="6"><textarea disabled name = "development_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->development_comment_staff}}</textarea>
</td>
</tr>
<tr class="odd gradeX">
<td> </td>
<td >
Manager's Feedback &  Comments
</td>

<td colspan="6"><textarea  name = "development_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->development_comment_manager}}</textarea>
</td>
@else
<tr class="odd gradeX">
<td> </td> <td> Not authorized </td> <td> Not
authorized </td>
</tr>

@endif



{{--END OF development COMMENT SECTION HERE --}}


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- END PROFILE CONTENT -->
</div>

</div>


<div class="tab-pane" id="tab5">

<div class="row">
<div class="col-md-12">
<!-- BEGIN PROFILE SIDEBAR -->
@include('appraisal.start_sidebar')
<!-- END BEGIN PROFILE SIDEBAR -->
<!-- BEGIN TICKET LIST CONTENT -->
<div class="app-ticket app-ticket-list">
<div class="row">
<div class="col-md-12">

<div class="portlet-body">

<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
<thead>
<tr>
<th>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
<span></span>
</label>
</th>
<th>Details
</th>
<th>Response
</th>
<th> Weight </th>



</tr>
</thead>
<tbody>


<tr class="odd gradeX">
<td>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="checkboxes" value="1" />
<span></span>
</label>
</td>
<td>
COMPANY'S QUARTERLY PERFORMANCE
</td>
<td>
100%
</td>
<td> 20  </td>


</tr>

{{--end of development contents --}}


{{--development COMMENT SECTION HERE --}}


@if("".Auth::user()->ID."" == $appraisal_contents->manager_id )
<tr class="odd gradeX">
<td> </td>
<td >
Final Feedback &  Comments
</td>

<td colspan="6"><textarea name = "final_comment_staff" class="form-control"  style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" required>{{$appraisal_contents->final_comment_staff}}</textarea>
</td>
</tr>


<tr class="odd gradeX">
<td> </td>
<td >
HEAD OF DEPARTMENT COMMENTS & FEEDBACK
</td>

<td colspan="6"><textarea  name = "final_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" >{{$appraisal_contents->final_comment_manager}}</textarea>
</td>
</tr>


@endif



{{--END OF development COMMENT SECTION HERE --}}


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- END PROFILE CONTENT -->
</div>

</div>

<div class="tab-pane" id="tab6">

<div class="row">
<div class="col-md-12">
<!-- BEGIN PROFILE SIDEBAR -->
@include('appraisal.start_sidebar')
<!-- END BEGIN PROFILE SIDEBAR -->
<!-- BEGIN TICKET LIST CONTENT -->
<div class="app-ticket app-ticket-list">
<div class="row">
<div class="col-md-12">

<div class="portlet-body">

<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
<thead>
<tr>
<th>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
<span></span>
</label>
</th>
<th>Promotion (To be approved by Management )
</th>
<th>Response
(Leave
 blank if
 none)

</th>




</tr>
</thead>
<tbody>




{{--end of development contents --}}


{{--development COMMENT SECTION HERE --}}


@if(("".Auth::user()->ID."" == $appraisal_contents->manager_id) )
<tr class="odd gradeX">
<td> </td>
<td >
Promotion to : (Please indicate proposed action)  </td>

<td colspan="6"><textarea name = "promoted_to" class="form-control"  style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" >{{$appraisal_contents->promoted_to}}</textarea>
</td>
</tr>


<tr class="odd gradeX">
<td> </td>
<td >
Please state reasons for this recommendation
</td>

<td colspan="6"><textarea  name = "promotion_reasons" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" >{{$appraisal_contents->promotion_reasons}}</textarea>
</td>
</tr>

@else
<tr class="odd gradeX">
<td> </td>
<td >
Promotion to : (Please indicate proposed action)  </td>

<td
colspan="6"><textarea disabled name = "promoted_to" class="form-control"  style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" >{{$appraisal_contents->promoted_to}}</textarea>
</td>
</tr>


<tr class="odd gradeX">
<td> </td>
<td >
Please state reasons for this recommendation
</td>

<td colspan="6"><textarea disabled name = "promotion_reasons" class="form-control" style="margin: 0px; width:100%; height: 170px;"
aria-invalid="false" >{{$appraisal_contents->promotion_reasons}}</textarea>
</td>
</tr>


@endif



{{--END OF development COMMENT SECTION HERE --}}


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- END PROFILE CONTENT -->
</div>

</div>


@csrf



</div>
</div>

{{--Entering the Action or Not --}}
@if(("".Auth::user()->ID."" == $appraisal_contents->user_id))
<input id="staff_actioned_edit" name = "staff_actioned" type="hidden"  value="1" class="form-control">
@elseif(("".Auth::user()->ID."" == $appraisal_contents->manager_id))
<input id="manager_actioned_edit" name = "manager_actioned" type="hidden"  value="1"  class="form-control">
@endif

<input id="user_id_edit" name = "user_id" value="{{$appraisal_contents->user_id}}"
type="hidden" class="form-control">
<input id="manager_id_edit" name = "manager_id"
value="{{$appraisal_contents->manager_id}}" type="hidden" class="form-control">
<input id="year_edit" name = "year" value="{{$appraisal_contents->year}}"
type="hidden" class="form-control">
{{--<input id="hr_id_edit" name = "hr_id" value="{{$appraisal_contents->user_id}}"
    type="text" class="form-control">--}}


<div class="form-actions">
<div class="row">
<div class="col-md-offset-8 col-md-12">
<a href="javascript:;" class="btn  btn-lg default button-previous">
<i class="icon-left"></i> Back </a>
<a href="javascript:;" class="btn btn-outline btn-lg blue button-next"> Continue
<i class="icon-right"></i>
</a>
@if(("".Auth::user()->ID."" == $appraisal_contents->user_id) && $appraisal_contents->manager_actioned == 1)

<button type="submit"  disabled class="btn blue btn-lg button-submit" > <i class="icon-check"></i> Submit Appraisal</button>

@else

<button type="submit"  class="btn blue btn-lg button-submit" > <i class="icon-check"></i> Submit Appraisal</button>
@endif

</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- END CONTENT BODY -->




<script>
/*using the been here before completed and successful*/
/*$(function(){
 $("#submit_form").submit(function(evt){
 evt.preventDefault();
 $.ajax({
 type: 'PUT',
 url:  $(this).attr('action'),
 data: $("#submit_form").serialize(),
 success: function (data) {
 preventDefault();
 
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
 swal("Success", 'Successfully Submitted', "success");
 }
 
 };
 });
 });
 */
</script>



<script>
/*using the been here before completed and successful*/
$(function(){
  $("#submit_form").submit(function(evt){
                           evt.preventDefault();
                           var url = $(this).attr('action');
                           var postData = $(this).serialize();
                           $.post(url, postData, function(dor){
                                  if (dor.result == 1){
                                  
                                  $("#submit_form").trigger('reset'); //reset the form
                                  
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


{{--
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    
    --}}
<link href="{{ asset('assets/pages/css/profile.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/apps/css/ticket.min.css') }}" rel="stylesheet" type="text/css" />

<script src="{{ asset('assets/pages/scripts/form-wizard.min.js') }}" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@include('includes.scripts_form')
