@extends('layouts.frontend')
@section('content')
@section('page_title') Annual Appraisal Report @endsection
<?php
    use App\User;
    
    Auth()->user()->unreadNotifications->markAsRead();
    ?>
@include('appraisal.menu')

<!-- static -->


    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->


            <!-- END PAGE HEADER-->
            <!-- END PAGE HEADER-->
            <div class="row">
             {{--   <div class="col-md-12">
                    <div class="m-heading-1 border-green m-bordered">
                        <h3>Annual Appraisal and 2018 KEY PERFORMANCE INDICATORS
                            (KPI'S)</h3>
                        --}}{{-- <p> This twitter bootstrap plugin builds a wizard out of a formatter tabbable structure. It allows to build a wizard functionality using buttons to go through the different wizard steps and using events allows to hook into
                        each step individually. </p>
                        <p> For more info please check out
                            <a class="btn red btn-outline" href="http://vadimg.com/twitter-bootstrap-wizard-example" target="_blank">the official documentation</a>--}}{{--
                        </p>
                    </div>--}}


<div class=""  id="edit-form" style="background-color: #fff;">
    <div class="card">
        <div class="card-header">


        </div>
                             
                        @php     /* GETTING THE CALCULATION OF APPRAISAL
                             
                             @$kpi_staff_total = ($appraisal_contents->kpi1_weight* $appraisal_contents->kpi1_staff/kpi1_target)+
                             ($appraisal_contents->kpi2_weight* $appraisal_contents->kpi2_staff/$appraisal_contents->kpi2_target)+($appraisal_contents->kpi3_weight*
                                                                                                      $appraisal_contents->kpi3_staff/$appraisal_contents->kpi3_target)+($appraisal_contents->kpi4_weight*
                                                                                                                                            $appraisal_contents->kpi4_staff/$appraisal_contents->kpi4_target)+($appraisal_contents->kpi5_weight*
                                                                                                                                                                                  $appraisal_contents->kpi5_staff/$appraisal_contents->kpi5_target)+($appraisal_contents->kpi6_weight*
                                                                                                                                                                                                                        $appraisal_contents->kpi6_staff/$appraisal_contents->kpi6_target)+($appraisal_contents->kpi7_weight*
                                                                                                                                                                                                                                                              $appraisal_contents->kpi7_staff/$appraisal_contents->kpi7_target)+($appraisal_contents->kpi8_weight*
                                                                                                                                                                                                                                                                                                    $appraisal_contents->kpi8_staff/$appraisal_contents->kpi8_target);
                             
                             @$kpi_manager_total =  ($appraisal_contents->kpi1_weight* $appraisal_contents->kpi1_manager/$appraisal_contents->kpi1_target)+
                             ($appraisal_contents->kpi2_weight* $appraisal_contents->kpi2_manager/$appraisal_contents->kpi2_target)+($appraisal_contents->kpi3_weight*
                                                                                                        $appraisal_contents->kpi3_manager/$appraisal_contents->kpi3_target)+($appraisal_contents->kpi4_weight*
                                                                                                                                                $appraisal_contents->kpi4_manager/$appraisal_contents->kpi4_target)+($appraisal_contents->kpi5_weight*
                                                                                                                                                                                        $appraisal_contents->kpi5_manager/$appraisal_contents->kpi5_target)+($appraisal_contents->kpi6_weight*
                                                                                                                                                                                                                                $appraisal_contents->kpi6_manager/$appraisal_contents->kpi6_target)+($appraisal_contents->kpi7_weight*
                                                                                                                                                                                                                                                                        $appraisal_contents->kpi7_manager/$appraisal_contents->kpi7_target)+($appraisal_contents->kpi8_weight*
                                                                                                                                                                                                                                                                                                                $appraisal_contents->kpi8_manager/$appraisal_contents->kpi8_target);
                             
                             @$kpi_weight_total = $appraisal_contents->kpi1_weight +
                             $appraisal_contents->kpi2_weight+$appraisal_contents->kpi3_weight+$appraisal_contents->kpi4_weight
                             +$appraisal_contents->kpi5_weight+$appraisal_contents->kpi6_weight+$appraisal_contents->kpi7_weight
                             +$appraisal_contents->kpi8_weight;
                             ///// competencies /////
                             
                             @$competencies_staff_total = ($appraisal_contents->competency1_weight*
                                                           $appraisal_contents->competency1_staff/$appraisal_contents->competency1_target)+($appraisal_contents->competency2_weight*
                                                                                                        $appraisal_contents->competency2_staff/$appraisal_contents->competency2_target) +($appraisal_contents->competency3_weight*
                                                                                                                                                      $appraisal_contents->competency3_staff/competency3_target);
                             
                             @$competencies_manager_total = ($appraisal_contents->competency1_weight*
                                                             $appraisal_contents->competency1_manager/$appraisal_contents->competency1_target)+($appraisal_contents->competency2_weight*
                                                                                                            $appraisal_contents->competency2_manager/$appraisal_contents->competency2_target) +($appraisal_contents->competency3_weight*
                                                                                                                                                            $appraisal_contents->competency3_manager/$appraisal_contents->competency3_target);
                             
                             @$competencies_weight_total = $appraisal_contents->competency1_weight+$appraisal_contents->competency2_weight
                             +$appraisal_contents->competency3_weight;
                             
                             
                             /////// behaviour skills ////////
                             @$behavioural_staff_total =  ($appraisal_contents->behavioural1_weight*
                                                           $appraisal_contents->behavioural1_staff/$appraisal_contents->behavioural1_target) + ($appraisal_contents->behavioural2_weight*
                                                                                                           $appraisal_contents->behavioural2_staff/$appraisal_contents->behavioural2_target);
                             
                             @$behavioural_manager_total =  ($appraisal_contents->behavioural1_weight*
                                                             $appraisal_contents->behavioural1_manager/$appraisal_contents->behavioural1_target) + ($appraisal_contents->behavioural2_weight*
                                                                                                               $appraisal_contents->behavioural2_manager/$appraisal_contents->behavioural2_target);
                             
                             @$behavioural_weight_total = $appraisal_contents->behavioural1_weight +$appraisal_contents->behavioural2_weight;
                             
                             ////// developmental skills //////
                             @$developmental_staff_total = ( $appraisal_contents->development1_weight*
                                                            $appraisal_contents->development1_staff/$appraisal_contents->development1_target)+ ( $appraisal_contents->development2_weight*
                                                                                                           $appraisal_contents->development2_staff/$appraisal_contents->development2_target);
                             
                             @$developmental_manager_total = ( $appraisal_contents->development1_weight*
                                                              $appraisal_contents->development1_manager/$appraisal_contents->development1_target)+ ( $appraisal_contents->development2_weight*
                                                                                                               $appraisal_contents->development2_manager/$appraisal_contents->development2_target);
                             
                             @$developmental_weight_total =  $appraisal_contents->development1_weight +
                             $appraisal_contents->development2_weight;
                             /////// Grand total ///
                             
                             @$grant_total_staff = $kpi_staff_total + $competencies_staff_total + $behavioural_staff_total +
                             $developmental_staff_total;
                             
                             @$grant_total_manager = $kpi_manager_total + $competencies_manager_total + $behavioural_manager_total +
                             $developmental_manager_total;
                             
                             @$grant_total_weight = $kpi_weight_total + $competencies_weight_total + $behavioural_weight_total +
                             $developmental_weight_total;
                             
                             @$overall_grand_total = round(($grant_total_manager));
                             if($overall_grand_total >= 60)
                             {
                             $background_color = "green";
                             }else{
                             $background_color = "red";
                             }
                             
                             */
                             
                             
                             
                             /* GETTING THE CALCULATION OF APPRAISAL*/
                             
                             @$kpi_staff_total = ($appraisal_contents->kpi1_weight* $appraisal_contents->kpi1_staff/100)+
                             ($appraisal_contents->kpi2_weight* $appraisal_contents->kpi2_staff/100)+($appraisal_contents->kpi3_weight*
                                                                                                      $appraisal_contents->kpi3_staff/100)+($appraisal_contents->kpi4_weight*
                                                                                                                                            $appraisal_contents->kpi4_staff/100)+($appraisal_contents->kpi5_weight*
                                                                                                                                                                                  $appraisal_contents->kpi5_staff/100)+($appraisal_contents->kpi6_weight*
                                                                                                                                                                                                                        $appraisal_contents->kpi6_staff/100)+($appraisal_contents->kpi7_weight*
                                                                                                                                                                                                                                                              $appraisal_contents->kpi7_staff/100)+($appraisal_contents->kpi8_weight*
                                                                                                                                                                                                                                                                                                    $appraisal_contents->kpi8_staff/100);
                             
                             @$kpi_manager_total =  ($appraisal_contents->kpi1_weight* $appraisal_contents->kpi1_manager/100)+
                             ($appraisal_contents->kpi2_weight* $appraisal_contents->kpi2_manager/100)+($appraisal_contents->kpi3_weight*
                                                                                                        $appraisal_contents->kpi3_manager/100)+($appraisal_contents->kpi4_weight*
                                                                                                                                                $appraisal_contents->kpi4_manager/100)+($appraisal_contents->kpi5_weight*
                                                                                                                                                                                        $appraisal_contents->kpi5_manager/100)+($appraisal_contents->kpi6_weight*
                                                                                                                                                                                                                                $appraisal_contents->kpi6_manager/100)+($appraisal_contents->kpi7_weight*
                                                                                                                                                                                                                                                                        $appraisal_contents->kpi7_manager/100)+($appraisal_contents->kpi8_weight*
                                                                                                                                                                                                                                                                                                                $appraisal_contents->kpi8_manager/100);
                             
                             @$kpi_weight_total = $appraisal_contents->kpi1_weight +
                             $appraisal_contents->kpi2_weight+$appraisal_contents->kpi3_weight+$appraisal_contents->kpi4_weight
                             +$appraisal_contents->kpi5_weight+$appraisal_contents->kpi6_weight+$appraisal_contents->kpi7_weight
                             +$appraisal_contents->kpi8_weight;
                             ///// competencies /////
                             
                             @$competencies_staff_total = ($appraisal_contents->competency1_weight*
                                                           $appraisal_contents->competency1_staff/100)+($appraisal_contents->competency2_weight*
                                                                                                        $appraisal_contents->competency2_staff/100) +($appraisal_contents->competency3_weight*
                                                                                                                                                      $appraisal_contents->competency3_staff/100);
                             
                             @$competencies_manager_total = ($appraisal_contents->competency1_weight*
                                                             $appraisal_contents->competency1_manager/100)+($appraisal_contents->competency2_weight*
                                                                                                            $appraisal_contents->competency2_manager/100) +($appraisal_contents->competency3_weight*
                                                                                                                                                            $appraisal_contents->competency3_manager/100);
                             
                             @$competencies_weight_total = $appraisal_contents->competency1_weight+$appraisal_contents->competency2_weight
                             +$appraisal_contents->competency3_weight;
                             
                             
                             /////// behaviour skills ////////
                             @$behavioural_staff_total =  ($appraisal_contents->behavioural1_weight*
                                                           $appraisal_contents->behavioural1_staff/4) + ($appraisal_contents->behavioural2_weight*
                                                                                                         $appraisal_contents->behavioural2_staff/4);
                             
                             @$behavioural_manager_total =  ($appraisal_contents->behavioural1_weight*
                                                             $appraisal_contents->behavioural1_manager/4) + ($appraisal_contents->behavioural2_weight*
                                                                                                             $appraisal_contents->behavioural2_manager/4);
                             
                             @$behavioural_weight_total = $appraisal_contents->behavioural1_weight +$appraisal_contents->behavioural2_weight;
                             
                             ////// developmental skills //////
                             @$developmental_staff_total = ( $appraisal_contents->development1_weight*
                                                            $appraisal_contents->development1_staff/100)+ ( $appraisal_contents->development2_weight*
                                                                                                           $appraisal_contents->development2_staff/100);
                             
                             @$developmental_manager_total = ( $appraisal_contents->development1_weight*
                                                              $appraisal_contents->development1_manager/100)+ ( $appraisal_contents->development2_weight*
                                                                                                               $appraisal_contents->development2_manager/100);
                             
                             @$developmental_weight_total =  $appraisal_contents->development1_weight +
                             $appraisal_contents->development2_weight;
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
                             
                             
                         
                             
                             
                             
                             @endphp
                             
        <div class="portlet-body">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <!-- Date card start -->
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="portlet-body" style="">
                             
                                <input type="hidden" class="form-control" id="id_edit" disabled>


<div class="row" style="padding:20px" >
                                <h3 class="form-section">Staff Details</h3>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Staff Name:
                             
                                    </label>
                                    <div class="col-md-4">
                                        {{ User::find($appraisal_contents->user_id)->name   }}
                                    </div>
                                </div>
    </div>
    <div class="row" style="padding:20px" >
                                <div class="form-group">
                                    <label class="control-label col-md-2">Manager Name:
                             
                                    </label>
                                    <div class="col-md-4">
                                        {{ User::find($appraisal_contents->manager_id)->name   }}
                                    </div>
                                </div>
</div>

                                <div class="row" style="padding:20px" >
                                    <div class="form-group">
                                    <label class="control-label col-md-2">Appraisal Year:
                             
                                    </label>
                                    <div class="col-md-4">
                                        {{ $appraisal_contents->year }}
                                    </div>
                                </div>
                             
                             



                                </div>
                             
                             
                             
                             <div class="row" style="padding:20px" >
                             <div class="form-group">
                             <label class="control-label col-md-2">Staff/Self Score:
                             
                             </label>
                             <div class="col-md-4">
                            <strong>  {{ $grant_total_staff }}% </strong>
                             </div>
                             </div>
                             
                             
                             
                             </div>
                             
                             
                             <div class="row" style="padding:20px" >
                             <div class="form-group">
                             <label class="control-label col-md-2">Manager Score:
                             
                             </label>
                             <div class="col-md-4">
                            <strong> {{ $grant_total_manager }}% </strong>
                             </div>
                             </div>
                             
                             
                             
                             </div>
                             
                             
                             <div class="row" style="padding:20px" >
                             <div class="form-group">
                             <label class="control-label col-md-2">Status:
                             
                             </label>
                             <div class="col-md-4">
                             <strong> @if ($appraisal_contents->status == 1)
                             <span style='color:green'> Accepted </span>
                             @elseif ($appraisal_contents->status == 2 )
                             <span style='color:red'> Rejected</span>
                             @else
                             <span style='color:red'> Please accept or decline Manager's assesment </span>
                             @endif
                             
                             
                             
                            </strong>
                             </div>
                             </div>
                             
                             
                             
                             </div>


                            {{--    @include('appraisal.start_sidebar')--}}
<br /><br />

                             
                    
                             
                             
                             <style>
                             .btn-group-lg>.btn, .btn-lg
                             {
                             padding: 12px 38px;
                             font-size: 18px;
                             
                             }
                             .btn.btn-outline.green {
                             border-color: #118c0b;
                             color: #2b820f;
                             background: 0 0;
                             }
                             .btn.btn-outline.green.active, .btn.btn-outline.green:active, .btn.btn-outline
                             .green:active:focus, .btn.btn-outline.green:active:hover, .btn.btn-outline.green:focus, .btn.btn-outline.green:hover{
                             border-color: #118c0b;
                             color: #FFF;
                             background-color: #118c0b;
                             }
                             </style>
                             
                             
                             
                             
                             
                             <style>
                             .btn-group-lg>.btn, .btn-lg
                             {
                             padding: 12px 38px;
                             font-size: 18px;
                             
                             }
                             .btn.btn-outline.green {
                             border-color: #118c0b;
                             color: #2b820f;
                             background: 0 0;
                             }
                             .btn.btn-outline.green.active, .btn.btn-outline.green:active, .btn.btn-outline
                             .green:active:focus, .btn.btn-outline.green:active:hover, .btn.btn-outline.green:focus, .btn.btn-outline.green:hover{
                             border-color: #118c0b;
                             color: #FFF;
                             background-color: #118c0b;
                             }
                             </style>
                             
                             <div class="text-centered" style="float:right;">
                             
                             @if(($appraisal_contents->user_id == "".Auth::user()->ID."") && ($appraisal_contents->manager_actioned == 1) && ($appraisal_contents->status == 0) )
                             
                             
                             <form id="do_approve" action="{{ route('appraisal.do_approve', ['id' => $appraisal_contents->id])}}" method="POST"
                             style="display:initial !important; float:right;">
                             @csrf
                             
                             
                             <div class="actions">
                             <div class="mt-action-buttons ">
                             <div class="btn-group btn-group-circle">
                             
                             <button type="submit"   class="btn btn-outline green btn-lg">Accept Manager's Assessment</button>
                             <button type="button" class="btn btn-outline red btn-lg" data-toggle="modal" id="myBtn">Reject</button>
                             </div>
                             
                             </div>
                             </div>
                             </form>
                             
                             @endif

                             </div>
                             
                             
                             
                             @if(("".Auth::user()->ID."" == $appraisal_contents->hod_id) && ($appraisal_contents->hod_actioned == 0) )
                             <div style="width:100%">
                             <form id="hod_comment" action="{{ route('appraisal.hod_comment', ['id' => $appraisal_contents->id])}}" method="POST">
                             
                             @csrf
                             <p>Please Enter Comment: </p>
                             <textarea name="comment" style="margin: 0px; width: 100%; height: 246px;" ></textarea>
                             </div>
                             <div class="modal-footer">
                             <button type="submit" class="btn btn-success" >Save Comment</button>
                             
                             
                             </form>
                             
                             </div>
                             @endif
                             
                             
                             
                          <br /><br />
                             
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
                                        <th> Self  (Actual)</th>
                                        <th> Self Assessment (%) of Achievement )</th>
                                        <th> Managers Assesment (Actual)</th>
                                        <th> Managers Assessment (% of Achievement )</th>
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
                                        <td style="width:50%;">
                                            {{ $appraisal_contents->kpi1_field }}

                                        </td>
                                        <td>
                                            {{ $appraisal_contents->kpi1_target }}%

                                        </td>
                                        <td>
                                            {{ $appraisal_contents->kpi1_weight }}%

                                        </td>
                                        <td>
                                            {{ $appraisal_contents->kpi1_staff }}

                                        </td>
                                        <td>
                                            {{ $appraisal_contents->kpi1_weight* $appraisal_contents->kpi1_staff/$appraisal_contents->kpi1_target}}%

                                        </td>
                                        <td>
                                            {{ $appraisal_contents->kpi1_manager }}

                                        </td>
                                        <td>
                                            {{ $appraisal_contents->kpi1_weight*
                                            $appraisal_contents->kpi1_manager/$appraisal_contents->kpi1_target}}%

                                        </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->kpi2_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi2_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi2_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi2_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi2_weight* $appraisal_contents->kpi2_staff/$appraisal_contents->kpi2_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi2_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi2_weight*
                                                $appraisal_contents->kpi2_manager/$appraisal_contents->kpi2_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->kpi3_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi3_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi3_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi3_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi3_weight* $appraisal_contents->kpi3_staff/$appraisal_contents->kpi3_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi3_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi3_weight*
                                                $appraisal_contents->kpi3_manager/$appraisal_contents->kpi3_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->kpi4_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi4_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi4_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi4_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi4_weight* $appraisal_contents->kpi4_staff/$appraisal_contents->kpi4_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi4_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi4_weight*
                                                $appraisal_contents->kpi4_manager/$appraisal_contents->kpi4_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->kpi5_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi5_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi5_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi5_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi5_weight* $appraisal_contents->kpi5_staff/$appraisal_contents->kpi5_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi5_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi5_weight*
                                                $appraisal_contents->kpi5_manager/$appraisal_contents->kpi5_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->kpi6_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi6_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi6_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi6_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi6_weight* $appraisal_contents->kpi6_staff/$appraisal_contents->kpi6_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi6_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi6_weight*
                                                $appraisal_contents->kpi6_manager/$appraisal_contents->kpi6_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->kpi7_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi7_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi7_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi7_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi7_weight* $appraisal_contents->kpi7_staff/$appraisal_contents->kpi7_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi7_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi7_weight*
                                                $appraisal_contents->kpi7_manager/$appraisal_contents->kpi7_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->kpi8_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi8_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi8_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi8_staff }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi8_weight* $appraisal_contents->kpi8_staff/$appraisal_contents->kpi8_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi8_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->kpi8_weight*
                                                $appraisal_contents->kpi8_manager/$appraisal_contents->kpi8_target}}%

                                            </td>

                                        </tr>
                                    @endif


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

                                        <td colspan="6"><textarea disabled name = "kpi_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
                                                                  aria-invalid="false" required>{{$appraisal_contents->kpi_comment_manager}}</textarea>
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
                                        <th> Competencies </th>
                                        <th>TARGET (%)</th>
                                        <th> WEIGHT (%)</th>
                                        <th> Self  (Actual)</th>
                                        <th> Self Assessment (%) of Achievement )</th>
                                        <th> Managers Assesment (Actual)</th>
                                        <th> Managers Assessment (% of Achievement )</th>
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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->competency1_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency1_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency1_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency1_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency1_weight* $appraisal_contents->competency1_staff/$appraisal_contents->competency1_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency1_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency1_weight*
                                                $appraisal_contents->competency1_manager/$appraisal_contents->competency1_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->competency2_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency2_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency2_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency2_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency2_weight* $appraisal_contents->competency2_staff/$appraisal_contents->competency2_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency2_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency2_weight*
                                                $appraisal_contents->competency2_manager/$appraisal_contents->competency2_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->competency3_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency3_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency3_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency3_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency3_weight* $appraisal_contents->competency3_staff/$appraisal_contents->competency3_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency3_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->competency3_weight*
                                                $appraisal_contents->competency3_manager/$appraisal_contents->competency3_target}}%

                                            </td>

                                        </tr>
                                    @endif


                                    <tr class="odd gradeX">
                                        <td> </td>
                                        <td >
                                            Appraisee Feedback &  Comments
                                        </td>

                                        <td colspan="6"><textarea disabled name = "kpi_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
                                                                  aria-invalid="false" required>{{$appraisal_contents->competency_comment_staff}}</textarea>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td> </td>
                                        <td >
                                            Manager's Feedback &  Comments
                                        </td>

                                        <td colspan="6"><textarea disabled name = "kpi_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
                                                                  aria-invalid="false" required>{{$appraisal_contents->competency_comment_manager}}</textarea>
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
                                        <th> Behavioural Skills </th>
                                        <th>TARGET (%)</th>
                                        <th> WEIGHT (%)</th>
                                        <th> Self  (Actual)</th>
                                        <th> Self Assessment (%) of Achievement )</th>
                                        <th> Managers Assesment (Actual)</th>
                                        <th> Managers Assessment (% of Achievement )</th>
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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->behavioural1_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural1_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural1_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural1_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural1_weight* $appraisal_contents->behavioural1_staff/$appraisal_contents->behavioural1_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural1_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural1_weight*
                                                $appraisal_contents->behavioural1_manager/$appraisal_contents->behavioural1_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->behavioural2_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural2_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural2_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural2_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural2_weight* $appraisal_contents->behavioural2_staff/$appraisal_contents->behavioural2_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural2_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->behavioural2_weight*
                                                $appraisal_contents->behavioural2_manager/$appraisal_contents->behavioural2_target}}%

                                            </td>

                                        </tr>
                                    @endif


                                    <tr class="odd gradeX">
                                        <td> </td>
                                        <td >
                                            Appraisee Feedback &  Comments
                                        </td>

                                        <td colspan="6"><textarea disabled name = "kpi_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
                                                                  aria-invalid="false" required>{{$appraisal_contents->behavioural_comment_staff}}</textarea>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td> </td>
                                        <td >
                                            Manager's Feedback &  Comments
                                        </td>

                                        <td colspan="6"><textarea disabled name = "kpi_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
                                                                  aria-invalid="false" required>{{$appraisal_contents->behavioural_comment_manager}}</textarea>
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
                                        <th> Developmental Goals</th>
                                        <th>TARGET (%)</th>
                                        <th> WEIGHT (%)</th>
                                        <th> Self  (Actual)</th>
                                        <th> Self Assessment (%) of Achievement )</th>
                                        <th> Managers Assesment (Actual)</th>
                                        <th> Managers Assessment (% of Achievement )</th>
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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->development1_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development1_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development1_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development1_staff }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development1_weight* $appraisal_contents->development1_staff/$appraisal_contents->development1_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development1_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development1_weight*
                                                $appraisal_contents->development1_manager/$appraisal_contents->development1_target}}%

                                            </td>

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
                                            <td style="width:50%;">
                                                {{ $appraisal_contents->development2_field }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development2_target }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development2_weight }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development2_staff }}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development2_weight* $appraisal_contents->development2_staff/$appraisal_contents->development2_target}}%

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development2_manager }}

                                            </td>
                                            <td>
                                                {{ $appraisal_contents->development2_weight*
                                                $appraisal_contents->development2_manager/$appraisal_contents->development2_target}}%

                                            </td>

                                        </tr>
                                    @endif


                                    <tr class="odd gradeX">
                                        <td> </td>
                                        <td >
                                            Appraisee Feedback &  Comments
                                        </td>

                                        <td colspan="6"><textarea disabled name = "kpi_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
                                                                  aria-invalid="false" required>{{$appraisal_contents->development_comment_staff}}</textarea>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td> </td>
                                        <td >
                                            Manager's Feedback &  Comments
                                        </td>

                                        <td colspan="6"><textarea disabled name = "kpi_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
                                                                  aria-invalid="false" required>{{$appraisal_contents->development_comment_manager}}</textarea>
                                        </td>
                                    </tr>



                                    </tbody>
                                </table>




                                <h3 class="form-section"> Final Comments </h3>

                                <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Details </th>
                                        <th>Response</th>

                                    </tr>
                                    </thead>
                                    <tbody>



                                    <tr class="odd gradeX">
                                        <td> </td>
                                        <td >
                                            Final Feedback &  Comments
                                        </td>

                                        <td colspan="6"><textarea disabled name = "kpi_comment_staff" class="form-control" style="margin: 0px; width:100%; height: 170px;"
                                                                  aria-invalid="false" required>{{$appraisal_contents->final_comment_staff}}</textarea>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td> </td>
                                        <td >
                                            Manager's  Final Feedback &  Comments
                                        </td>

                                        <td colspan="6"><textarea disabled name = "kpi_comment_manager" class="form-control" style="margin: 0px; width:100%; height: 170px;"
                                                                  aria-invalid="false" required>{{$appraisal_contents->final_comment_manager}}</textarea>
                                        </td>
                                    </tr>



                                    </tbody>
                                </table>



                            </form>
                        </div>
                    </div>
                    <!-- Date card end -->
                </div>
            </div>
                 @if(($appraisal_contents->manager_actioned == 1) && ($appraisal_contents->status != 0) )

           <div class="text-center modal-footer">
                
                
                
                <a href="../../download/download.php?id={{$appraisal_contents->id}}"> <button
                type="button" class="btn btn-success
                mt-ladda-btn ladda-button
                btn-circle" data-style="expand-down">
                <span class="ladda-label">
                <i class="icon-arrow-down"></i> Download & Print Appraisal (PDF) </span>
                <span class="ladda-spinner"></span></button>
                
                
            </div>
                     @endif
        </div>
    </div>
</div>
                 
                 
                 
                 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered" role="document">
                 <div class="modal-content">
                 <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                 </div>
                 <div class="modal-body">
                 
                 
                 
                 <form id="do_reject" action="{{ route('appraisal.do_reject', ['id' => $appraisal_contents->id])}}" method="POST">
                
                 @csrf
                 <p>Enter comment: </p>
                 <textarea name="comment" style="margin: 0px; width: 100%; height: 246px;" ></textarea>
                 </div>
                 <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary" >Save Comment</button>
                 
                 
                 </form>
                 </div>
                 </div>
                 </div>
                 </div>
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 <style>
                 
                 .modal-backdrop{
                 display:none;
                 visibility: hidden;
                 }
                 </style>
                 
                 
                         
                         <script>
                         $(document).ready(function(){
                                           $("#myBtn").click(function(){
                                                             $("#myModal").modal();
                                                             });
                                           });
                 </script>

                 
                 
                 <script>
                 /*using the been here before completed and successful*/
                 $(function(){
                   $("#do_approve").submit(function(evt){
                                           evt.preventDefault();
                                           var url = $(this).attr('action');
                                           var postData = $(this).serialize();
                                           $.post(url, postData, function(dor){
                                                  if (dor.result == 1){
                                                  
                                                  $("#do_approve").trigger('reset'); //reset the form
                                                  
                                                  swal("Success", dor.message, "success");
                                                  
                                                  $("#do_approve").hide(); //hide button
                                                  theNotification(dor.message);
                                                  
                                                  }else{
                                                  
                                                  $("#do_approve").trigger('reset'); //reset the form
                                                  $("#do_approve").hide(); //hide button
                                                  theNotification(dor.message);
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
                 
                 
                 $(function(){
                   $("#do_reject").submit(function(evt){
                                            evt.preventDefault();
                                          var url = $(this).attr('action');
                                          var postData = $(this).serialize();
                                          $.post(url, postData, function(dor){
                                                 if (dor.result == 1){
                                                 
                                                 $("#do_reject").trigger('reset'); //reset the form
                                                 
                                                 $('.modal').modal('toggle');
                                                 swal("Success", dor.message, "warning");
                                                 
                                                 $("#do_approve").hide(); //hide button
                                                 theNotification(dor.message);
                                                 
                                                 }else{
                                                 
                                                 $("#do_reject").trigger('reset'); //reset the form
                                                 
                                                 $('.modal').modal('toggle');
                                                 swal("Error!", dor.message, "error");
                                                 
                                                 $("#do_approve").hide(); //hide button
                                                 theNotification(dor.message);
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
                 
                 
                 
                 $(function(){
                   $("#hod_comment").submit(function(evt){
                                          evt.preventDefault();
                                          var url = $(this).attr('action');
                                          var postData = $(this).serialize();
                                          $.post(url, postData, function(dor){
                                                 if (dor.result == 1){
                                                 
                                                 $("#hod_comment").trigger('reset'); //reset the form
                                                 
                                                //$('.modal').modal('toggle');
                                                 swal("Success", dor.message, "success");
                                                 
                                                 //$("#do_approve").hide(); //hide button
                                                 theNotification(dor.message);
                                                 
                                                 }else{
                                                 
                                                 $("#hod_comment").trigger('reset'); //reset the form
                                                 
                                                // $('.modal').modal('toggle');
                                                 swal("Error!", dor.message, "error");
                                                 
                                                 $("#do_approve").hide(); //hide button
                                                 theNotification(dor.message);
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
                 
                 
                
                 

                 
                 

                    <style> .card { box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2); transition: 0.3s; padding:15px; border-radius: 5px; /* 5px rounded corners */ }
                        .form-section {margin: 30px 0;padding-bottom: 5px; border-bottom: 1px solid #e7ecf1;}</style>
@endsection
                            
                            
@include('includes.scripts_form')
