@extends('layouts.app')
@section('page_title')Leave Application @endsection
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

        <ol class="breadcrumb breadcrumb-links breadcrumb-light">
            <li class="breadcrumb-item"><a href="./"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Leave</li>
        </ol>





        <!-- END PAGE HEADER-->
        <div class="row mt-3">

         <div  class="col-md-3">
            <div class="card">
                <div class="card-body">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="{{ 20 - $total_annual }}">{{ 20 - $total_annual }}</span>
                            {{--<small class="font-green-sharp">NAIRA</small>--}}
                        </h3>
                        <small>Annual Leave Left</small>

                        <div class="progress mt-2">
                            <span style="width: {{$total_annual == 0 ? 0 :  round( $total_annual/20*100) }}%;" class="progress-bar progress-bar-success
                            green-sharp">
                                {{-- <span class="sr-only">width: {{$total_annual == 0 ? 0 :  round( $total_annual/20*100) }}% leave taken</span> --}}
                            </span>
                        </div>
                        <small class="status">
                            <div class="status-title"> leave taken ({{ $total_annual }}) </div>
                            <div class="status-number"> {{$total_annual == 0 ? 0 :  round( $total_annual/20*100) }}% </div>
                        </small>

                </div>
            </div>
         </div>

         <div  class="col-md-3">
                <div class="card">
                    <div class="card-body">
                            <h3 class="font-blue-sharp">
                                <span data-counter="counterup" data-value="{{ 3 - $total_sick }}">{{ 3 - $total_sick }}</span>
                            </h3>
                            <small>TOTAL SICK LEAVE LEFT</small>

                        <div class="progress mt-2">
                                        <span style="width: {{$total_sick == 0 ? 0 :  round( $total_sick/3*100) }}%;" class="progress-bar progress-bar-success blue-sharp">
                                            {{-- <span class="sr-only">{{$total_sick == 0 ? 0 :  round( $total_sick/3*100)
                                             }}% taken </span> --}}
                                        </span>
                        </div>
                        <small class="status">
                            <div class="status-title"> taken ({{$total_sick}})</div>
                            <div class="status-number"> {{$total_sick == 0 ? 0 :  round( $total_sick/3*100) }}% </div>
                        </small>

                    </div>
                </div>
             </div>
         <div  class="col-md-3">
            <div class="card">
                <div class="card-body">
                        <h3 class="font-red-haze">
                            <span data-counter="counterup" data-value="{{ 7 - $total_examination }}">{{ 7 - $total_examination }}</span>
                        </h3>
                        <small>TOTAL Examination Leave left </small>

                        <div class="progress mt-2">
                                <span style="width: {{$total_examination == 0 ? 0 :  round( $total_examination/7*100) }}%;" class="progress-bar progress-bar-success red-haze">
                                    {{-- <span class="sr-only">{{$total_examination == 0 ? 0 :  round(
                                    $total_examination/7*100) }}%</span> --}}
                                </span>
                        </div>
                        <small class="status">
                            <div class="status-title"> taken ({{ $total_examination }}) </div>
                            <div class="status-number">{{$total_examination == 0 ? 0 :  round( $total_examination/7*100) }}% </div>
                        </small>

                </div>
            </div>
         </div>
         <div  class="col-md-3">
            <div class="card">
                <div class="card-body">
                        <h3 class="font-purple-soft">
                            <span data-counter="counterup" data-value="{{ 5 - $total_compassionate }}">{{ 5 - $total_compassionate }}</span>
                        </h3>
                        <small>COMPANSIONATE LEAVE LEFT</small>

                        <div class="progress mt-2">
                            <span style="width: {{$total_compassionate == 0 ? 0 :  round( $total_compassionate/5*100) }}%;" class="progress-bar progress-bar-success purple-soft">
                                {{-- <span class="sr-only">{{$total_compassionate == 0 ? 0 :  round(
                                $total_compassionate/5*100) }}% taken</span> --}}
                            </span>
                        </div>
                        <small class="status">
                            <div class="status-title"> Taken ({{$total_compassionate }}) </div>
                            <div class="status-number"> {{$total_compassionate == 0 ? 0 :  round(
                                            $total_compassionate/5*100) }}% </div>
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
                           <i class="fa fa-globe"></i>My Leave Applications </div>
                       <div class="actions">


                       </div>
                   </div>
                   <div class="card-body">
                       <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                           <thead>
                           <tr>
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
                               <th> Category </th>
                               <th>Duration </th>
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
                           </tfoot>
                           <tbody>


                           @foreach( $leaves as $leave )
                           <tr>

                               <td> {{ ucwords($leave ->leave_category) }} </td>
                               <td> {{ $leave ->no_days }} Days </td>
                               <td> {{ Carbon\Carbon::parse($leave->start_date)->format('d-m-Y') }} </td>
                               <td> {{ Carbon\Carbon::parse($leave->end_date)->format('d-m-Y') }}  </td>
                               <td> {{User::find($leave->supervisor_id)->name }} </td>
                               <td> {{User::find($leave->reliever_id)->name }} </td>
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

                               @if(($leave ->leave_category == "sick") && ($leave ->no_days > 3))

                                   <td>  <a href=" {{route('leave.show', ['id' =>
                                                                    $leave->id])}} " ><button type="button" class="btn btn
                                                                    red btn-sm">Upload Med Report</button></a> </td>

                                   @else
                               <td>  <a href=" {{route('leave.show', ['id' =>
                                                                    $leave->id])}} " ><button type="button" class="btn btn
                                                                    green btn-sm">View</button></a> </td>
                                @endif
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
