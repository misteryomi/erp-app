@extends('layouts.app')

@section('page_title') Spool Appraisal Records @endsection
        <!-- BEGIN CONTENT -->

@section('content')
<?php
    use App\User;
        ?>
@include('appraisal.menu')
<!-- BEGIN CONTENT -->
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
                <li> <a href="#">Appraisal </a> </li>
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
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi1_field">kpi1_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi1_field_add" name = "kpi1_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi1_target">kpi1_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi1_target_add" name = "kpi1_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi1_weight">kpi1_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi1_weight_add" name = "kpi1_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi1_staff">kpi1_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi1_staff_add" name = "kpi1_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi1_manager">kpi1_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi1_manager_add" name = "kpi1_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi2_field">kpi2_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi2_field_add" name = "kpi2_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi2_target">kpi2_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi2_target_add" name = "kpi2_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi2_weight">kpi2_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi2_weight_add" name = "kpi2_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi2_staff">kpi2_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi2_staff_add" name = "kpi2_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi2_manager">kpi2_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi2_manager_add" name = "kpi2_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi3_field">kpi3_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi3_field_add" name = "kpi3_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi3_target">kpi3_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi3_target_add" name = "kpi3_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi3_weight">kpi3_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi3_weight_add" name = "kpi3_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi3_staff">kpi3_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi3_staff_add" name = "kpi3_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi3_manager">kpi3_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi3_manager_add" name = "kpi3_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi4_field">kpi4_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi4_field_add" name = "kpi4_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi4_target">kpi4_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi4_target_add" name = "kpi4_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi4_weight">kpi4_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi4_weight_add" name = "kpi4_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi4_staff">kpi4_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi4_staff_add" name = "kpi4_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi4_manager">kpi4_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi4_manager_add" name = "kpi4_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi5_field">kpi5_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi5_field_add" name = "kpi5_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi5_target">kpi5_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi5_target_add" name = "kpi5_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi5_weight">kpi5_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi5_weight_add" name = "kpi5_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi5_staff">kpi5_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi5_staff_add" name = "kpi5_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi5_manager">kpi5_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi5_manager_add" name = "kpi5_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi6_field">kpi6_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi6_field_add" name = "kpi6_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi6_target">kpi6_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi6_target_add" name = "kpi6_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi6_weight">kpi6_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi6_weight_add" name = "kpi6_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi6_staff">kpi6_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi6_staff_add" name = "kpi6_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi6_manager">kpi6_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi6_manager_add" name = "kpi6_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi7_field">kpi7_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi7_field_add" name = "kpi7_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi7_target">kpi7_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi7_target_add" name = "kpi7_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi7_weight">kpi7_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi7_weight_add" name = "kpi7_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi7_staff">kpi7_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi7_staff_add" name = "kpi7_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi7_manager">kpi7_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi7_manager_add" name = "kpi7_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi8_field">kpi8_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi8_field_add" name = "kpi8_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi8_target">kpi8_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi8_target_add" name = "kpi8_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi8_weight">kpi8_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi8_weight_add" name = "kpi8_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi8_staff">kpi8_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi8_staff_add" name = "kpi8_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi8_manager">kpi8_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi8_manager_add" name = "kpi8_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi_comment_staff">kpi_comment_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi_comment_staff_add" name = "kpi_comment_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="kpi_comment_manager">kpi_comment_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="kpi_comment_manager_add" name = "kpi_comment_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency1_field">competency1_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency1_field_add" name = "competency1_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency1_target">competency1_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency1_target_add" name = "competency1_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency1_weight">competency1_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency1_weight_add" name = "competency1_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency1_staff">competency1_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency1_staff_add" name = "competency1_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency1_manager">competency1_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency1_manager_add" name = "competency1_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency2_field">competency2_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency2_field_add" name = "competency2_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency2_target">competency2_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency2_target_add" name = "competency2_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency2_weight">competency2_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency2_weight_add" name = "competency2_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency2_staff">competency2_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency2_staff_add" name = "competency2_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency2_manager">competency2_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency2_manager_add" name = "competency2_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency3_field">competency3_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency3_field_add" name = "competency3_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency3_target">competency3_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency3_target_add" name = "competency3_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency3_weight">competency3_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency3_weight_add" name = "competency3_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency3_staff">competency3_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency3_staff_add" name = "competency3_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency3_manager">competency3_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency3_manager_add" name = "competency3_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency_comment_staff">competency_comment_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency_comment_staff_add" name = "competency_comment_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="competency_comment_manager">competency_comment_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="competency_comment_manager_add" name = "competency_comment_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural1_field">behavioural1_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural1_field_add" name = "behavioural1_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural1_target">behavioural1_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural1_target_add" name = "behavioural1_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural1_weight">behavioural1_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural1_weight_add" name = "behavioural1_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural1_staff">behavioural1_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural1_staff_add" name = "behavioural1_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural1_manager">behavioural1_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural1_manager_add" name = "behavioural1_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural2_field">behavioural2_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural2_field_add" name = "behavioural2_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural2_target">behavioural2_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural2_target_add" name = "behavioural2_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural2_weight">behavioural2_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural2_weight_add" name = "behavioural2_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural2_staff">behavioural2_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural2_staff_add" name = "behavioural2_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural2_manager">behavioural2_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural2_manager_add" name = "behavioural2_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural_comment_staff">behavioural_comment_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural_comment_staff_add" name = "behavioural_comment_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="behavioural_comment_manager">behavioural_comment_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="behavioural_comment_manager_add" name = "behavioural_comment_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development1_field">development1_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development1_field_add" name = "development1_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development1_target">development1_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development1_target_add" name = "development1_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development1_weight">development1_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development1_weight_add" name = "development1_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development1_staff">development1_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development1_staff_add" name = "development1_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development1_manager">development1_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development1_manager_add" name = "development1_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development2_field">development2_field</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development2_field_add" name = "development2_field" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development2_target">development2_target</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development2_target_add" name = "development2_target" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development2_weight">development2_weight</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development2_weight_add" name = "development2_weight" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development2_staff">development2_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development2_staff_add" name = "development2_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development2_manager">development2_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development2_manager_add" name = "development2_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development_comment_staff">development_comment_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development_comment_staff_add" name = "development_comment_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="development_comment_manager">development_comment_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="development_comment_manager_add" name = "development_comment_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="final_comment_staff">final_comment_staff</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="final_comment_staff_add" name = "final_comment_staff" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="final_comment_manager">final_comment_manager</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="final_comment_manager_add" name = "final_comment_manager" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="promoted_to">promoted_to</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="promoted_to_add" name = "promoted_to" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="promotion_reasons">promotion_reasons</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="promotion_reasons_add" name = "promotion_reasons" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="hr_actioned">hr_actioned</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="hr_actioned_add" name = "hr_actioned" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="staff_actioned">staff_actioned</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="staff_actioned_add" name = "staff_actioned" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="manager_actioned">manager_actioned</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="manager_actioned_add" name = "manager_actioned" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="status">status</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="status_add" name = "status" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="completed">completed</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="completed_add" name = "completed" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="user_id">user_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="user_id_add" name = "user_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="manager_id">manager_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="manager_id_add" name = "manager_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="year">year</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="year_add" name = "year" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="hr_id">hr_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="hr_id_add" name = "hr_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
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
                                                Editing appraisal
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
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi1_field">kpi1_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi1_field_edit" name = "kpi1_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi1_target">kpi1_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi1_target_edit" name = "kpi1_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi1_weight">kpi1_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi1_weight_edit" name = "kpi1_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi1_staff">kpi1_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi1_staff_edit" name = "kpi1_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi1_manager">kpi1_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi1_manager_edit" name = "kpi1_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi2_field">kpi2_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi2_field_edit" name = "kpi2_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi2_target">kpi2_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi2_target_edit" name = "kpi2_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi2_weight">kpi2_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi2_weight_edit" name = "kpi2_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi2_staff">kpi2_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi2_staff_edit" name = "kpi2_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi2_manager">kpi2_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi2_manager_edit" name = "kpi2_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi3_field">kpi3_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi3_field_edit" name = "kpi3_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi3_target">kpi3_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi3_target_edit" name = "kpi3_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi3_weight">kpi3_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi3_weight_edit" name = "kpi3_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi3_staff">kpi3_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi3_staff_edit" name = "kpi3_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi3_manager">kpi3_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi3_manager_edit" name = "kpi3_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi4_field">kpi4_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi4_field_edit" name = "kpi4_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi4_target">kpi4_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi4_target_edit" name = "kpi4_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi4_weight">kpi4_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi4_weight_edit" name = "kpi4_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi4_staff">kpi4_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi4_staff_edit" name = "kpi4_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi4_manager">kpi4_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi4_manager_edit" name = "kpi4_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi5_field">kpi5_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi5_field_edit" name = "kpi5_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi5_target">kpi5_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi5_target_edit" name = "kpi5_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi5_weight">kpi5_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi5_weight_edit" name = "kpi5_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi5_staff">kpi5_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi5_staff_edit" name = "kpi5_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi5_manager">kpi5_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi5_manager_edit" name = "kpi5_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi6_field">kpi6_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi6_field_edit" name = "kpi6_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi6_target">kpi6_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi6_target_edit" name = "kpi6_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi6_weight">kpi6_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi6_weight_edit" name = "kpi6_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi6_staff">kpi6_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi6_staff_edit" name = "kpi6_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi6_manager">kpi6_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi6_manager_edit" name = "kpi6_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi7_field">kpi7_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi7_field_edit" name = "kpi7_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi7_target">kpi7_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi7_target_edit" name = "kpi7_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi7_weight">kpi7_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi7_weight_edit" name = "kpi7_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi7_staff">kpi7_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi7_staff_edit" name = "kpi7_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi7_manager">kpi7_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi7_manager_edit" name = "kpi7_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi8_field">kpi8_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi8_field_edit" name = "kpi8_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi8_target">kpi8_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi8_target_edit" name = "kpi8_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi8_weight">kpi8_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi8_weight_edit" name = "kpi8_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi8_staff">kpi8_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi8_staff_edit" name = "kpi8_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi8_manager">kpi8_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi8_manager_edit" name = "kpi8_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi_comment_staff">kpi_comment_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi_comment_staff_edit" name = "kpi_comment_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="kpi_comment_manager">kpi_comment_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="kpi_comment_manager_edit" name = "kpi_comment_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency1_field">competency1_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency1_field_edit" name = "competency1_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency1_target">competency1_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency1_target_edit" name = "competency1_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency1_weight">competency1_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency1_weight_edit" name = "competency1_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency1_staff">competency1_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency1_staff_edit" name = "competency1_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency1_manager">competency1_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency1_manager_edit" name = "competency1_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency2_field">competency2_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency2_field_edit" name = "competency2_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency2_target">competency2_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency2_target_edit" name = "competency2_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency2_weight">competency2_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency2_weight_edit" name = "competency2_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency2_staff">competency2_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency2_staff_edit" name = "competency2_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency2_manager">competency2_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency2_manager_edit" name = "competency2_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency3_field">competency3_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency3_field_edit" name = "competency3_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency3_target">competency3_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency3_target_edit" name = "competency3_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency3_weight">competency3_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency3_weight_edit" name = "competency3_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency3_staff">competency3_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency3_staff_edit" name = "competency3_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency3_manager">competency3_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency3_manager_edit" name = "competency3_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency_comment_staff">competency_comment_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency_comment_staff_edit" name = "competency_comment_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="competency_comment_manager">competency_comment_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="competency_comment_manager_edit" name = "competency_comment_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural1_field">behavioural1_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural1_field_edit" name = "behavioural1_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural1_target">behavioural1_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural1_target_edit" name = "behavioural1_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural1_weight">behavioural1_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural1_weight_edit" name = "behavioural1_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural1_staff">behavioural1_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural1_staff_edit" name = "behavioural1_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural1_manager">behavioural1_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural1_manager_edit" name = "behavioural1_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural2_field">behavioural2_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural2_field_edit" name = "behavioural2_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural2_target">behavioural2_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural2_target_edit" name = "behavioural2_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural2_weight">behavioural2_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural2_weight_edit" name = "behavioural2_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural2_staff">behavioural2_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural2_staff_edit" name = "behavioural2_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural2_manager">behavioural2_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural2_manager_edit" name = "behavioural2_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural_comment_staff">behavioural_comment_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural_comment_staff_edit" name = "behavioural_comment_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="behavioural_comment_manager">behavioural_comment_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="behavioural_comment_manager_edit" name = "behavioural_comment_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development1_field">development1_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development1_field_edit" name = "development1_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development1_target">development1_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development1_target_edit" name = "development1_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development1_weight">development1_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development1_weight_edit" name = "development1_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development1_staff">development1_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development1_staff_edit" name = "development1_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development1_manager">development1_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development1_manager_edit" name = "development1_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development2_field">development2_field</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development2_field_edit" name = "development2_field" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development2_target">development2_target</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development2_target_edit" name = "development2_target" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development2_weight">development2_weight</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development2_weight_edit" name = "development2_weight" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development2_staff">development2_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development2_staff_edit" name = "development2_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development2_manager">development2_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development2_manager_edit" name = "development2_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development_comment_staff">development_comment_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development_comment_staff_edit" name = "development_comment_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="development_comment_manager">development_comment_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="development_comment_manager_edit" name = "development_comment_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="final_comment_staff">final_comment_staff</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="final_comment_staff_edit" name = "final_comment_staff" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="final_comment_manager">final_comment_manager</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="final_comment_manager_edit" name = "final_comment_manager" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="promoted_to">promoted_to</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="promoted_to_edit" name = "promoted_to" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="promotion_reasons">promotion_reasons</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="promotion_reasons_edit" name = "promotion_reasons" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="hr_actioned">hr_actioned</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="hr_actioned_edit" name = "hr_actioned" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="staff_actioned">staff_actioned</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="staff_actioned_edit" name = "staff_actioned" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="manager_actioned">manager_actioned</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="manager_actioned_edit" name = "manager_actioned" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="status">status</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="status_edit" name = "status" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="completed">completed</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="completed_edit" name = "completed" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="user_id">user_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="user_id_edit" name = "user_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="manager_id">manager_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="manager_id_edit" name = "manager_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="year">year</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="year_edit" name = "year" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="hr_id">hr_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="hr_id_edit" name = "hr_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                       {{-- <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">users Select</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <select name = 'user_id' id="hr_id_edit" class = 'form-control'>
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
                                                                                <select name = 'appraisal_year_id' id="hr_id_edit" class = 'form-control'>
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
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Sub Unit</th>
<th>Manager</th>
<th>Staff Score</th>
<th>Total Score</th>

<th>Level</th>
<th>Designation</th>
<th>Sex</th>

<th>Final Comment Staff</th>
<th>Final Comment Manager</th>
<th>Promoted To</th>
<th>Promotion Reasons</th>
<th>Status</th>
<th>Completed</th>
<th>Year</th>


<th>KPI Field 1</th>
<th>KPI Target 1</th>
<th>KPI Weight 1</th>
<th>KPI Staff Score 1</th>
<th>KPI Manager Score 1</th>


<th>KPI Field 2</th>
<th>KPI Target 2</th>
<th>KPI Weight 2</th>
<th>KPI Staff Score 2</th>
<th>KPI Manager Score 2</th>

<th>KPI Field 3</th>
<th>KPI Target 3</th>
<th>KPI Weight 3</th>
<th>KPI Staff Score 3</th>
<th>KPI Manager Score 3</th>

<th>KPI Field 4</th>
<th>KPI Target 4</th>
<th>KPI Weight 4</th>
<th>KPI Staff Score 4</th>
<th>KPI Manager Score 4</th>


<th>KPI Field 5</th>
<th>KPI Target 5</th>
<th>KPI Weight 5</th>
<th>KPI Staff Score 5</th>
<th>KPI Manager Score 5</th>


<th>KPI Field 6</th>
<th>KPI Target 6</th>
<th>KPI Weight 6</th>
<th>KPI Staff Score 6</th>
<th>KPI Manager Score 6</th>


<th>KPI Field 7</th>
<th>KPI Target 7</th>
<th>KPI Weight 7</th>
<th>KPI Staff Score 7</th>
<th>KPI Manager Score 7</th>

                                                                                <th>KPI Field 8</th>
                                                                                <th>KPI Target 8</th>
                                                                                <th>KPI Weight 8</th>
                                                                                <th>KPI Staff Score 8</th>
                                                                                <th>KPI Manager Score 8</th>

                                                                                <th>KPI Staff Comment</th>
                                                                                <th>KPI Manager Comment</th>


<th>Competency Field 1 </th>
<th>Competency Target 1</th>
<th>Competency Weight 1</th>
<th>Competency Staff Score 1</th>
<th>Competency Manager Score 1</th>


<th>Competency Field 2 </th>
<th>Competency Target 2</th>
<th>Competency Weight 2</th>
<th>Competency Staff Score 2</th>
<th>Competency Manager Score 2</th>

                                                                                <th>Competency Field 3 </th>
                                                                                <th>Competency Target 3</th>
                                                                                <th>Competency Weight 3</th>
                                                                                <th>Competency Staff Score 3</th>
                                                                                <th>Competency Manager Score 3</th>

                                                                                <th>Competency Staff Comment</th>
                                                                                <th>Competency Manager Comment</th>
<th>Behavioural Field 1</th>
<th>Behavioural Target 1</th>
<th>Behavioural Weight 1</th>
<th>Behavioural Staff 1</th>
<th>Behavioural Manager 1</th>
                                                                                <th>Behavioural Field 2</th>
                                                                                <th>Behavioural Target 2</th>
                                                                                <th>Behavioural Weight 2</th>
                                                                                <th>Behavioural Staff 2</th>
                                                                                <th>Behavioural Manager 2</th>

                                                                                <th>Behavioural Comment Staff</th>
                                                                                <th>Behavioural Comment Manager</th>
<th>Development 1 Records</th>
<th>Development 1 Target</th>
<th>Development 1 Weight</th>
<th>Development 1 Staff</th>
<th>Development 1 Manager</th>
                                                                                <th>Development 2 Records</th>
                                                                                <th>Development 2 Target</th>
                                                                                <th>Development 2 Weight</th>
                                                                                <th>Development 2 Staff</th>
                                                                                <th>Development 2 Manager</th>
                                                                                <th>Development Comment Staff</th>
                                                                                <th>Development Comment Manager</th>





                                                                                <th>Last Update</th>
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="FAoKt9NQHDIAz0lpuHOdHu6IeWveBXg4ZTA5ppyd">
                                                                        </thead>
                                                                        <tbody id="PostContent">
                                                                            @foreach($appraisals as $appraisal)







@php



/* GETTING THE CALCULATION OF APPRAISAL*/

@$kpi_staff_total = ($appraisal->kpi1_weight* $appraisal->kpi1_staff/100)+
($appraisal->kpi2_weight* $appraisal->kpi2_staff/100)+($appraisal->kpi3_weight*
                                                                         $appraisal->kpi3_staff/100)+($appraisal->kpi4_weight*
                                                                                                               $appraisal->kpi4_staff/100)+($appraisal->kpi5_weight*
                                                                                                                                                     $appraisal->kpi5_staff/100)+($appraisal->kpi6_weight*
                                                                                                                                                                                           $appraisal->kpi6_staff/100)+($appraisal->kpi7_weight*
                                                                                                                                                                                                                                 $appraisal->kpi7_staff/100)+($appraisal->kpi8_weight*
                                                                                                                                                                                                                                                                       $appraisal->kpi8_staff/100);

@$kpi_manager_total =  ($appraisal->kpi1_weight* $appraisal->kpi1_manager/100)+
($appraisal->kpi2_weight* $appraisal->kpi2_manager/100)+($appraisal->kpi3_weight*
                                                                           $appraisal->kpi3_manager/100)+($appraisal->kpi4_weight*
                                                                                                                   $appraisal->kpi4_manager/100)+($appraisal->kpi5_weight*
                                                                                                                                                           $appraisal->kpi5_manager/100)+($appraisal->kpi6_weight*
                                                                                                                                                                                                   $appraisal->kpi6_manager/100)+($appraisal->kpi7_weight*
                                                                                                                                                                                                                                           $appraisal->kpi7_manager/100)+($appraisal->kpi8_weight*
                                                                                                                                                                                                                                                                                   $appraisal->kpi8_manager/100);

@$kpi_weight_total = $appraisal->kpi1_weight +
$appraisal->kpi2_weight+$appraisal->kpi3_weight+$appraisal->kpi4_weight
+$appraisal->kpi5_weight+$appraisal->kpi6_weight+$appraisal->kpi7_weight
+$appraisal->kpi8_weight;
///// competencies /////

@$competencies_staff_total = ($appraisal->competency1_weight*
                              $appraisal->competency1_staff/100)+($appraisal->competency2_weight*
                                                                           $appraisal->competency2_staff/100) +($appraisal->competency3_weight*
                                                                                                                         $appraisal->competency3_staff/100);

@$competencies_manager_total = ($appraisal->competency1_weight*
                                $appraisal->competency1_manager/100)+($appraisal->competency2_weight*
                                                                               $appraisal->competency2_manager/100) +($appraisal->competency3_weight*
                                                                                                                               $appraisal->competency3_manager/100);

@$competencies_weight_total = $appraisal->competency1_weight+$appraisal->competency2_weight
+$appraisal->competency3_weight;


/////// behaviour skills ////////
@$behavioural_staff_total =  ($appraisal->behavioural1_weight*
                              $appraisal->behavioural1_staff/4) + ($appraisal->behavioural2_weight*
                                                                            $appraisal->behavioural2_staff/4);

@$behavioural_manager_total =  ($appraisal->behavioural1_weight*
                                $appraisal->behavioural1_manager/4) + ($appraisal->behavioural2_weight*
                                                                                $appraisal->behavioural2_manager/4);

@$behavioural_weight_total = $appraisal->behavioural1_weight +$appraisal->behavioural2_weight;

////// developmental skills //////
@$developmental_staff_total = ( $appraisal->development1_weight*
                               $appraisal->development1_staff/100)+ ( $appraisal->development2_weight*
                                                                              $appraisal->development2_staff/100);

@$developmental_manager_total = ( $appraisal->development1_weight*
                                 $appraisal->development1_manager/100)+ ( $appraisal->development2_weight*
                                                                                  $appraisal->development2_manager/100);

@$developmental_weight_total =  $appraisal->development1_weight +
$appraisal->development2_weight;
/////// Grand total ///

@$grant_total_staff = $kpi_staff_total + $competencies_staff_total + $behavioural_staff_total +
$developmental_staff_total+20;

@$grant_total_manager = $kpi_manager_total + $competencies_manager_total + $behavioural_manager_total +
$developmental_manager_total+20;

@$grant_total_weight = $kpi_weight_total + $competencies_weight_total + $behavioural_weight_total +
$developmental_weight_total;

@$overall_grand_total = round( $grant_total_manager+20 );
if($overall_grand_total >= 60)
{
    $background_color = "green";
}else{
    $background_color = "red";
}


if($grant_total_staff == 20){
    $grant_total_staff = "-";
}

if($grant_total_manager == 20){
    $grant_total_manager = "-";
}


@endphp




                                                                            <tr class="item{!!$appraisal->
                                                                                id!!}" >


<td>{{$appraisal->user->name}}</td>
<td>{{$appraisal->user->email}}</td>
<td>{!!$appraisal->user->department!!}</td>
<td>{!!$appraisal->user->sub_unit!!}</td>
<td>{!! User::find($appraisal->manager_id)->name!!}</td>
<td> {!! $grant_total_staff !!}% </td>
<td> {!! $grant_total_manager !!}% </td>
<td>{!!$appraisal->user->level!!}</td>
<td>{!!$appraisal->user->designation!!}</td>
<td>{!!$appraisal->user->sex!!}</td>


<td>{!!$appraisal->final_comment_staff!!}</td>
<td>{!!$appraisal->final_comment_manager!!}</td>
<td>{!!$appraisal->promoted_to!!}</td>
<td>{!!$appraisal->promotion_reasons!!}</td>
<td>{!!$appraisal->status!!}</td>
<td>{!!$appraisal->completed!!}</td>
<td>{!!$appraisal->year!!}</td>



                                                                                <td>{!!$appraisal->kpi1_field!!}</td>
                                                                                <td>{!!$appraisal->kpi1_target!!}</td>
                                                                                <td>{!!$appraisal->kpi1_weight!!}</td>
                                                                                <td>{!!$appraisal->kpi1_staff!!}</td>
                                                                                <td>{!!$appraisal->kpi1_manager!!}</td>
                                                                                <td>{!!$appraisal->kpi2_field!!}</td>
                                                                                <td>{!!$appraisal->kpi2_target!!}</td>
                                                                                <td>{!!$appraisal->kpi2_weight!!}</td>
                                                                                <td>{!!$appraisal->kpi2_staff!!}</td>
                                                                                <td>{!!$appraisal->kpi2_manager!!}</td>
                                                                                <td>{!!$appraisal->kpi3_field!!}</td>
                                                                                <td>{!!$appraisal->kpi3_target!!}</td>
                                                                                <td>{!!$appraisal->kpi3_weight!!}</td>
                                                                                <td>{!!$appraisal->kpi3_staff!!}</td>
                                                                                <td>{!!$appraisal->kpi3_manager!!}</td>
                                                                                <td>{!!$appraisal->kpi4_field!!}</td>
                                                                                <td>{!!$appraisal->kpi4_target!!}</td>
                                                                                <td>{!!$appraisal->kpi4_weight!!}</td>
                                                                                <td>{!!$appraisal->kpi4_staff!!}</td>
                                                                                <td>{!!$appraisal->kpi4_manager!!}</td>
                                                                                <td>{!!$appraisal->kpi5_field!!}</td>
                                                                                <td>{!!$appraisal->kpi5_target!!}</td>
                                                                                <td>{!!$appraisal->kpi5_weight!!}</td>
                                                                                <td>{!!$appraisal->kpi5_staff!!}</td>
                                                                                <td>{!!$appraisal->kpi5_manager!!}</td>
                                                                                <td>{!!$appraisal->kpi6_field!!}</td>
                                                                                <td>{!!$appraisal->kpi6_target!!}</td>
                                                                                <td>{!!$appraisal->kpi6_weight!!}</td>
                                                                                <td>{!!$appraisal->kpi6_staff!!}</td>
                                                                                <td>{!!$appraisal->kpi6_manager!!}</td>
                                                                                <td>{!!$appraisal->kpi7_field!!}</td>
                                                                                <td>{!!$appraisal->kpi7_target!!}</td>
                                                                                <td>{!!$appraisal->kpi7_weight!!}</td>
                                                                                <td>{!!$appraisal->kpi7_staff!!}</td>
                                                                                <td>{!!$appraisal->kpi7_manager!!}</td>
                                                                                <td>{!!$appraisal->kpi8_field!!}</td>
                                                                                <td>{!!$appraisal->kpi8_target!!}</td>
                                                                                <td>{!!$appraisal->kpi8_weight!!}</td>
                                                                                <td>{!!$appraisal->kpi8_staff!!}</td>
                                                                                <td>{!!$appraisal->kpi8_manager!!}</td>
                                                                                <td>{!!$appraisal->kpi_comment_staff!!}</td>
                                                                                <td>{!!$appraisal->kpi_comment_manager!!}</td>
                                                                                <td>{!!$appraisal->competency1_field!!}</td>
                                                                                <td>{!!$appraisal->competency1_target!!}</td>
                                                                                <td>{!!$appraisal->competency1_weight!!}</td>
                                                                                <td>{!!$appraisal->competency1_staff!!}</td>
                                                                                <td>{!!$appraisal->competency1_manager!!}</td>
                                                                                <td>{!!$appraisal->competency2_field!!}</td>
                                                                                <td>{!!$appraisal->competency2_target!!}</td>
                                                                                <td>{!!$appraisal->competency2_weight!!}</td>
                                                                                <td>{!!$appraisal->competency2_staff!!}</td>
                                                                                <td>{!!$appraisal->competency2_manager!!}</td>
                                                                                <td>{!!$appraisal->competency3_field!!}</td>
                                                                                <td>{!!$appraisal->competency3_target!!}</td>
                                                                                <td>{!!$appraisal->competency3_weight!!}</td>
                                                                                <td>{!!$appraisal->competency3_staff!!}</td>
                                                                                <td>{!!$appraisal->competency3_manager!!}</td>
                                                                                <td>{!!$appraisal->competency_comment_staff!!}</td>
                                                                                <td>{!!$appraisal->competency_comment_manager!!}</td>
                                                                                <td>{!!$appraisal->behavioural1_field!!}</td>
                                                                                <td>{!!$appraisal->behavioural1_target!!}</td>
                                                                                <td>{!!$appraisal->behavioural1_weight!!}</td>
                                                                                <td>{!!$appraisal->behavioural1_staff!!}</td>
                                                                                <td>{!!$appraisal->behavioural1_manager!!}</td>
                                                                                <td>{!!$appraisal->behavioural2_field!!}</td>
                                                                                <td>{!!$appraisal->behavioural2_target!!}</td>
                                                                                <td>{!!$appraisal->behavioural2_weight!!}</td>
                                                                                <td>{!!$appraisal->behavioural2_staff!!}</td>
                                                                                <td>{!!$appraisal->behavioural2_manager!!}</td>
                                                                                <td>{!!$appraisal->behavioural_comment_staff!!}</td>
                                                                                <td>{!!$appraisal->behavioural_comment_manager!!}</td>
                                                                                <td>{!!$appraisal->development1_field!!}</td>
                                                                                <td>{!!$appraisal->development1_target!!}</td>
                                                                                <td>{!!$appraisal->development1_weight!!}</td>
                                                                                <td>{!!$appraisal->development1_staff!!}</td>
                                                                                <td>{!!$appraisal->development1_manager!!}</td>
                                                                                <td>{!!$appraisal->development2_field!!}</td>
                                                                                <td>{!!$appraisal->development2_target!!}</td>
                                                                                <td>{!!$appraisal->development2_weight!!}</td>
                                                                                <td>{!!$appraisal->development2_staff!!}</td>
                                                                                <td>{!!$appraisal->development2_manager!!}</td>
                                                                                <td>{!!$appraisal->development_comment_staff!!}</td>
                                                                                <td>{!!$appraisal->development_comment_manager!!}</td>





                                                                                <td>{!!$appraisal->updated_at->diffForHumans()!!} </td>

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
                                                    $('#year_edit').val($(this).data('year'));
                                                    $('#hr_id_edit').val($(this).data('hr_id'));
                                                id = $('#id_edit').val();

        // $('#editModal').modal('show');
    });
    $('.modal-footer').on('click', '.edit', function () {
        $.ajax({
            type: 'PUT',
            url: '' + id,
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
                                        <link rel="stylesheet" type="text/css" href="http://irs.primera/bower_components/sweetalert/dist/sweetalert.css">
                                        <!-- animation nifty modal window effects css -->
                                        <link rel="stylesheet" type="text/css" href="http://irs.primera/assets/css/component.css">
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
@include('includes.scripts_just_datatable')
