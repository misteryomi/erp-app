@extends('layouts.app')

@section('content')

<?php
use App\User;
?>

@include('leave.menu')
        <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h1 class="page-title"> Staff Leave Application

        </h1>

        <ol class="breadcrumb breadcrumb-links breadcrumb-light">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Leave</li>
          </ol>




        <!-- END PAGE HEADER-->
        <div class="row">
         <div  class="col-md-2">
            <div class="card">
            <div class="card-body">
                <h3 class="font-green-sharp">
                    <span data-counter="counterup" data-value="{{ $total_annual }}">{{  $total_annual }}</span>
                    {{--<small class="font-green-sharp">NAIRA</small>--}}
                </h3>
                <small>Annual Leave </small>
            </div>
            </div>
         </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-green-sharp">
                                <span data-counter="counterup" data-value="{{ $total_annual }}">{{  $total_annual }}</span>
                                {{--<small class="font-green-sharp">NAIRA</small>--}}
                            </h3>
                            <small>Annual Leave </small>
                        </div>
                        <div class="icon">
                            <i class="icon-pie-chart"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-blue-sharp">
                                <span data-counter="counterup" data-value="{{ $total_sick }}"></span>
                            </h3>
                            <small>TOTAL SICK LEAVE </small>
                        </div>
                        <div class="icon">
                            <i class="icon-pie-chart"></i>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-red-haze">
                                <span data-counter="counterup" data-value="{{ $total_examination }}">{{ $total_examination }}</span>
                            </h3>
                            <small>TOTAL Examination Leave  </small>
                        </div>
                        <div class="icon">
                            <i class="icon-bar-chart"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-purple-soft">
                                <span data-counter="counterup" data-value="{{ $total_compassionate }}"></span>
                            </h3>
                            <small>COMPANSIONATE lEAVE </small>
                        </div>
                        <div class="icon">
                            <i class="icon-bar-chart"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-md-12">

                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Staff Leave Applications </div>
                        <div class="actions">


                        </div>
                    </div>
                    <div class="card-body
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                            <tr>
                                <th> Staff </th>
                                <th> Category </th>
                                <th> Duration </th>
                                <th> Start Date </th>
                                <th> Resumption Date </th>
                                <th>Supervisor</th>
                                <th> Reliever </th>
                                <th> Applied Date </th>
                                <th> Supervisor Action </th>
                                <th> HR Action</th>
                                <th> Comments</th>
                                <th> View </th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th> Staff </th>
                                <th> Category </th>
                                <th>Duration </th>
                                <th> Start Date </th>
                                <th> Resumption Date </th>
                                <th>Supervisor</th>
                                <th> Reliever </th>
                                <th> Applied Date </th>
                                <th> Sup. Action </th>
                                <th> HR Action</th>
                                <th> Comments</th>
                                <th> View </th>

                            </tr>
                            </tfoot>
                            <tbody>


                            @foreach( $leaves as $leave )
                                <tr>
                                    <td> {{User::find($leave->user_id)->display_name }} </td>
                                    <td> {{ ucwords($leave ->leave_category) }} </td>
                                    <td> {{ $leave ->no_days }} Days </td>
                                    <td> {{ Carbon\Carbon::parse($leave->start_date)->format('d-m-Y') }} </td>
                                    <td> {{ Carbon\Carbon::parse($leave->end_date)->format('d-m-Y') }}  </td>
                                    <td> {{User::find($leave->supervisor_id)->display_name }} </td>
                                    <td> {{User::find($leave->reliever_id)->display_name }} </td>
                                    <td> {{ Carbon\Carbon::parse($leave->created_at)->format('d-m-Y') }} </td>
                                    <td> @if ($leave->supervisor_action == 1)
                                            <span style='color:green; font-weight: bold;'>Approved</span>
                                        @elseif($leave->supervisor_action == 2)
                                            <span style='color:red; font-weight: bold;'>Rejected</span>
                                        @else
                                            <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                        @endif
                                    </td>
                                    <td> @if ($leave->hr_action == 1)
                                            <span style='color:green; font-weight: bold;'>Approved</span>
                                        @elseif($leave->hr_action == 2)
                                            <span style='color:red; font-weight: bold;'>Rejected</span>
                                        @else
                                            <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                        @endif
                                    </td>
                                    <td> {{ $leave->reject_comment }} </td>


                                        <td>  <a href=" {{route('leave.show', ['id' =>
                                                                    $leave->id])}} " ><button type="button" class="btn btn
                                                                    green btn-sm">View</button></a> </td>

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
