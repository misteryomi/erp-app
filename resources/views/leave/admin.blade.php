@extends('layouts.app')

@section('content')

<?php
use App\User;
use App\Leave;
?>

@include('leave.menu')
        <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h1 class="page-title"> Leave Audit Trail

        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="#">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Leave</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Leave Audit Trail </a>

                </li>

            </ul>

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
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                            <thead>
                            <tr>
                                <th> Staff </th>
                                <th> Annual </th>
                                <th> Sick </th>
                                <th> Examination </th>
                                <th> Compassionate </th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th> Staff </th>
                                <th> Annual </th>
                                <th> Sick </th>
                                <th> Examination </th>
                                <th> Compassionate </th>
                                <th>Total</th>

                            </tr>
                            </tfoot>
                            <tbody>


                            @foreach( $users as $user )

                              <?php  $total_annual = Leave::where('user_id', '=', $user->ID)
                                ->where('hr_action', '=', '1')
                                ->whereRaw('year(`created_at`) = ?', array(date('Y')))
                                ->whereIn('leave_category', ['annual','casual','other'])->sum('no_days');

                                $total_examination = Leave::where('user_id', '=', $user->ID)
                                ->where('hr_action', '=', '1')
                                ->whereRaw('year(`created_at`) = ?', array(date('Y')))
                                ->where('leave_category',  '=', 'examination')->sum('no_days');

                                $total_compassionate= Leave::where('user_id', '=', $user->ID)
                                ->where('hr_action', '=', '1')
                                ->whereRaw('year(`created_at`) = ?', array(date('Y')))
                                ->where('leave_category',  '=', 'compassionate')->sum('no_days');

                                $total_sick= Leave::where('user_id', '=', $user->ID)
                                ->where('hr_action', '=', '1')
                                ->whereRaw('year(`created_at`) = ?', array(date('Y')))
                                ->where('leave_category',  '=', 'sick')->sum('no_days');
                                  
                                  
                                  $total_leave= Leave::where('user_id', '=', $user->ID)
                                  ->where('hr_action', '=', '1')
                                  ->whereRaw('year(`created_at`) = ?', array(date('Y')))
                                  ->sum('no_days');

                                ?>
                                <tr>
                                    <td> {{$user->display_name }} </td>
                                    <td> {{ $total_annual }} </td>
                                    <td> {{  $total_examination }}  </td>
                                    <td> {{  $total_compassionate }} </td>
                                    <td> {{  $total_sick }} </td>
                                    <td> {{  $total_leave }} </td>


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
