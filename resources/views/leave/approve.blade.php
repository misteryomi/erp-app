@extends('layouts.app')
@section('page_title')Approve / Decline Leave Request @endsection

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
        <!-- BEGIN THEME PANEL -->

        <!-- END THEME PANEL -->
        <h1 class="page-title"> Leave Application

        </h1>
        <div class="page-bar">
            <ol class="breadcrumb breadcrumb-links breadcrumb-light">
                <li class="breadcrumb-item"><a href="./"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leave</li>
            </ol>


           {{-- <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="#">
                                <i class="icon-bell"></i> Action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-shield"></i> Another action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> Something else here</a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="#">
                                <i class="icon-bag"></i> Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>--}}
        </div>





        <!-- END PAGE HEADER-->
        <div class="row mt-3">

         <div  class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="{{ $leaves_count }}">{{ $leaves_count }}</span>
                        {{--<small class="font-green-sharp">NAIRA</small>--}}
                    </h3>
                    <small>Pending Leave Approval</small>

                        <div class="progress mt-2">
                            <span style="width:{{ $leaves_count == 0 ? 0 : $leaves_count/
                            ($leaves_count+$leaves_completed_count)*100 }}%;" class="progress-bar progress-bar-success green-sharp">
                                {{-- <span class="sr-only">{{ $leaves_count == 0 ? 0 : $leaves_count/($leaves_count+$leaves_completed_count)*100 }}% progress</span> --}}
                            </span>
                        </div>
                        <small class="status">
                            <div class="status-title"> progress </div>
                            <div class="status-number"> {{$leaves_count == 0 ? 0 :  round($leaves_count/($leaves_count+$leaves_completed_count)*100) }}% </div>
                        </small>

                </div>
            </div>
         </div>



         <div  class="col-md-4">
            <div class="card">
                <div class="card-body">
                        <h3 class="font-blue-sharp">
                            <span data-counter="counterup" data-value="{{$leaves_completed_count}}"></span>
                        </h3>
                        <small>Completed  Leave</small>

                        <div class="progress mt-2">
                            <span style="{{ $leaves_completed_count == 0 ? 0 :  round($leaves_completed_count/($leaves_count+$leaves_completed_count)*100 )}}%" class="progress-bar progress-bar-success blue-sharp">
                                {{-- <span class="sr-only">{{ $leaves_completed_count == 0 ? 0 :  round($leaves_completed_count/($leaves_count+$leaves_completed_count)*100 )}}% grow</span> --}}
                            </span>
                        </div>
                        <small class="status">
                            <div class="status-title"> completed </div>
                            <div class="status-number"> {{ $leaves_completed_count == 0 ? 0 : round($leaves_completed_count/($leaves_count+$leaves_completed_count)*100) }}% </div>
                        </small>


                </div>
            </div>
         </div>



         <div  class="col-md-4">
            <div class="card">
                <div class="card-body">
                        <h3 class="font-red-haze">
                            <span data-counter="counterup" data-value="{{ $leaves_completed_count + $leaves_count }}">0</span>
                        </h3>
                        <small>Total Leave </small>

                        <div class="progress mt-2">
                            <span style="width: {{ $leaves_completed_count == 0 ? 0 :  round($leaves_count+$leaves_completed_count/($leaves_count+$leaves_completed_count)*100 )}}%;" class="progress-bar progress-bar-success red-haze">
                                {{-- <span class="sr-only">{{ $leaves_completed_count == 0 ? 0 : $leaves_count+$leaves_completed_count/($leaves_count+$leaves_completed_count)*100 }}</span> --}}
                            </span>
                        </div>
                        <small class="status">
                            <div class="status-title"> change </div>
                            <div class="status-number">{{$leaves_completed_count == 0 ? 0 :  round($leaves_count+$leaves_completed_count/
                            ($leaves_count+$leaves_completed_count)*100 )}}% </div>
                        </small>


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
                            <i class="fa fa-globe"></i>Leave Approval / Rejection </div>

                    </div>
                    <div class="card-body">
                      {{--  <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                            <thead>
                            <tr>
                                <th>Staff Name </th>
                                <th> Category </th>
                                <th> Duration </th>
                                <th> Start Date </th>
                                <th> Resumption Date </th>
                                <th>Supervisor</th>
                                <th> Reliever </th>
                                <th> Applied Date </th>
                                <th> Accept / Reject  </th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th> Staff Name </th>
                                <th> Category </th>
                                <th>Duration </th>
                                <th> Start Date </th>
                                <th> Resumption Date </th>
                                <th>Supervisor</th>
                                <th> Reliever </th>
                                <th> Applied Date </th>
                                <th> Accept / Reject  </th>
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
                                    <td>  <div class="btn-group btn-group-circle">
                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                        </div>
                                    </td>

                                </tr>

                            @endforeach

                            </tbody>
                        </table>
--}}



<div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="card light ">
                                <div class="card-header tabbable-line">
                                    <div class="caption">
                                        <i class=" icon-social-twitter font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Leave Approvals</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#tab_actions_pending" data-toggle="tab" aria-expanded="true" class="nav-link active"> Pending </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab_actions_completed" data-toggle="tab" aria-expanded="false" class="nav-link"> Completed </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_actions_pending">
                                            <!-- BEGIN: Actions -->
                                            <div class="mt-actions">
                                         {{--       <div class="mt-action">
                                                    <div class="mt-action-img">
                                                        <img src="../assets/pages/media/users/avatar10.jpg"> </div>
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-magnet"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">Natasha Kim</span>
                                                                    <p class="mt-action-desc">Dummy text of the printing</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-magnet"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">Natasha Kim</span>
                                                                    <p class="mt-action-desc">Dummy text of the printing</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-magnet"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">Natasha Kim</span>
                                                                    <p class="mt-action-desc">Dummy text of the printing</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-datetime ">
                                                                <span class="mt-action-date">3 jun</span>
                                                                <span class="mt-action-dot bg-green"></span>
                                                                <span class="mt=action-time">9:30-13:00</span>
                                                            </div>
                                                            <div class="mt-action-buttons ">
                                                                <div class="btn-group btn-group-circle">
                                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>--}}

                                                @foreach( $leaves as $leave )


                                                <div class="mt-action">
                                                    <div class="mt-action-img">
                                                        <img src="{{User::find($leave->user_id)->avatar }} "
                                                             width="50px" height="50px"> </div>
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class=" icon-bell"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">{{User::find
                                                                    ($leave->user_id)->display_name }} </span>
                                                                    <p class="mt-action-desc">pending approval for
                                                                        <strong>
                                                                        {{ $leave
                                                                     ->no_days }} days {{
                                                                     ucwords($leave ->leave_category) }} Leave
                                                                        </strong>  from  <strong>{{ Carbon\Carbon::parse
                                                                        ($leave->start_date)->format('d-m-Y') }}</strong> to
                                                                            <strong> {{
                                                                         Carbon\Carbon::parse($leave->end_date)
                                                                         ->format('d-m-Y') }}</strong> - <i> {{
        \Carbon\Carbon::createFromTimeStamp
        (strtotime(
       $leave->created_at))->diffForHumans() }}</i>
                                                                    </p>
                                                                </div>
                                                            </div>



                                                            <div class="mt-action-info text-center ">

                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">
                                                                   Reliever </span>
                                                                    {{--<p class="mt-action-desc"> {{User::find($leave->reliever_id)->display_name }} </p>--}}
                                                                </div>
                                                            </div>


                                                            <div class="mt-action-buttons ">
                                                                <div class="btn-group btn-group-circle">
                                                                    <a href=" {{route('leave.show', ['id' =>
                                                                    $leave->id])}} " ><button type="button" class="btn btn-outline
                                                                    green btn-sm">Proceed</button></a>
                                                                   {{-- <button type="button" class="btn btn-outline red btn-sm">Reject</button>--}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach


                                            </div>
                                            <!-- END: Actions -->
                                        </div>
                                        <div class="tab-pane" id="tab_actions_completed">
                                            <!-- BEGIN:Completed-->
                                            <div class="mt-actions">

                                                @foreach( $leaves_completed as $leave )


                                                    <div class="mt-action">
                                                        <div class="mt-action-img">
                                                            <img src="{{User::find($leave->user_id)->avatar }} "
                                                                 width="50px" height="50px"> </div>
                                                        <div class="mt-action-body">
                                                            <div class="mt-action-row">
                                                                <div class="mt-action-info ">
                                                                    <div class="mt-action-icon ">
                                                                        <i class="icon-badge"></i>
                                                                    </div>
                                                                    <div class="mt-action-details ">
                                                                    <span class="mt-action-author">{{User::find
                                                                    ($leave->user_id)->name }} </span>
                                                                        <p class="mt-action-desc">
                                                                            <strong>
                                                                                {{ $leave
                                                                             ->no_days }} days {{
                                                                     ucwords($leave ->leave_category) }} Leave
                                                                            </strong>  from  <strong>{{ Carbon\Carbon::parse
                                                                        ($leave->start_date)->format('d-m-Y') }}</strong> to
                                                                            <strong> {{
                                                                         Carbon\Carbon::parse($leave->end_date)
                                                                         ->format('d-m-Y') }}</strong> - <i> {{
        \Carbon\Carbon::createFromTimeStamp
        (strtotime(
       $leave->created_at))->diffForHumans() }}</i>
                                                                        </p>
                                                                    </div>
                                                                </div>



                                                                <div class="mt-action-info text-center ">

                                                                    <div class="mt-action-details ">
                                                                    <span class="mt-action-author">
                                                                   Reliever </span>
                                                                       {{-- <p class="mt-action-desc"> {{User::find($leave->reliever_id)->name }} </p>--}}
                                                                    </div>
                                                                </div>


                                                                <div class="mt-action-buttons ">
                                                                    <div class="btn-group btn-group-circle">
                                                                        <span class="mt-comment-status
                                                                        mt-comment-status-approved">{{ $leave->leave_message }}</span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @endforeach
                                                <!-- END: Completed -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

















                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->


@endsection


@section('styles')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}"  rel="stylesheet" type="text/css" />


<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('scripts')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/form-validation.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/global/plugins/jquery-repeater/jquery.repeater.js') }}" type="text/javascript"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/form-repeater.min.js') }}" type="text/javascript"></script>





<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/scripts/datatable.js') }}"  type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"  type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('assets/global/scripts/app.min.js" type="text/javascript') }}" ></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/table-datatables-fixedheader.min.js') }}"  type="text/javascript"></script>



@endsection
