@extends('layouts.app')
@section('page_title'){{$title_display}} FASTTRACK TAT REPORT @endsection

 @section('content') 
<!-- BEGIN CONTENT -->
    <?php
use App\User;

date_default_timezone_set("Africa/Lagos");
?>

                
<style type="text/css">
#featuredbox{

    display: none!important; 
    visibility: hidden!important;
}

.modal-backdrop{
    display: none !important; 
}
</style>


@php

    function biss_hours($start, $end){
        
        $startDate = new DateTime($start);
        $endDate = new DateTime($end);
        $periodInterval = new DateInterval( "PT1H" );
        
        $period = new DatePeriod( $startDate, $periodInterval, $endDate );
        $count = 0;
        
        foreach($period as $date){
            
            $startofday = clone $date;
            $startofday->setTime(8,00,00);
            
            $endofday = clone $date;
            $endofday->setTime(17,00,00);
            
            if($date > $startofday && $date <= $endofday && !in_array($date->format('l'), array('Sunday','Saturday'))){
                
                $count++;
            }
            
        }
        
        //Get seconds of Start time
        $start_d = date("Y-m-d H:00:00", strtotime($start));
        $start_d_seconds = strtotime($start_d);
        $start_t_seconds = strtotime($start);
        $start_seconds = $start_t_seconds - $start_d_seconds;
        
        //Get seconds of End time
        $end_d = date("Y-m-d H:00:00", strtotime($end));
        $end_d_seconds = strtotime($end_d);
        $end_t_seconds = strtotime($end);
        $end_seconds = $end_t_seconds - $end_d_seconds;
        
        $diff = $end_seconds-$start_seconds;
        
        if($diff!=0):
            $count--;
        endif;
        
        if($count < 0){
            $count = 00;
        }
        $total_min_sec = date('i:s',$diff);
        
        return $count .":".$total_min_sec;
    }
  /*
  $start = '2019-08-28 17:00:50';
   $end = '2019-08-28 17:26:32';
    
 $go = biss_hours($start,$end);
  echo $go;
*/
@endphp



@php

    function biss_hours_cal($start_post, $end_post){
// RAY_work_minutes.php
    DEFINE ('ONEMINUTE', 60);
    
    // ESTABLISH THE MINUTES PER DAY FROM START AND END TIMES
    
        $start_time     = '08:00:00';
        $end_time       = '17:00:00';
    
    
    $start_ts = strtotime($start_time);
    $end_ts = strtotime($end_time);
    $minutes_per_day = (int)( ($end_ts - $start_ts) / 60 );
    
    // ESTABLISH THE HOLIDAYS
    $holidays = array
    (
     'Jan 19', // MLK Day
     'Jan 20', // Enoggeration Day
     'Feb 16', // Presidents Day
     'Apr 10', // Good Friday
     'May 25'  // Memorial Day
     );
    
    
    
    // IF WE HAVE FORM DATA
    if (!empty($start_post))
    {
        // CONVERT HOLIDAYS TO ISO DATES
        foreach ($holidays as $x => $holiday)
        {
            $holidays[$x] = date('Y-m-d', strtotime($holiday));
        }
        
        // CHECK FOR VALID DATES
        if (!$start = strtotime($start_post)) die('Invalid START Date');
        if (!$end = strtotime($end_post)) die('Invalid END Date');
        $start_p = date('Y-m-d H:i:s', $start);
        $end_p = date('Y-m-d H:i:s', $end);
        
        // MAKE AN ARRAY OF DATES
        $workdays = array();
        
        // ITERATE OVER THE DAYS
        $start = $start - ONEMINUTE;
        while ($start < $end)
        {
            $start = $start + ONEMINUTE;
            // ELIMINATE WEEKENDS - SAT AND SUN
            $weekday = date('D', $start);
            if (substr($weekday,0,1) == 'S') continue;
            // ELIMINATE HOLIDAYS
            $iso_date = date('Y-m-d', $start);
            if (in_array($iso_date, $holidays)) continue;
            $workminutes[] = $iso_date;
            // END ITERATOR
            
            // ELIMINATE HOURS BEFORE BUSINESS HOURS
            $daytime = date('H:i', $start);
            if(($daytime < date('H:i',$start_ts))) continue;
            // ELIMINATE HOURS PAST BUSINESS HOURS
            $daytime = date('H:i', $start);
            if(($daytime > date('H:i',$end_ts))) continue;
            
        }
        
        
        // HOW MANY WORK DAYS AND MINUTES?
        $number_of_workminutes = number_format(count($workminutes)-1);
        $number_of_minutes = date('H:i:s',$minutes_per_day);
        //echo "<br/>From $start_p through $end_p there are ";
        //echo "<br/>$number_of_workminutes Work Minutes";
        
       return $number_of_workminutes .":".$number_of_minutes;
    }
    }

/*$start1 = '2019-08-28 17:00:50';
        $end1 = '2019-08-28 17:26:32';
        
        $go1 = biss_hours_cal($start1,$end1);
echo "<hr /> Second function: ".$go1."";
 
 */
    @endphp



@php


function biss_hours_cal1($start_post, $end_post){

    ini_set('display_errors', 'on');
    
    define('DAY_WORK', 32400); // 9 * 60 * 60
    define('HOUR_START_DAY', '08:00');
    define('HOUR_END_DAY', '17:00');
    // get begin and end dates of the full period
    $date_begin = $start_post;
    $date_end = $end_post;
    
    // keep the initial dates for later use
    $d1 = new DateTime($date_begin);
    $d2 = new DateTime($date_end);
    
    // and get the datePeriod from the 1st to the last day
    $period_start = new DateTime($d1->format('Y-m-d 00:00:00'));
    $period_end   = new DateTime($d2->format('Y-m-d 23:59:59'));
    $interval = new DateInterval('P1D');
    //$interval = new DateInterval('weekdays'); // 1 day interval to get all days between the period
    $period = new DatePeriod($period_start, $interval, $period_end);
    
    $worked_time = 0;
    $nb = 0;
    // for every worked day, add the hours you want
    foreach($period as $date){
        $week_day = $date->format('w'); // 0 (for Sunday) through 6 (for Saturday)
        if (!in_array($week_day,array(0, 6)))
        {
            // if this is the first day or the last dy, you have to count only the worked hours
            if ($date->format('Y-m-d') == $d1->format('Y-m-d'))
            {
                $end_of_day_format = $date->format('Y-m-d '.HOUR_END_DAY);
                $d1_format = $d1->format('Y-m-d H:i:s');
                $end_of_day = new DateTime($end_of_day_format);
                $diff = $end_of_day->diff($d1)->format("%H:%I:%S");
                $diff = explode(':', $diff);
                $diff = $diff[0]*3600 + $diff[1]*60 + $diff[0];
                $worked_time += $diff;
            }
            else if ($date->format('Y-m-d') == $d2->format('Y-m-d'))
            {
                $start_of_day = new DateTime($date->format('Y-m-d '.HOUR_START_DAY));
                $d2_format = $d2->format('Y-m-d H:i:s');
                $end_of_day = new DateTime($end_of_day_format);
                $diff = $start_of_day->diff($d2)->format('%H:%I:%S');
                $diff = explode(':', $diff);
                $diff = $diff[0]*3600 + $diff[1]*60 + $diff[0];
                $worked_time += $diff;
            }
            else
            {
                // otherwise, just count the full day of work
                $worked_time += DAY_WORK;
            }
        }
        if ($nb> 10)
            die("die ".$nb);
    }
    
    return  date('H:i:s',$worked_time);

    //echo sprintf('Works from %s to %s, You worked %d hour(s)', $date_begin, $date_end, $worked_time/60/60);
}
/*
$start1 = '2019-08-28 14:00:00';
$end1 = '2019-08-28 17:26:32';

$go1 = biss_hours_cal1($start1,$end1);
echo "<hr /> Third function: ".$go1."";
*/
@endphp




@php

/**
 * Get the total working hours in seconds between 2 dates..
 * @param DateTime $start Start Date and Time
 * @param DateTime $end Finish Date and Time
 * @param array $working_hours office hours for each weekday (0 Monday, 6 Sunday), Each day must be an array containing a start/finish time in seconds since midnight.
 * @return integer
 * @link https://github.com/RCrowt/working-hours-calculator
 */
function getWorkingHoursInSeconds(DateTime $start, DateTime $end, array $working_hours)
{
    $seconds = 0; // Total working seconds
    
    // Calculate the Start Date (Midnight) and Time (Seconds into day) as Integers.
    $start_date = clone $start;
    $start_date = $start_date->setTime(0, 0, 0)->getTimestamp();
    $start_time = $start->getTimestamp() - $start_date;
    
    // Calculate the Finish Date (Midnight) and Time (Seconds into day) as Integers.
    $end_date = clone $end;
    $end_date = $end_date->setTime(0, 0, 0)->getTimestamp();
    $end_time = $end->getTimestamp() - $end_date;
    
    // For each Day
    for ($today = $start_date; $today <= $end_date; $today += 86400) {
        
        // Get the current Weekday.
        $today_weekday = date('w', $today);
        
        // Skip to next day if no hours set for weekday.
        if (!isset($working_hours[$today_weekday][0]) || !isset($working_hours[$today_weekday][1])) continue;
        
        // Set the office hours start/finish.
        $today_start = $working_hours[$today_weekday][0];
        $today_end = $working_hours[$today_weekday][1];
        
        // Adjust Start/Finish times on Start/Finish Day.
        if ($today === $start_date) $today_start = min($today_end, max($today_start, $start_time));
        if ($today === $end_date) $today_end = max($today_start, min($today_end, $end_time));
        
        // Add to total seconds.
        $seconds += $today_end - $today_start;
        
    }
    
    return gmdate("H:i:s", $seconds);
    
}

/*
$start1 = new DateTime('2019-08-28 17:00:50');
$end1 = new DateTime('2019-08-29 08:07:32');
$hours = [
null, // Sun
[28800, 61200], // Mon
[28800, 61200], // Tue
[28800, 61200], // Wed
[28800, 61200], // Thu
[28800, 61200], // Fri
null //Sat
];
//$go2 = getWorkingHoursInSeconds($start1,$end1,$hours);
//echo "<hr /> Forth function: ".$go2."";
*/
@endphp


<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            FASTTRACK TAT REPORT
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">FASTTRACK TAT REPORT FROM {{$start_date}} TO {{$end_date}} </a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>FASTTRACK TAT REPORT </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body



                                
                                        <div class="" id="table-content-display">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2>
                                                    </h2>
                                                    <span> DISPLAYING FASTTRACK TAT REPORT FROM {{$start_date}} TO {{$end_date}}</span> 
                                                                                                       <a href="{{ route('sms.fasttrack_index') }}"> <button id="btn-form-create" class="btn btn-lg btn-danger" style="margin:30px;" > GENERATE NEW FASTTRACK TAT   </button> </a>

                                                    <div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
                                                </div>
                                                <div class="card-body
                                                    <div>
                                                        <div id="new-cons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12">
                                                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>LOAN TRACK ID</th>
                                                                                <th>FIRST NAME</th>
                                                                                
                                                                                <th>LAST NAME </th>

                                                                                <th>EMAIL ADDRESS </th>

                                                                                <th>LOAN COUNT </th>

                                                                                <th>DEPARTMENT </th>

                                                                                <th>ROLE </th>

                                                                                <th>EXPECTED TAT </th>

                                                                                <th>DROP ACTUAL TAT </th>


                                                                                <th>OPEN ACTUAL TAT</th>

<th>BH DROP ACTUAL TAT </th>


<th>BH OPEN ACTUAL TAT</th>

<th>STATUS</th>

                                                                                <th>ACCOUNT OFFICER</th>

                                                                                 <th>DATE CREATED </th>

                                                                                  <th>DATE OPENED </th>

                                                                                   <th>DATE SUBMITED </th>


                                                                               
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="LbDsA3BCz5OtxtJtAMYCHtfPLKn4iTVS4IU9ClTO">
                                                                        </thead>
                                                                        <tbody id="PostContent">

                                                                      
                                                                            @foreach($sms as $sm) 
                                                                            <tr class="item{!!$sm->
                                                                                load_track_id!!}" > 

@php
$date_created1 = new DateTime($sm->date_created);
$date_opened1 = new DateTime($sm->date_opened);
$date_submitted1 = new DateTime($sm->date_submitted);
$hours = [
null, // Sun
[28800, 61200], // Mon
[28800, 61200], // Tue
[28800, 61200], // Wed
[28800, 61200], // Thu
[28800, 61200], // Fri
null //Sat
];
//$go2 = getWorkingHoursInSeconds($start1,$end1,$hours);
@endphp
                                                                                <td>{!!$sm->load_track_id!!}</td>
                                                                                <td>{!!$sm->first_name!!}</td>
                                                                                 <td>{!!$sm->last_name!!}</td>
                                                                                  <td>{!!$sm->email_address!!}</td>
                                                                                   <td>{!!$sm->loan_count!!}</td>
                                                                                    <td>{!!$sm->department!!}</td>
                                                                                    <td>{!!$sm->role!!}</td>
                                                                                     <td>{!!$sm->exepcted_tat!!}</td>
                                                                                      <td>{!!$sm->drop_actual_tat!!}</td>
                                                                                       <td>{!!$sm->open_actual_tat!!}</td>

<td>@if(!isset($sm->date_created))  @else    {!! getWorkingHoursInSeconds($date_created1,$date_submitted1,$hours) !!} @endif</td>

<td>@if(!isset($sm->date_opened))  @else    {!! getWorkingHoursInSeconds($date_opened1,$date_submitted1,$hours) !!} @endif</td>
<td>{!!$sm->status!!}</td>
                                                                                       <td>{!!$sm->account_officer!!}</td>
                                                                                       <td>{!!$sm->date_created!!}</td>
                                                                                       <td>{!!$sm->date_opened!!}</td>
                                                                                       <td>{!!$sm->date_submitted!!}</td>
                                                                                
                                                                               
                                                                               
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
                                                                   <!-- Page body start -->
                                        <!-- Page body end of content before includes of component-->
                                        <!-- Modal form to delete a form -->

                @endsection
                @include('includes.scripts_table')
