@extends('layouts.frontend') @section('content') 
@section('page_title')Annual Appraisal KPI @endsection
<!-- BEGIN CONTENT -->
<?php
use App\User;
?>
@include('appraisal.menu')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            Appraisal 
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">Appraisal KPI</a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption"> <i class="fa fa-globe"></i>Appraisal </div>
                        <div class="actions"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="" style="display:none;" id="creator-form">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                        Add New Appraisal
                                    </h2>
                                    <span>Adding new records for Appraisal</span> 
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
                                                                {{ csrf_field() }}


                                                                <h3 class="form-section">Staff Details</h3>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">Select Staff
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <select class="form-control select2me" required id="user_id_add" name = "user_id">
                                                                            <option value="">Select Staff...</option>
                                                                            @foreach($users as $user)
                                                                                <option value="{{ $user->ID }}">{{ $user->name }}</option>
                                                                            @endforeach


                                                                        </select>
                                                                    </div>
                                                                </div>




                                                                <div class=" form-group">
                                                                    <label class="control-label col-md-2">Manager /
                                                                        Supervisor
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <select class="form-control select2me" required id="manager_id_add" name = "manager_id">
                                                                            <option value="">Select Manager /
                                                                                Supervisor...</option>
                                                                            @foreach($users as $user)
                                                                                <option value="{{ $user->ID }}">{{ $user->name }}</option>
                                                                            @endforeach


                                                                        </select>
                                                                    </div>
                                                                </div>

<br >
                                                                <div class="row form-group" style="margin-top:15px ;
                                                                padding:15px;">
                                                                    <label class="control-label col-md-2">Year of
                                                                        Appraisal
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <select class="form-control select2me" required id="year_add" name = "year">
                                                                            <option value="">Select Manager /
                                                                                Supervisor...</option>
                                                                            @foreach($appraisal_years as $appraisal_year)
                                                                                <option value="2018" selected> 2018</option>
                                                                                <option value="{{ $appraisal_year->year }}">{{ $appraisal_year->year }}</option>
                                                                            @endforeach


                                                                        </select>
                                                                    </div>
                                                                </div>


<div class="row form-group" style="margin-top:15px ;
padding:15px;">
<label class="control-label col-md-2">Head of Dept
<span class="required"> * </span>
</label>
<div class="col-md-4">
<select class="form-control select2me" required id="hod_id_add" name = "hod_id">
<option value="">Select Head of Dept /
Supervisor...</option>
@foreach($users as $user)
<option value="{{ $user->ID }}">{{ $user->name }}</option>
@endforeach


</select>
</div>
</div>



                                                                <h3 class="form-section">Key Performance Indicator</h3>

                                                                <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                                <span></span>
                                                                            </label>
                                                                        </th>
                                                                        <th> KPI </th>
                                                                        <th>TARGET (%)</th>
                                                                        <th> WEIGHT (%)</th>

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
                                                                        <td style="width:60%;">
                                                                            <input id="kpi1_field_add" name = "kpi1_field" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi1_target_add" value="100"
                                                                                   name =
                                                                            "kpi1_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi1_weight_add" name =
                                                                            "kpi1_weight" type="text" value="10"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="kpi2_field_add" name = "kpi2_field" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi2_target_add" value="100"
                                                                                   name =
                                                                                   "kpi2_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi2_weight_add" name =
                                                                            "kpi2_weight" type="text" value="10"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="kpi3_field_add" name = "kpi3_field" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi3_target_add" value="100"
                                                                                   name =
                                                                                   "kpi3_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi3_weight_add" name =
                                                                            "kpi3_weight" type="text" value="10"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="kpi4_field_add" name = "kpi4_field" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi4_target_add" value="100"
                                                                                   name =
                                                                                   "kpi4_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi4_weight_add" name =
                                                                            "kpi4_weight" type="text" value="10"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="kpi5_field_add" name = "kpi5_field" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi5_target_add" value="100"
                                                                                   name =
                                                                                   "kpi5_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi5_weight_add" name =
                                                                            "kpi5_weight" type="text" value="10"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="kpi6_field_add" name = "kpi6_field" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi6_target_add"
                                                                                   name =
                                                                                   "kpi6_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi6_weight_add" name =
                                                                            "kpi6_weight" type="text"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="kpi7_field_add" name = "kpi7_field" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi7_target_add"
                                                                                   name =
                                                                                   "kpi7_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi7_weight_add" name =
                                                                            "kpi7_weight" type="text"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="kpi8_field_add" name = "kpi8_field" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi8_target_add"
                                                                                   name =
                                                                                   "kpi8_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="kpi8_weight_add" name =
                                                                            "kpi8_weight" type="text"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>


                                                                    </tbody>
                                                                </table>



                                                                <h3 class="form-section">Competencies </h3>

                                                                <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                                <span></span>
                                                                            </label>
                                                                        </th>
                                                                        <th> COMPETENCIES </th>
                                                                        <th>TARGET (%)</th>
                                                                        <th> WEIGHT (%)</th>

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
                                                                        <td style="width:60%;">
                                                                            <input id="competency1_field_add" name =
                                                                            "competency1_field"  value="Quality of work:Adapts and implements continuous improvement methods that leverage learning to get better results from business  efforts with little assistance." type="text"
                                                                                   class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="competency1_target_add" value="100"
                                                                                   name =
                                                                                   "competency1_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="competency1_weight_add" name =
                                                                            "competency1_weight" type="text" value="10"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="competency2_field_add" name =
                                                                            "competency2_field"  value="Personal effectiveness: Efficiently manages time, being well organized and demonstrates positive attitude, honesty, openness and reliability." type="text"
                                                                                   class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="competency2_target_add" value="100"
                                                                                   name =
                                                                                   "competency2_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="competency2_weight_add" name =
                                                                            "competency2_weight" type="text" value="10"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="competency3_field_add" name =
                                                                            "competency3_field"   type="text"
                                                                                   class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="competency3_target_add"
                                                                                   name =
                                                                                   "competency3_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="competency3_weight_add" name =
                                                                            "competency3_weight" type="text"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>

                                                                    </tbody>
                                                                </table>








                                                                <h3 class="form-section">  Behavioural Skills </h3>

                                                                <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                                <span></span>
                                                                            </label>
                                                                        </th>
                                                                        <th> BEHAVIOURIAL SKILLS  </th>
                                                                        <th>TARGET (%)</th>
                                                                        <th> WEIGHT (%)</th>

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
                                                                        <td style="width:60%;">
                                                                            <input id="behavioural1_field_add" name =
                                                                            "behavioural1_field"  value="OUR CORE VALUES  * Team Work * Integrity * Innovation & Excellence  * Respect * Accountability (Best score 4, Least score 1)" type="text"
                                                                                   class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="behavioural1_target_add"
                                                                                   value="4"
                                                                                   name =
                                                                                   "behavioural1_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="behavioural1_weight_add" name =
                                                                            "behavioural1_weight" type="text" value="10"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="behavioural2_field_add" name =
                                                                            "behavioural2_field"  type="text"
                                                                                   class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="behavioural2_target_add"
                                                                                   name =
                                                                                   "behavioural2_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="behavioural2_weight_add" name =
                                                                            "behavioural2_weight" type="text"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>


                                                                    </tbody>
                                                                </table>



                                                                <h3 class="form-section"> Developmental Goals</h3>

                                                                <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                                <span></span>
                                                                            </label>
                                                                        </th>
                                                                        <th> DEVELOPMENTAL GOALS  </th>
                                                                        <th>TARGET (%)</th>
                                                                        <th> WEIGHT (%)</th>

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
                                                                        <td style="width:60%;">
                                                                            <input id="development1_field_add" name =
                                                                            "development1_field"  value=" New skills and training developed during the Quarter. This is to enable growth & capacity building." type="text"
                                                                                   class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="development1_target_add"
                                                                                   value="100"
                                                                                   name =
                                                                                   "development1_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="development1_weight_add" name =
                                                                            "development1_weight" type="text"
                                                                                   value="0.0"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="odd gradeX">
                                                                        <td>
                                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td style="width:60%;">
                                                                            <input id="development2_field_add" name =
                                                                            "development2_field"  type="text"
                                                                                   class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="development2_target_add"
                                                                                   name =
                                                                                   "development2_target" type="text" class="form-control">
                                                                        </td>
                                                                        <td>
                                                                            <input id="development2_weight_add" name =
                                                                            "development2_weight" type="text"
                                                                                   class="form-control">
                                                                        </td>

                                                                    </tr>


                                                                    </tbody>
                                                                </table>

                                                                <input id="hr_actioned_add" name =
                                                                "hr_actioned" value="1" type="hidden"
                                                                       class="form-control">


                                                                <input id="hr_id_add" name =
                                                                "hr_id" value="{{ Auth::user()->ID }}" type="hidden"
                                                                       class="form-control">



                                                                {{--<div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label">users Select</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <select name = 'user_id' id="hr_id_add" class = 'form-control'>
                                                                            @foreach($users as $key => $value) 
                                                                            <option value="{{$key}}">{{$value}}</option>
                                                                            @endforeach 
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label">appraisal_years Select</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <select name = 'appraisal_year_id' id="hr_id_add" class = 'form-control'>
                                                                            @foreach($appraisal_years as $key => $value) 
                                                                            <option value="{{$key}}">{{$value}}</option>
                                                                            @endforeach 
                                                                        </select>
                                                                    </div>
                                                                </div>--}}
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
                                                Editing appraisal KPI
                                            </h2>
                                            <span>Editing appraisal</span> 
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
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" class="form-control" id="id_edit" disabled>



                                                                        <h3 class="form-section">Staff Details</h3>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-2">Select Staff
                                                                                <span class="required"> * </span>
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <input id="user_id_edit" name = "user_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>




                                                                        <div class=" form-group">
                                                                            <label class="control-label col-md-2">Manager /
                                                                                Supervisor
                                                                                <span class="required"> * </span>
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <select class="form-control select2me" required id="manager_id_edit" name = "manager_id">
                                                                                    <option value="">Select Manager /
                                                                                        Supervisor...</option>
                                                                                    @foreach($users as $user)
                                                                                        <option value="{{ $user->ID }}">{{ $user->name }}</option>
                                                                                    @endforeach


                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <br >
                                                                        <div class="row form-group" style="margin-top:15px ;
                                                                padding:15px;">
                                                                            <label class="control-label col-md-2">Year of
                                                                                Appraisal
                                                                                <span class="required"> * </span>
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <select class="form-control select2me" required id="year_edit" name = "year">
                                                                                    <option value="">Select Manager /
                                                                                        Supervisor...</option>
                                                                                    @foreach($appraisal_years as $appraisal_year)
                                                                                        <option value="2018" selected> 2018</option>
                                                                                        <option value="{{ $appraisal_year->year }}">{{ $appraisal_year->year }}</option>
                                                                                    @endforeach


                                                                                </select>
                                                                            </div>
                                                                        </div>



<div class="row form-group" style="margin-top:15px ;
padding:15px;">
<label class="control-label col-md-2">Head of Dept
<span class="required"> * </span>
</label>
<div class="col-md-4">
<select class="form-control select2me" required id="hod_id_edit" name = "hod_id">
<option value="">Select Head of Dept /
Supervisor...</option>
@foreach($users as $user)
<option value="{{ $user->ID }}">{{ $user->name }}</option>
@endforeach


</select>
</div>
</div>



                                                                        <h3 class="form-section">Key Performance Indicator</h3>

                                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </th>
                                                                                <th> KPI </th>
                                                                                <th>TARGET (%)</th>
                                                                                <th> WEIGHT (%)</th>

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
                                                                                <td style="width:60%;">
                                                                                    <input id="kpi1_field_edit" name = "kpi1_field" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi1_target_edit" value="100"
                                                                                           name =
                                                                                           "kpi1_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi1_weight_edit" name =
                                                                                    "kpi1_weight" type="text" value="10"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="kpi2_field_edit" name = "kpi2_field" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi2_target_edit" value="100"
                                                                                           name =
                                                                                           "kpi2_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi2_weight_edit" name =
                                                                                    "kpi2_weight" type="text" value="10"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="kpi3_field_edit" name = "kpi3_field" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi3_target_edit" value="100"
                                                                                           name =
                                                                                           "kpi3_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi3_weight_edit" name =
                                                                                    "kpi3_weight" type="text" value="10"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="kpi4_field_edit" name = "kpi4_field" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi4_target_edit" value="100"
                                                                                           name =
                                                                                           "kpi4_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi4_weight_edit" name =
                                                                                    "kpi4_weight" type="text" value="10"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="kpi5_field_edit" name = "kpi5_field" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi5_target_edit" value="100"
                                                                                           name =
                                                                                           "kpi5_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi5_weight_edit" name =
                                                                                    "kpi5_weight" type="text" value="10"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="kpi6_field_edit" name = "kpi6_field" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi6_target_edit"
                                                                                           name =
                                                                                           "kpi6_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi6_weight_edit" name =
                                                                                    "kpi6_weight" type="text"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="kpi7_field_edit" name = "kpi7_field" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi7_target_edit"
                                                                                           name =
                                                                                           "kpi7_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi7_weight_edit" name =
                                                                                    "kpi7_weight" type="text"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="kpi8_field_edit" name = "kpi8_field" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi8_target_edit"
                                                                                           name =
                                                                                           "kpi8_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="kpi8_weight_edit" name =
                                                                                    "kpi8_weight" type="text"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>


                                                                            </tbody>
                                                                        </table>



                                                                        <h3 class="form-section">Competencies </h3>

                                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </th>
                                                                                <th> COMPETENCIES </th>
                                                                                <th>TARGET (%)</th>
                                                                                <th> WEIGHT (%)</th>

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
                                                                                <td style="width:60%;">
                                                                                    <input id="competency1_field_edit" name =
                                                                                    "competency1_field"  value="Quality of work:Adapts and implements continuous improvement methods that leverage learning to get better results from business  efforts with little assistance." type="text"
                                                                                           class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="competency1_target_edit" value="100"
                                                                                           name =
                                                                                           "competency1_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="competency1_weight_edit" name =
                                                                                    "competency1_weight" type="text" value="10"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="competency2_field_edit" name =
                                                                                    "competency2_field"  value="Personal effectiveness: Effeciently manages time, being well organized and demonstrtaes positive attitude, honesty, openess and realiablity." type="text"
                                                                                           class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="competency2_target_edit" value="100"
                                                                                           name =
                                                                                           "competency2_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="competency2_weight_edit" name =
                                                                                    "competency2_weight" type="text" value="10"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="competency3_field_edit" name =
                                                                                    "competency3_field"   type="text"
                                                                                           class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="competency3_target_edit"
                                                                                           name =
                                                                                           "competency3_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="competency3_weight_edit" name =
                                                                                    "competency3_weight" type="text"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>

                                                                            </tbody>
                                                                        </table>








                                                                        <h3 class="form-section">  Behavioural Skills </h3>

                                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </th>
                                                                                <th> BEHAVIOURIAL SKILLS  </th>
                                                                                <th>TARGET (%)</th>
                                                                                <th> WEIGHT (%)</th>

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
                                                                                <td style="width:60%;">
                                                                                    <input id="behavioural1_field_edit" name =
                                                                                    "behavioural1_field"  value="OUR CORE VALUES  * Team Work * Integrity * Innovation & Excellence  * Respect * Accountability (Best score 4, Least score 1)" type="text"
                                                                                           class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="behavioural1_target_edit"
                                                                                           value="4"
                                                                                           name =
                                                                                           "behavioural1_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="behavioural1_weight_edit" name =
                                                                                    "behavioural1_weight" type="text" value="10"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="behavioural2_field_edit" name =
                                                                                    "behavioural2_field"  type="text"
                                                                                           class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="behavioural2_target_edit"
                                                                                           name =
                                                                                           "behavioural2_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="behavioural2_weight_edit" name =
                                                                                    "behavioural2_weight" type="text"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>


                                                                            </tbody>
                                                                        </table>



                                                                        <h3 class="form-section"> Developmental Goals</h3>

                                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </th>
                                                                                <th> DEVELOPMENTAL GOALS  </th>
                                                                                <th>TARGET (%)</th>
                                                                                <th> WEIGHT (%)</th>

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
                                                                                <td style="width:60%;">
                                                                                    <input id="development1_field_edit" name =
                                                                                    "development1_field"  value=" New skills and training developed during the Quarter. This is to enable growth & capacity building." type="text"
                                                                                           class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="development1_target_edit"
                                                                                           value="100"
                                                                                           name =
                                                                                           "development1_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="development1_weight_edit" name =
                                                                                    "development1_weight" type="text"
                                                                                           value="0.0"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="odd gradeX">
                                                                                <td>
                                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td style="width:60%;">
                                                                                    <input id="development2_field_edit" name =
                                                                                    "development2_field"  type="text"
                                                                                           class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="development2_target_edit"
                                                                                           name =
                                                                                           "development2_target" type="text" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <input id="development2_weight_edit" name =
                                                                                    "development2_weight" type="text"
                                                                                           class="form-control">
                                                                                </td>

                                                                            </tr>


                                                                            </tbody>
                                                                        </table>

                                                                        <input id="hr_actioned_edit" name =
                                                                        "hr_actioned" value="1" type="hidden"
                                                                               class="form-control">


                                                                        <input id="hr_id_edit" name =
                                                                        "hr_id" value="{{ Auth::user()->ID }}" type="hidden"
                                                                               class="form-control">

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
                                                        Appraisal
                                                    </h2>
                                                    <span>Displaying Appraisal</span> 
                                                    <button id="btn-form-create" class="btn btn-lg btn-success" style="margin:30px;" > Add new Appraisal </button>
                                                    <div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div>
                                                        <div id="new-cons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12">
                                                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>Staff Name</th>

                                                                                <th>Supervisor / Team Lead</th>
                                                                                <th>Year</th>

                                                                                <th>Created By</th>

                                                                                <th>Email</th>

                                                                                <th>Department</th>


                                                                                                                                                              <th>Last Update</th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="FAoKt9NQHDIAz0lpuHOdHu6IeWveBXg4ZTA5ppyd">
                                                                        </thead>
                                                                        <tbody id="PostContent">
                                                                            @foreach($appraisals as $appraisal) 
                                                                            <tr class="item{!!$appraisal->
                                                                                id!!}" > 

                                                                                <td>{{User::find($appraisal->user_id)
                                                                                ->name }} </td>
                                                                                <td>{{User::find($appraisal->manager_id)
                                                                                ->name }}
                                                                                   </td>
                                                                                <td>{!!$appraisal->year!!}</td>
                                                                                <td>{{User::find($appraisal->hr_id)
                                                                                ->name }} </td>

<td>{{-- {!!$appraisal->user->email!!} --}}</td>


                                                                                <td>{{-- {!!$appraisal->user->department!!} --}}</td>


                                                                                <td>{!!$appraisal->updated_at->diffForHumans()!!} </td>
                                                                                <td>
                                                                                    <button class="edit-modal btn btn-info btn-sm" data-id="{!!$appraisal->id!!}" data-kpi1_field="{!!$appraisal->kpi1_field!!}" data-kpi1_target="{!!$appraisal->kpi1_target!!}" data-kpi1_weight="{!!$appraisal->kpi1_weight!!}" data-kpi1_staff="{!!$appraisal->kpi1_staff!!}" data-kpi1_manager="{!!$appraisal->kpi1_manager!!}" data-kpi2_field="{!!$appraisal->kpi2_field!!}" data-kpi2_target="{!!$appraisal->kpi2_target!!}" data-kpi2_weight="{!!$appraisal->kpi2_weight!!}" data-kpi2_staff="{!!$appraisal->kpi2_staff!!}" data-kpi2_manager="{!!$appraisal->kpi2_manager!!}" data-kpi3_field="{!!$appraisal->kpi3_field!!}" data-kpi3_target="{!!$appraisal->kpi3_target!!}" data-kpi3_weight="{!!$appraisal->kpi3_weight!!}" data-kpi3_staff="{!!$appraisal->kpi3_staff!!}" data-kpi3_manager="{!!$appraisal->kpi3_manager!!}" data-kpi4_field="{!!$appraisal->kpi4_field!!}" data-kpi4_target="{!!$appraisal->kpi4_target!!}" data-kpi4_weight="{!!$appraisal->kpi4_weight!!}" data-kpi4_staff="{!!$appraisal->kpi4_staff!!}" data-kpi4_manager="{!!$appraisal->kpi4_manager!!}" data-kpi5_field="{!!$appraisal->kpi5_field!!}" data-kpi5_target="{!!$appraisal->kpi5_target!!}" data-kpi5_weight="{!!$appraisal->kpi5_weight!!}" data-kpi5_staff="{!!$appraisal->kpi5_staff!!}" data-kpi5_manager="{!!$appraisal->kpi5_manager!!}" data-kpi6_field="{!!$appraisal->kpi6_field!!}" data-kpi6_target="{!!$appraisal->kpi6_target!!}" data-kpi6_weight="{!!$appraisal->kpi6_weight!!}" data-kpi6_staff="{!!$appraisal->kpi6_staff!!}" data-kpi6_manager="{!!$appraisal->kpi6_manager!!}" data-kpi7_field="{!!$appraisal->kpi7_field!!}" data-kpi7_target="{!!$appraisal->kpi7_target!!}" data-kpi7_weight="{!!$appraisal->kpi7_weight!!}" data-kpi7_staff="{!!$appraisal->kpi7_staff!!}" data-kpi7_manager="{!!$appraisal->kpi7_manager!!}" data-kpi8_field="{!!$appraisal->kpi8_field!!}" data-kpi8_target="{!!$appraisal->kpi8_target!!}" data-kpi8_weight="{!!$appraisal->kpi8_weight!!}" data-kpi8_staff="{!!$appraisal->kpi8_staff!!}" data-kpi8_manager="{!!$appraisal->kpi8_manager!!}" data-kpi_comment_staff="{!!$appraisal->kpi_comment_staff!!}" data-kpi_comment_manager="{!!$appraisal->kpi_comment_manager!!}" data-competency1_field="{!!$appraisal->competency1_field!!}" data-competency1_target="{!!$appraisal->competency1_target!!}" data-competency1_weight="{!!$appraisal->competency1_weight!!}" data-competency1_staff="{!!$appraisal->competency1_staff!!}" data-competency1_manager="{!!$appraisal->competency1_manager!!}" data-competency2_field="{!!$appraisal->competency2_field!!}" data-competency2_target="{!!$appraisal->competency2_target!!}" data-competency2_weight="{!!$appraisal->competency2_weight!!}" data-competency2_staff="{!!$appraisal->competency2_staff!!}" data-competency2_manager="{!!$appraisal->competency2_manager!!}" data-competency3_field="{!!$appraisal->competency3_field!!}" data-competency3_target="{!!$appraisal->competency3_target!!}" data-competency3_weight="{!!$appraisal->competency3_weight!!}" data-competency3_staff="{!!$appraisal->competency3_staff!!}" data-competency3_manager="{!!$appraisal->competency3_manager!!}" data-competency_comment_staff="{!!$appraisal->competency_comment_staff!!}" data-competency_comment_manager="{!!$appraisal->competency_comment_manager!!}" data-behavioural1_field="{!!$appraisal->behavioural1_field!!}" data-behavioural1_target="{!!$appraisal->behavioural1_target!!}" data-behavioural1_weight="{!!$appraisal->behavioural1_weight!!}" data-behavioural1_staff="{!!$appraisal->behavioural1_staff!!}" data-behavioural1_manager="{!!$appraisal->behavioural1_manager!!}" data-behavioural2_field="{!!$appraisal->behavioural2_field!!}" data-behavioural2_target="{!!$appraisal->behavioural2_target!!}" data-behavioural2_weight="{!!$appraisal->behavioural2_weight!!}" data-behavioural2_staff="{!!$appraisal->behavioural2_staff!!}" data-behavioural2_manager="{!!$appraisal->behavioural2_manager!!}" data-behavioural_comment_staff="{!!$appraisal->behavioural_comment_staff!!}" data-behavioural_comment_manager="{!!$appraisal->behavioural_comment_manager!!}" data-development1_field="{!!$appraisal->development1_field!!}" data-development1_target="{!!$appraisal->development1_target!!}" data-development1_weight="{!!$appraisal->development1_weight!!}" data-development1_staff="{!!$appraisal->development1_staff!!}" data-development1_manager="{!!$appraisal->development1_manager!!}" data-development2_field="{!!$appraisal->development2_field!!}" data-development2_target="{!!$appraisal->development2_target!!}" data-development2_weight="{!!$appraisal->development2_weight!!}" data-development2_staff="{!!$appraisal->development2_staff!!}" data-development2_manager="{!!$appraisal->development2_manager!!}" data-development_comment_staff="{!!$appraisal->development_comment_staff!!}" data-development_comment_manager="{!!$appraisal->development_comment_manager!!}" data-final_comment_staff="{!!$appraisal->final_comment_staff!!}" data-final_comment_manager="{!!$appraisal->final_comment_manager!!}" data-promoted_to="{!!$appraisal->promoted_to!!}" data-promotion_reasons="{!!$appraisal->promotion_reasons!!}" data-hr_actioned="{!!$appraisal->hr_actioned!!}" data-staff_actioned="{!!$appraisal->staff_actioned!!}" data-manager_actioned="{!!$appraisal->manager_actioned!!}" data-status="{!!$appraisal->status!!}" data-completed="{!!$appraisal->completed!!}" data-user_id="{!!$appraisal->user_id!!}" data-manager_id="{!!$appraisal->manager_id!!}" data-year="{!!$appraisal->year!!}" data-hr_id="{!!$appraisal->hr_id!!}" > Edit </button>
                                                                                    <button class="delete-modal btn btn-danger btn-sm" data-id="{!!$appraisal->id!!}"> Delete </button>
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
                                                        <p class="text-center"> Do you want to delete this Appraisal record </p>
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
                                        <style> .card { box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2); transition: 0.3s; padding:15px; border-radius: 5px; /* 5px rounded corners */ }
                                            .form-section {margin: 30px 0;padding-bottom: 5px; border-bottom: 1px solid #e7ecf1;}</style>
                                        <!-- Page body start -->
                                        <!-- Page body end of content before includes of component-->
                                        <!-- Modal form to delete a form -->
                                        @section('scripts') 
                                        <!-- sweet alert js -->
                                        <script src="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.js') }}" type="text/javascript"></script>
                                        <link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />



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
            url: 'appraisal',
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
                    $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.kpi1_field + "</td> <td>" + data.kpi1_target + "</td> <td>" + data.kpi1_weight + "</td> <td>" + data.kpi1_staff + "</td> <td>" + data.kpi1_manager + "</td> <td>" + data.kpi2_field + "</td> <td>" + data.kpi2_target + "</td> <td>" + data.kpi2_weight + "</td> <td>" + data.kpi2_staff + "</td> <td>" + data.kpi2_manager + "</td> <td>" + data.kpi3_field + "</td> <td>" + data.kpi3_target + "</td> <td>" + data.kpi3_weight + "</td> <td>" + data.kpi3_staff + "</td> <td>" + data.kpi3_manager + "</td> <td>" + data.kpi4_field + "</td> <td>" + data.kpi4_target + "</td> <td>" + data.kpi4_weight + "</td> <td>" + data.kpi4_staff + "</td> <td>" + data.kpi4_manager + "</td> <td>" + data.kpi5_field + "</td> <td>" + data.kpi5_target + "</td> <td>" + data.kpi5_weight + "</td> <td>" + data.kpi5_staff + "</td> <td>" + data.kpi5_manager + "</td> <td>" + data.kpi6_field + "</td> <td>" + data.kpi6_target + "</td> <td>" + data.kpi6_weight + "</td> <td>" + data.kpi6_staff + "</td> <td>" + data.kpi6_manager + "</td> <td>" + data.kpi7_field + "</td> <td>" + data.kpi7_target + "</td> <td>" + data.kpi7_weight + "</td> <td>" + data.kpi7_staff + "</td> <td>" + data.kpi7_manager + "</td> <td>" + data.kpi8_field + "</td> <td>" + data.kpi8_target + "</td> <td>" + data.kpi8_weight + "</td> <td>" + data.kpi8_staff + "</td> <td>" + data.kpi8_manager + "</td> <td>" + data.kpi_comment_staff + "</td> <td>" + data.kpi_comment_manager + "</td> <td>" + data.competency1_field + "</td> <td>" + data.competency1_target + "</td> <td>" + data.competency1_weight + "</td> <td>" + data.competency1_staff + "</td> <td>" + data.competency1_manager + "</td> <td>" + data.competency2_field + "</td> <td>" + data.competency2_target + "</td> <td>" + data.competency2_weight + "</td> <td>" + data.competency2_staff + "</td> <td>" + data.competency2_manager + "</td> <td>" + data.competency3_field + "</td> <td>" + data.competency3_target + "</td> <td>" + data.competency3_weight + "</td> <td>" + data.competency3_staff + "</td> <td>" + data.competency3_manager + "</td> <td>" + data.competency_comment_staff + "</td> <td>" + data.competency_comment_manager + "</td> <td>" + data.behavioural1_field + "</td> <td>" + data.behavioural1_target + "</td> <td>" + data.behavioural1_weight + "</td> <td>" + data.behavioural1_staff + "</td> <td>" + data.behavioural1_manager + "</td> <td>" + data.behavioural2_field + "</td> <td>" + data.behavioural2_target + "</td> <td>" + data.behavioural2_weight + "</td> <td>" + data.behavioural2_staff + "</td> <td>" + data.behavioural2_manager + "</td> <td>" + data.behavioural_comment_staff + "</td> <td>" + data.behavioural_comment_manager + "</td> <td>" + data.development1_field + "</td> <td>" + data.development1_target + "</td> <td>" + data.development1_weight + "</td> <td>" + data.development1_staff + "</td> <td>" + data.development1_manager + "</td> <td>" + data.development2_field + "</td> <td>" + data.development2_target + "</td> <td>" + data.development2_weight + "</td> <td>" + data.development2_staff + "</td> <td>" + data.development2_manager + "</td> <td>" + data.development_comment_staff + "</td> <td>" + data.development_comment_manager + "</td> <td>" + data.final_comment_staff + "</td> <td>" + data.final_comment_manager + "</td> <td>" + data.promoted_to + "</td> <td>" + data.promotion_reasons + "</td> <td>" + data.hr_actioned + "</td> <td>" + data.staff_actioned + "</td> <td>" + data.manager_actioned + "</td> <td>" + data.status + "</td> <td>" + data.completed + "</td> <td>" + data.user_id + "</td> <td>" + data.manager_id + "</td> <td>" + data.year + "</td> <td>" + data.hr_id + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-kpi1_field='" + data.kpi1_field + "'   data-kpi1_target='" + data.kpi1_target + "'   data-kpi1_weight='" + data.kpi1_weight + "'   data-kpi1_staff='" + data.kpi1_staff + "'   data-kpi1_manager='" + data.kpi1_manager + "'   data-kpi2_field='" + data.kpi2_field + "'   data-kpi2_target='" + data.kpi2_target + "'   data-kpi2_weight='" + data.kpi2_weight + "'   data-kpi2_staff='" + data.kpi2_staff + "'   data-kpi2_manager='" + data.kpi2_manager + "'   data-kpi3_field='" + data.kpi3_field + "'   data-kpi3_target='" + data.kpi3_target + "'   data-kpi3_weight='" + data.kpi3_weight + "'   data-kpi3_staff='" + data.kpi3_staff + "'   data-kpi3_manager='" + data.kpi3_manager + "'   data-kpi4_field='" + data.kpi4_field + "'   data-kpi4_target='" + data.kpi4_target + "'   data-kpi4_weight='" + data.kpi4_weight + "'   data-kpi4_staff='" + data.kpi4_staff + "'   data-kpi4_manager='" + data.kpi4_manager + "'   data-kpi5_field='" + data.kpi5_field + "'   data-kpi5_target='" + data.kpi5_target + "'   data-kpi5_weight='" + data.kpi5_weight + "'   data-kpi5_staff='" + data.kpi5_staff + "'   data-kpi5_manager='" + data.kpi5_manager + "'   data-kpi6_field='" + data.kpi6_field + "'   data-kpi6_target='" + data.kpi6_target + "'   data-kpi6_weight='" + data.kpi6_weight + "'   data-kpi6_staff='" + data.kpi6_staff + "'   data-kpi6_manager='" + data.kpi6_manager + "'   data-kpi7_field='" + data.kpi7_field + "'   data-kpi7_target='" + data.kpi7_target + "'   data-kpi7_weight='" + data.kpi7_weight + "'   data-kpi7_staff='" + data.kpi7_staff + "'   data-kpi7_manager='" + data.kpi7_manager + "'   data-kpi8_field='" + data.kpi8_field + "'   data-kpi8_target='" + data.kpi8_target + "'   data-kpi8_weight='" + data.kpi8_weight + "'   data-kpi8_staff='" + data.kpi8_staff + "'   data-kpi8_manager='" + data.kpi8_manager + "'   data-kpi_comment_staff='" + data.kpi_comment_staff + "'   data-kpi_comment_manager='" + data.kpi_comment_manager + "'   data-competency1_field='" + data.competency1_field + "'   data-competency1_target='" + data.competency1_target + "'   data-competency1_weight='" + data.competency1_weight + "'   data-competency1_staff='" + data.competency1_staff + "'   data-competency1_manager='" + data.competency1_manager + "'   data-competency2_field='" + data.competency2_field + "'   data-competency2_target='" + data.competency2_target + "'   data-competency2_weight='" + data.competency2_weight + "'   data-competency2_staff='" + data.competency2_staff + "'   data-competency2_manager='" + data.competency2_manager + "'   data-competency3_field='" + data.competency3_field + "'   data-competency3_target='" + data.competency3_target + "'   data-competency3_weight='" + data.competency3_weight + "'   data-competency3_staff='" + data.competency3_staff + "'   data-competency3_manager='" + data.competency3_manager + "'   data-competency_comment_staff='" + data.competency_comment_staff + "'   data-competency_comment_manager='" + data.competency_comment_manager + "'   data-behavioural1_field='" + data.behavioural1_field + "'   data-behavioural1_target='" + data.behavioural1_target + "'   data-behavioural1_weight='" + data.behavioural1_weight + "'   data-behavioural1_staff='" + data.behavioural1_staff + "'   data-behavioural1_manager='" + data.behavioural1_manager + "'   data-behavioural2_field='" + data.behavioural2_field + "'   data-behavioural2_target='" + data.behavioural2_target + "'   data-behavioural2_weight='" + data.behavioural2_weight + "'   data-behavioural2_staff='" + data.behavioural2_staff + "'   data-behavioural2_manager='" + data.behavioural2_manager + "'   data-behavioural_comment_staff='" + data.behavioural_comment_staff + "'   data-behavioural_comment_manager='" + data.behavioural_comment_manager + "'   data-development1_field='" + data.development1_field + "'   data-development1_target='" + data.development1_target + "'   data-development1_weight='" + data.development1_weight + "'   data-development1_staff='" + data.development1_staff + "'   data-development1_manager='" + data.development1_manager + "'   data-development2_field='" + data.development2_field + "'   data-development2_target='" + data.development2_target + "'   data-development2_weight='" + data.development2_weight + "'   data-development2_staff='" + data.development2_staff + "'   data-development2_manager='" + data.development2_manager + "'   data-development_comment_staff='" + data.development_comment_staff + "'   data-development_comment_manager='" + data.development_comment_manager + "'   data-final_comment_staff='" + data.final_comment_staff + "'   data-final_comment_manager='" + data.final_comment_manager + "'   data-promoted_to='" + data.promoted_to + "'   data-promotion_reasons='" + data.promotion_reasons + "'   data-hr_actioned='" + data.hr_actioned + "'   data-staff_actioned='" + data.staff_actioned + "'   data-manager_actioned='" + data.manager_actioned + "'   data-status='" + data.status + "'   data-completed='" + data.completed + "'   data-user_id='" + data.user_id + "'   data-manager_id='" + data.manager_id + "'   data-year='" + data.year + "'   data-hr_id='" + data.hr_id + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");

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
                                                    $('#kpi1_field_edit').val($(this).data('kpi1_field'));
                                                    $('#kpi1_target_edit').val($(this).data('kpi1_target'));
                                                    $('#kpi1_weight_edit').val($(this).data('kpi1_weight'));
                                                    $('#kpi1_staff_edit').val($(this).data('kpi1_staff'));
                                                    $('#kpi1_manager_edit').val($(this).data('kpi1_manager'));
                                                    $('#kpi2_field_edit').val($(this).data('kpi2_field'));
                                                    $('#kpi2_target_edit').val($(this).data('kpi2_target'));
                                                    $('#kpi2_weight_edit').val($(this).data('kpi2_weight'));
                                                    $('#kpi2_staff_edit').val($(this).data('kpi2_staff'));
                                                    $('#kpi2_manager_edit').val($(this).data('kpi2_manager'));
                                                    $('#kpi3_field_edit').val($(this).data('kpi3_field'));
                                                    $('#kpi3_target_edit').val($(this).data('kpi3_target'));
                                                    $('#kpi3_weight_edit').val($(this).data('kpi3_weight'));
                                                    $('#kpi3_staff_edit').val($(this).data('kpi3_staff'));
                                                    $('#kpi3_manager_edit').val($(this).data('kpi3_manager'));
                                                    $('#kpi4_field_edit').val($(this).data('kpi4_field'));
                                                    $('#kpi4_target_edit').val($(this).data('kpi4_target'));
                                                    $('#kpi4_weight_edit').val($(this).data('kpi4_weight'));
                                                    $('#kpi4_staff_edit').val($(this).data('kpi4_staff'));
                                                    $('#kpi4_manager_edit').val($(this).data('kpi4_manager'));
                                                    $('#kpi5_field_edit').val($(this).data('kpi5_field'));
                                                    $('#kpi5_target_edit').val($(this).data('kpi5_target'));
                                                    $('#kpi5_weight_edit').val($(this).data('kpi5_weight'));
                                                    $('#kpi5_staff_edit').val($(this).data('kpi5_staff'));
                                                    $('#kpi5_manager_edit').val($(this).data('kpi5_manager'));
                                                    $('#kpi6_field_edit').val($(this).data('kpi6_field'));
                                                    $('#kpi6_target_edit').val($(this).data('kpi6_target'));
                                                    $('#kpi6_weight_edit').val($(this).data('kpi6_weight'));
                                                    $('#kpi6_staff_edit').val($(this).data('kpi6_staff'));
                                                    $('#kpi6_manager_edit').val($(this).data('kpi6_manager'));
                                                    $('#kpi7_field_edit').val($(this).data('kpi7_field'));
                                                    $('#kpi7_target_edit').val($(this).data('kpi7_target'));
                                                    $('#kpi7_weight_edit').val($(this).data('kpi7_weight'));
                                                    $('#kpi7_staff_edit').val($(this).data('kpi7_staff'));
                                                    $('#kpi7_manager_edit').val($(this).data('kpi7_manager'));
                                                    $('#kpi8_field_edit').val($(this).data('kpi8_field'));
                                                    $('#kpi8_target_edit').val($(this).data('kpi8_target'));
                                                    $('#kpi8_weight_edit').val($(this).data('kpi8_weight'));
                                                    $('#kpi8_staff_edit').val($(this).data('kpi8_staff'));
                                                    $('#kpi8_manager_edit').val($(this).data('kpi8_manager'));
                                                    $('#kpi_comment_staff_edit').val($(this).data('kpi_comment_staff'));
                                                    $('#kpi_comment_manager_edit').val($(this).data('kpi_comment_manager'));
                                                    $('#competency1_field_edit').val($(this).data('competency1_field'));
                                                    $('#competency1_target_edit').val($(this).data('competency1_target'));
                                                    $('#competency1_weight_edit').val($(this).data('competency1_weight'));
                                                    $('#competency1_staff_edit').val($(this).data('competency1_staff'));
                                                    $('#competency1_manager_edit').val($(this).data('competency1_manager'));
                                                    $('#competency2_field_edit').val($(this).data('competency2_field'));
                                                    $('#competency2_target_edit').val($(this).data('competency2_target'));
                                                    $('#competency2_weight_edit').val($(this).data('competency2_weight'));
                                                    $('#competency2_staff_edit').val($(this).data('competency2_staff'));
                                                    $('#competency2_manager_edit').val($(this).data('competency2_manager'));
                                                    $('#competency3_field_edit').val($(this).data('competency3_field'));
                                                    $('#competency3_target_edit').val($(this).data('competency3_target'));
                                                    $('#competency3_weight_edit').val($(this).data('competency3_weight'));
                                                    $('#competency3_staff_edit').val($(this).data('competency3_staff'));
                                                    $('#competency3_manager_edit').val($(this).data('competency3_manager'));
                                                    $('#competency_comment_staff_edit').val($(this).data('competency_comment_staff'));
                                                    $('#competency_comment_manager_edit').val($(this).data('competency_comment_manager'));
                                                    $('#behavioural1_field_edit').val($(this).data('behavioural1_field'));
                                                    $('#behavioural1_target_edit').val($(this).data('behavioural1_target'));
                                                    $('#behavioural1_weight_edit').val($(this).data('behavioural1_weight'));
                                                    $('#behavioural1_staff_edit').val($(this).data('behavioural1_staff'));
                                                    $('#behavioural1_manager_edit').val($(this).data('behavioural1_manager'));
                                                    $('#behavioural2_field_edit').val($(this).data('behavioural2_field'));
                                                    $('#behavioural2_target_edit').val($(this).data('behavioural2_target'));
                                                    $('#behavioural2_weight_edit').val($(this).data('behavioural2_weight'));
                                                    $('#behavioural2_staff_edit').val($(this).data('behavioural2_staff'));
                                                    $('#behavioural2_manager_edit').val($(this).data('behavioural2_manager'));
                                                    $('#behavioural_comment_staff_edit').val($(this).data('behavioural_comment_staff'));
                                                    $('#behavioural_comment_manager_edit').val($(this).data('behavioural_comment_manager'));
                                                    $('#development1_field_edit').val($(this).data('development1_field'));
                                                    $('#development1_target_edit').val($(this).data('development1_target'));
                                                    $('#development1_weight_edit').val($(this).data('development1_weight'));
                                                    $('#development1_staff_edit').val($(this).data('development1_staff'));
                                                    $('#development1_manager_edit').val($(this).data('development1_manager'));
                                                    $('#development2_field_edit').val($(this).data('development2_field'));
                                                    $('#development2_target_edit').val($(this).data('development2_target'));
                                                    $('#development2_weight_edit').val($(this).data('development2_weight'));
                                                    $('#development2_staff_edit').val($(this).data('development2_staff'));
                                                    $('#development2_manager_edit').val($(this).data('development2_manager'));
                                                    $('#development_comment_staff_edit').val($(this).data('development_comment_staff'));
                                                    $('#development_comment_manager_edit').val($(this).data('development_comment_manager'));
                                                    $('#final_comment_staff_edit').val($(this).data('final_comment_staff'));
                                                    $('#final_comment_manager_edit').val($(this).data('final_comment_manager'));
                                                    $('#promoted_to_edit').val($(this).data('promoted_to'));
                                                    $('#promotion_reasons_edit').val($(this).data('promotion_reasons'));
                                                    $('#hr_actioned_edit').val($(this).data('hr_actioned'));
                                                    $('#staff_actioned_edit').val($(this).data('staff_actioned'));
                                                    $('#manager_actioned_edit').val($(this).data('manager_actioned'));
                                                    $('#status_edit').val($(this).data('status'));
                                                    $('#completed_edit').val($(this).data('completed'));
                                                    $('#user_id_edit').val($(this).data('user_id'));
                                                    $('#manager_id_edit').val($(this).data('manager_id'));
                                                    $('#hod_id_edit').val($(this).data('hod_id'));

                                                    $('#year_edit').val($(this).data('year'));
                                                    $('#hr_id_edit').val($(this).data('hr_id'));
                                                id = $('#id_edit').val();

        // $('#editModal').modal('show');
    });
    $('.modal-footer').on('click', '.edit', function () {
        $.ajax({
            type: 'PUT',
            url: 'appraisal/' + id,
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
                    $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'> <td>" + data.kpi1_field + "</td> <td>" + data.kpi1_target + "</td> <td>" + data.kpi1_weight + "</td> <td>" + data.kpi1_staff + "</td> <td>" + data.kpi1_manager + "</td> <td>" + data.kpi2_field + "</td> <td>" + data.kpi2_target + "</td> <td>" + data.kpi2_weight + "</td> <td>" + data.kpi2_staff + "</td> <td>" + data.kpi2_manager + "</td> <td>" + data.kpi3_field + "</td> <td>" + data.kpi3_target + "</td> <td>" + data.kpi3_weight + "</td> <td>" + data.kpi3_staff + "</td> <td>" + data.kpi3_manager + "</td> <td>" + data.kpi4_field + "</td> <td>" + data.kpi4_target + "</td> <td>" + data.kpi4_weight + "</td> <td>" + data.kpi4_staff + "</td> <td>" + data.kpi4_manager + "</td> <td>" + data.kpi5_field + "</td> <td>" + data.kpi5_target + "</td> <td>" + data.kpi5_weight + "</td> <td>" + data.kpi5_staff + "</td> <td>" + data.kpi5_manager + "</td> <td>" + data.kpi6_field + "</td> <td>" + data.kpi6_target + "</td> <td>" + data.kpi6_weight + "</td> <td>" + data.kpi6_staff + "</td> <td>" + data.kpi6_manager + "</td> <td>" + data.kpi7_field + "</td> <td>" + data.kpi7_target + "</td> <td>" + data.kpi7_weight + "</td> <td>" + data.kpi7_staff + "</td> <td>" + data.kpi7_manager + "</td> <td>" + data.kpi8_field + "</td> <td>" + data.kpi8_target + "</td> <td>" + data.kpi8_weight + "</td> <td>" + data.kpi8_staff + "</td> <td>" + data.kpi8_manager + "</td> <td>" + data.kpi_comment_staff + "</td> <td>" + data.kpi_comment_manager + "</td> <td>" + data.competency1_field + "</td> <td>" + data.competency1_target + "</td> <td>" + data.competency1_weight + "</td> <td>" + data.competency1_staff + "</td> <td>" + data.competency1_manager + "</td> <td>" + data.competency2_field + "</td> <td>" + data.competency2_target + "</td> <td>" + data.competency2_weight + "</td> <td>" + data.competency2_staff + "</td> <td>" + data.competency2_manager + "</td> <td>" + data.competency3_field + "</td> <td>" + data.competency3_target + "</td> <td>" + data.competency3_weight + "</td> <td>" + data.competency3_staff + "</td> <td>" + data.competency3_manager + "</td> <td>" + data.competency_comment_staff + "</td> <td>" + data.competency_comment_manager + "</td> <td>" + data.behavioural1_field + "</td> <td>" + data.behavioural1_target + "</td> <td>" + data.behavioural1_weight + "</td> <td>" + data.behavioural1_staff + "</td> <td>" + data.behavioural1_manager + "</td> <td>" + data.behavioural2_field + "</td> <td>" + data.behavioural2_target + "</td> <td>" + data.behavioural2_weight + "</td> <td>" + data.behavioural2_staff + "</td> <td>" + data.behavioural2_manager + "</td> <td>" + data.behavioural_comment_staff + "</td> <td>" + data.behavioural_comment_manager + "</td> <td>" + data.development1_field + "</td> <td>" + data.development1_target + "</td> <td>" + data.development1_weight + "</td> <td>" + data.development1_staff + "</td> <td>" + data.development1_manager + "</td> <td>" + data.development2_field + "</td> <td>" + data.development2_target + "</td> <td>" + data.development2_weight + "</td> <td>" + data.development2_staff + "</td> <td>" + data.development2_manager + "</td> <td>" + data.development_comment_staff + "</td> <td>" + data.development_comment_manager + "</td> <td>" + data.final_comment_staff + "</td> <td>" + data.final_comment_manager + "</td> <td>" + data.promoted_to + "</td> <td>" + data.promotion_reasons + "</td> <td>" + data.hr_actioned + "</td> <td>" + data.staff_actioned + "</td> <td>" + data.manager_actioned + "</td> <td>" + data.status + "</td> <td>" + data.completed + "</td> <td>" + data.user_id + "</td> <td>" + data.manager_id + "</td> <td>" + data.year + "</td> <td>" + data.hr_id + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-kpi1_field='" + data.kpi1_field + "'   data-kpi1_target='" + data.kpi1_target + "'   data-kpi1_weight='" + data.kpi1_weight + "'   data-kpi1_staff='" + data.kpi1_staff + "'   data-kpi1_manager='" + data.kpi1_manager + "'   data-kpi2_field='" + data.kpi2_field + "'   data-kpi2_target='" + data.kpi2_target + "'   data-kpi2_weight='" + data.kpi2_weight + "'   data-kpi2_staff='" + data.kpi2_staff + "'   data-kpi2_manager='" + data.kpi2_manager + "'   data-kpi3_field='" + data.kpi3_field + "'   data-kpi3_target='" + data.kpi3_target + "'   data-kpi3_weight='" + data.kpi3_weight + "'   data-kpi3_staff='" + data.kpi3_staff + "'   data-kpi3_manager='" + data.kpi3_manager + "'   data-kpi4_field='" + data.kpi4_field + "'   data-kpi4_target='" + data.kpi4_target + "'   data-kpi4_weight='" + data.kpi4_weight + "'   data-kpi4_staff='" + data.kpi4_staff + "'   data-kpi4_manager='" + data.kpi4_manager + "'   data-kpi5_field='" + data.kpi5_field + "'   data-kpi5_target='" + data.kpi5_target + "'   data-kpi5_weight='" + data.kpi5_weight + "'   data-kpi5_staff='" + data.kpi5_staff + "'   data-kpi5_manager='" + data.kpi5_manager + "'   data-kpi6_field='" + data.kpi6_field + "'   data-kpi6_target='" + data.kpi6_target + "'   data-kpi6_weight='" + data.kpi6_weight + "'   data-kpi6_staff='" + data.kpi6_staff + "'   data-kpi6_manager='" + data.kpi6_manager + "'   data-kpi7_field='" + data.kpi7_field + "'   data-kpi7_target='" + data.kpi7_target + "'   data-kpi7_weight='" + data.kpi7_weight + "'   data-kpi7_staff='" + data.kpi7_staff + "'   data-kpi7_manager='" + data.kpi7_manager + "'   data-kpi8_field='" + data.kpi8_field + "'   data-kpi8_target='" + data.kpi8_target + "'   data-kpi8_weight='" + data.kpi8_weight + "'   data-kpi8_staff='" + data.kpi8_staff + "'   data-kpi8_manager='" + data.kpi8_manager + "'   data-kpi_comment_staff='" + data.kpi_comment_staff + "'   data-kpi_comment_manager='" + data.kpi_comment_manager + "'   data-competency1_field='" + data.competency1_field + "'   data-competency1_target='" + data.competency1_target + "'   data-competency1_weight='" + data.competency1_weight + "'   data-competency1_staff='" + data.competency1_staff + "'   data-competency1_manager='" + data.competency1_manager + "'   data-competency2_field='" + data.competency2_field + "'   data-competency2_target='" + data.competency2_target + "'   data-competency2_weight='" + data.competency2_weight + "'   data-competency2_staff='" + data.competency2_staff + "'   data-competency2_manager='" + data.competency2_manager + "'   data-competency3_field='" + data.competency3_field + "'   data-competency3_target='" + data.competency3_target + "'   data-competency3_weight='" + data.competency3_weight + "'   data-competency3_staff='" + data.competency3_staff + "'   data-competency3_manager='" + data.competency3_manager + "'   data-competency_comment_staff='" + data.competency_comment_staff + "'   data-competency_comment_manager='" + data.competency_comment_manager + "'   data-behavioural1_field='" + data.behavioural1_field + "'   data-behavioural1_target='" + data.behavioural1_target + "'   data-behavioural1_weight='" + data.behavioural1_weight + "'   data-behavioural1_staff='" + data.behavioural1_staff + "'   data-behavioural1_manager='" + data.behavioural1_manager + "'   data-behavioural2_field='" + data.behavioural2_field + "'   data-behavioural2_target='" + data.behavioural2_target + "'   data-behavioural2_weight='" + data.behavioural2_weight + "'   data-behavioural2_staff='" + data.behavioural2_staff + "'   data-behavioural2_manager='" + data.behavioural2_manager + "'   data-behavioural_comment_staff='" + data.behavioural_comment_staff + "'   data-behavioural_comment_manager='" + data.behavioural_comment_manager + "'   data-development1_field='" + data.development1_field + "'   data-development1_target='" + data.development1_target + "'   data-development1_weight='" + data.development1_weight + "'   data-development1_staff='" + data.development1_staff + "'   data-development1_manager='" + data.development1_manager + "'   data-development2_field='" + data.development2_field + "'   data-development2_target='" + data.development2_target + "'   data-development2_weight='" + data.development2_weight + "'   data-development2_staff='" + data.development2_staff + "'   data-development2_manager='" + data.development2_manager + "'   data-development_comment_staff='" + data.development_comment_staff + "'   data-development_comment_manager='" + data.development_comment_manager + "'   data-final_comment_staff='" + data.final_comment_staff + "'   data-final_comment_manager='" + data.final_comment_manager + "'   data-promoted_to='" + data.promoted_to + "'   data-promotion_reasons='" + data.promotion_reasons + "'   data-hr_actioned='" + data.hr_actioned + "'   data-staff_actioned='" + data.staff_actioned + "'   data-manager_actioned='" + data.manager_actioned + "'   data-status='" + data.status + "'   data-completed='" + data.completed + "'   data-user_id='" + data.user_id + "'   data-manager_id='" + data.manager_id + "'   data-year='" + data.year + "'   data-hr_id='" + data.hr_id + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");


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
            url: 'appraisal/' + id,
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
                                        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/sweetalert/dist/sweetalert.css') }}">
                                        <!-- animation nifty modal window effects css -->
                                        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}">
                                        @endsection 

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
@include('includes.scripts_all')
