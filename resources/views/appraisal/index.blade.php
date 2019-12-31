@extends('layouts.frontend')
@section('page_title')Appraisal Dashboard @endsection
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


        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="#">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Appraisal Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Home</span>
                </li>
            </ul>

        </div>






        <div class="row">
            <div class="col-md-12">

                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Appraisal Dashboard</div>
                        <div class="actions">


                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                            <tr>
                                <th> Name </th>
                                <th> Year </th>
                                <th> Manager/Team Lead</th>
                                <th> Created Date </th>
                                <th> Status </th>
                                <th>View </th>
                                <th> Action </th>



                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th> Name </th>
                                <th> Year </th>
                                <th> Manager/Team Lead</th>
                                <th> Created Date </th>
                                <th> Status </th>
                                <th>View </th>
                                <th> Action </th>


                            </tr>
                            </tfoot>
                            <tbody>


                            @foreach($appraisals as $appraisal)
                                <tr>

                                    <td> {{User::find($appraisal->user_id)->name }} </td>
                                    <td> {{ $appraisal->year }} Appraisal </td>
                                    <td> {{User::find($appraisal->manager_id)->name }} </td>
                                    <td> {{ Carbon\Carbon::parse($appraisal->created_at)->format('d-m-Y') }}  </td>

                                    <td> @if ($appraisal->manager_actioned == 1)
                                            <span style='color:green; '> Assessed by Supervisor /
                                                Team Lead </span>
                                        @elseif($appraisal->staff_actioned == 1)
                                            <span style='color:red;'>Pending Supervisor/Team Lead Assessment</span>
                                        @else


                                            <span style='color:red; '> Pending Self Assessment </span>

                                        @endif
                                    </td>

                                    <td> @if ($appraisal->manager_actioned == 1)

                                            <a href="{{route('appraisal.report', ['id' =>
                                                                    $appraisal->id])}}"> <button type="button" class="btn blue mt-ladda-btn ladda-button btn-outline" data-style="slide-up" data-spinner-color="#333">
                                                    <span class="ladda-label">
                                                        <i class="icon-layers"></i> View Assessment </span>
                                            <span class="ladda-spinner"></span></button> </a>
                                             @else

                                            <button type="button" disabled class="btn blue mt-ladda-btn ladda-button
                                            btn-outline" data-style="slide-up" data-spinner-color="#333">
                                                    <span class="ladda-label">
                                                        <i class="icon-layers"></i> View</span>
                                                <span class="ladda-spinner"></span></button>

                                             @endif

@if (($appraisal->manager_actioned === 1) && ($appraisal->status == 0))

<a href="{{route('appraisal.report', ['id' =>
$appraisal->id])}}"> <button type="button" class="btn red mt-ladda-btn ladda-button btn-outline" data-style="slide-up" data-spinner-color="#333">
<span class="ladda-label">
<i class="icon-layers"></i> Click to Accept or Reject Assessment </span>
<span class="ladda-spinner"></span></button> </a>
@endif

                                    </td>

                                    <td> @if ($appraisal->manager_actioned == 1)

@if ($appraisal->status == 0)

Please Aceept or Reject Assessment

@elseif ($appraisal->status == 2)

<span style="color:red" >Rejected </span>

@elseif ($appraisal->status == 1)

<a href="download/download.php?id={{$appraisal->id}}"> <button
type="button" class="btn btn-success
mt-ladda-btn ladda-button
btn-circle" data-style="expand-down">
<span class="ladda-label">
<i class="icon-arrow-down"></i> Download & Print</span>
<span class="ladda-spinner"></span></button>

@endif
                                                                                         @elseif($appraisal->staff_actioned == 1)
                                                    <a href="{{route('appraisal.start', ['id' =>
                                                                    $appraisal->id])}}"> <button type="button"
                                                                                                 class="btn green
                                                                                                 mt-ladda-btn
                                               ladda-button
                                               btn-circle btn-outline" data-style="slide-right" data-spinner-color="#333">
                                                    <span class="ladda-label">
                                                        <i class="icon-login"></i> Edit </span>
                                                            <span class="ladda-spinner"></span></button></a>
                                                @else


                                                    <a href="{{route('appraisal.start', ['id' =>
                                                                    $appraisal->id])}}"> <button type="button" class="btn red mt-ladda-btn
                                               ladda-button
                                               btn-circle btn-outline" data-style="slide-right" data-spinner-color="#333">
                                                    <span class="ladda-label">
                                                        <i class="icon-login"></i> Proceed</span>
                                                            <span class="ladda-spinner"></span></button></a>

                                        @endif
                                    </td>





                                </tr>

                            @endforeach

                            </tbody>
                        </table>
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
