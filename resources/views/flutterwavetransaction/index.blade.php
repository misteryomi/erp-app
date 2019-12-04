@extends('layouts.app') @section('content') 
<!-- BEGIN CONTENT -->
@section('page_title')Card Collections @endsection

<?php
use App\User;
?>
<!-- BEGIN CONTENT -->
@include('flutterwafe.menu')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <div class="portlet light ">
            <div class="card-header">
              <div class="caption">
                <span class="caption-subject font-green-sharp bold uppercase">
                   <h2> {{$title}} </h2></span>
               </div>
               <div class="actions">

                <!-- START OF RANGE DISPLAY -->



                <div class="btn-group" id="reportrange">
                    <form action="{{route('flutterwavetransaction.range')}}" method="get">
                        <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" id="searchrange_btn" data-hover="dropdown" data-close-others="true"> Search by Date :   <span></span>
                            <i class="fa fa-angle-down"></i>  
                        </a>

                        

                        


                        <input type="hidden" name="start_date" id="start_date">

                        <input type="hidden" name="end_date" id="end_date">


                    <!-- <ul >
                        <li>
                            <a href="javascript:;"> Option 1</a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="javascript:;">Option 2</a>
                        </li>
                        <li>
                            <a href="javascript:;">Option 3</a>
                        </li>
                        <li>
                            <a href="javascript:;">Option 4</a>
                        </li>
                    </ul> -->


                    <button class="btn btn-success btn-outline btn-circle btn-sm"> Search Date Range </button>


                    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                    <!--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />  -->




               <!--  <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
    <i class="fa fa-calendar"></i>&nbsp;
    <i class="fa fa-caret-down"></i>
</div> -->

<script type="text/javascript">
    $(function() { 




        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            document.getElementById("start_date").value = start.format('MMMM D, YYYY');
            document.getElementById("end_date").value = end.format('MMMM D, YYYY');
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
           }
       }, cb);

        cb(start, end);


        $('#searchrange_btn').click(function(){
            /*$(this).toggleClass('clicked');*/

        //alert('Yes we did'); 
        var color = document.getElementsByClassName("daterangepicker");
        $(this).setAttribute("style", "background-color: red;");


  /*      
    if (color === "block")
       // alert('Nice');
        // document.getElementsByClassName("opensright").style.display="inline-flex !important";
                  document.getElementsByClassName("opensright").style.color="black";

    else
     document.getElementsByClassName("opensright").style.color="black";*/


});



    });



    
    
</script>

</form>
</div>
<!-- END OF RANGE DISPLAY -->

</div>

</div>

</div>



@if(isset($chart))


<div class="page-bar">
    <ul class="page-breadcrumb">
        <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
        <li> <a href="#">Card Collection </a> </li>
    </ul>
</div>





<!-- CHART HERE -->
<script type="text/javascript">

    var ChartsAmcharts = function() {
        var 
        t = function() {
            var e = AmCharts.makeChart("chart_2", {
                type: "serial",
                theme: "light",
                fontFamily: "Open Sans",
                color: "#888888",
                legend: {
                    equalWidths: !1,
                    useGraphSettings: !0,
                    valueAlign: "left",
                    valueWidth: 120
                },

                dataProvider: [
                @foreach ($chart as $key => $value){
                    date: "{{$chart[$key]['date1']}}",
                    distance: {{$chart[$key]['count1']}},
                    townName: " {{$chart[$key]['amount1']}}",
                    townName2: "{{$chart[$key]['amount1']}}",
                    townSize: {{$chart[$key]['count1']}},
                    latitude: {{$chart[$key]['amount1']}},
                    duration: {{$chart[$key]['count1']}}
                },@endforeach{
                    date: "{{$lastday}}"
                }],
                valueAxes: [{   
                    id: "distanceAxis",
                    axisAlpha: 0,
                    gridAlpha: 0,
                    position: "left",
                    title: "Card Collections"
                }, {
                    id: "latitudeAxis",
                    axisAlpha: 0,
                    gridAlpha: 0,
                    labelsEnabled: !1,
                    position: "right"
                }, {
                    id: "durationAxis",
                    duration: "mm",
                    durationUnits: {
                        hh: "h ",
                        mm: " cards"
                    },
                    axisAlpha: 0,
                    gridAlpha: 0,
                    inside: !0,
                    position: "right",
                    title: "Card Tokenization"
                }],
                graphs: [{
                    alphaField: "alpha",
                    balloonText: "[[value]]",
                    dashLengthField: "dashLength",
                    fillAlphas: .7,
                    legendPeriodValueText: "total: [[value.sum]]",
                    legendValueText: "[[value]]",
                    title: "card count",
                    type: "column",
                    valueField: "distance",
                    valueAxis: "distanceAxis"
                }, {
                    balloonText: "[[value]] NGN",
                    bullet: "round",
                    bulletBorderAlpha: 1,
                    useLineColorForBulletBorder: !0,
                    bulletColor: "#FFFFFF",
                    bulletSizeField: "townSize",
                    dashLengthField: "dashLength",
                    descriptionField: "townName",
                    labelPosition: "right",
                    labelText: "[[townName2]]",
                    legendValueText: "[[description]]/[[value]]",
                    title: "Amount Collected",
                    fillAlphas: 0,
                    valueField: "latitude",     
                    valueAxis: "latitudeAxis"
                }, {
                    bullet: "square",
                    bulletBorderAlpha: 1,
                    bulletBorderThickness: 1,
                    dashLengthField: "dashLength",
                    legendValueText: "[[value]]",
                    title: "daily",
                    fillAlphas: 0,
                    valueField: "duration",
                    valueAxis: "durationAxis"
                }],
                chartCursor: {
                    categoryBalloonDateFormat: "DD",
                    cursorAlpha: .1,
                    cursorColor: "#000000",
                    fullWidth: !0,
                    valueBalloonsEnabled: !1,
                    zoomable: !1
                },
                dataDateFormat: "YYYY-MM-DD",
                categoryField: "date",
                categoryAxis: {
                    dateFormats: [{
                        period: "DD",
                        format: "DD"
                    }, {
                        period: "WW",
                        format: "MMM DD"
                    }, {
                        period: "MM",
                        format: "MMM"
                    }, {
                        period: "YYYY",
                        format: "YYYY"
                    }],
                    parseDates: !0,
                    autoGridCount: !1,
                    axisColor: "#555555",
                    gridAlpha: .1,
                    gridColor: "#FFFFFF",
                    gridCount: 50
                },
                exportConfig: {
                    menuBottom: "20px",
                    menuRight: "22px",
                    menuItems: [{
                        icon: App.getGlobalPluginsPath() + "amcharts/amcharts/images/export.png",
                        format: "png"
                    }]
                }
            });
$("#chart_2").closest(".portlet").find(".fullscreen").click(function() {
    e.invalidateSize()
})
};
return {
    init: function() {
       t()
   }
}
}();
jQuery(document).ready(function() {
    ChartsAmcharts.init()
});
</script>

<!-- CHART HERE  -->






<div class="row">
    <div class="col-md-12">
        <!-- BEGIN CHART PORTLET-->
        <div class="portlet light ">
            <div class="card-header">
                <div class="caption">
                    <i class="icon-bar-chart font-green-haze"></i>
                    <span class="caption-subject bold uppercase font-green-haze">{{ \Carbon\Carbon::now()->format('F') }}  , {{ \Carbon\Carbon::now()->year }}   </span>
                    <span class="caption-helper"> Daily Card Transactions </span>
                </div>
                <div class="tools">

                    <a href="javascript:;" class="reload"> </a>

                </div>
            </div>
            <div class="card-body
                <div id="chart_2" class="chart" style="height: 400px;"> </div>
            </div>
        </div>
        <!-- END CHART PORTLET-->
    </div>
</div>
<!-- END ROW -->




<!-- end of graph ROW -->






@endif



 
@if(isset($total_successful) && isset($total_failed) && isset($total_monthly) && isset($total_daily) )

<!-- END PAGE HEADER-->
<!--
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="{!! number_format($total_successful,2) !!}">{!! number_format($total_successful,2) !!} NGN</span>
                        {{--<small class="font-green-sharp">NAIRA</small>--}}
                    </h3>
                    <small>TOTAL SUCCESSFUL PAYMENT</small>
                </div>
                <div class="icon">
                    <i class="icon-pie-chart"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 50%;" class="progress-bar progress-bar-success purple-soft">
                        <span class="sr-only">50</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> {!! number_format($total_successful,2) !!} </div>
                    <div class="status-number"> % </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-blue-sharp">
                        <span  style= "color: red;" data-counter="counterup" data-value="{!! number_format($total_failed,2) !!}">{!! number_format($total_failed,2) !!} NGN</span>
                    </h3>
                    <small style= "color: red;">TOTAL FAILED PAYMENT</small>
                </div>
                <div class="icon">
                    <i class="icon-pie-chart"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 50%;" class="progress-bar progress-bar-success purple-soft">
                        <span class="sr-only">50</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title">{!! number_format($total_failed,2) !!} </div>
                    <div class="status-number"> % </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-red-haze">
                        <span data-counter="counterup" data-value="{!! number_format($total_monthly,2) !!}">{!! number_format($total_monthly,2) !!} NGN</span>
                    </h3>
                    <small>CURRENT MONTH TOTAL PAYMENT </small>
                </div>
                <div class="icon">
                    <i class="icon-bar-chart"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 50%;" class="progress-bar progress-bar-success purple-soft">
                        <span class="sr-only"></span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> {!! number_format($total_monthly,2) !!} </div>
                    <div class="status-number"> % </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-purple-soft">
                        <span data-counter="counterup" data-value="{!! number_format($total_daily,2 ) !!}">{!! number_format($total_daily,2 ) !!} NGN</span>
                    </h3>
                    <small>TODAY'S TOTAL PAYMENT</small>
                </div>
                <div class="icon">
                    <i class="icon-bar-chart"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 50%;" class="progress-bar progress-bar-success purple-soft">
                        <span class="sr-only"></span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> {!! number_format($total_daily,2) !!} </div>
                    <div class="status-number"> % </div>
                </div>
            </div>
        </div>
    </div>
</div>

 -->
@endif
<!-- /////////////////////////////////////////////e n d/////////////////////////////////////////////////////// -->


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="card">
            <div class="card-header">
                <div class="caption"> <i class="fa fa-globe"></i>Card Collection </div>
                <div class="actions"></div>
            </div>
            <div class="card-body


                <div class="" id="table-content-display">
                    <div class="card">
                        <div class="card-header">
                            <h2>
                                Card Collection
                            </h2>
                           <div class="actions"></div>

                            <span>Displaying Card Collection</span> 
                            <div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
                        </div>
                       
                                            <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">

                                                <thead>
                                                    <tr role="row">
                                                        <th>Date Created</th>
                                                        <th>PPR</th>
                                                        <th>Customer Name </th>
                                                                                                                <th>Amount</th>

                                                        <th> Acc No. </th>
                                                        <th>Phone  </th>
                                                        <th>Email </th>


                                                        <th>Transaction ID</th>
                                                        <th>Transaction Reference</th>
                                                        <th>Processor Reference</th>
 <th>Currency</th>

                                                        <th>Amount Charged</th>
                                                        <th>Rave Fee</th>
                                                        <th>Merchant Fee</th>
                                                        <th>Merchant Bore Fee</th>
                                                        <th>Processor Response Code</th>
                                                        <th>Processor Response Message</th>
                                                        <th>Auth. Model</th>
                                                        <th>Customer IP</th>
                                                        <th>Narration</th>
                                                        <th>Status</th>
                                                        <th>Payment Entity</th>
                                                        <th>Payment Entity_id</th>
                                                        <th>Unique Reference</th>
                                                        <th>Amount Due Merchant</th>
                                                        <th>Customer ID</th>
                                                        <th>Customer Email</th>
                                                        <th>Customer Phone number</th>
                                                        <th>Customer Name</th>
                                                        <th>Customer Date Created</th>
                                                        <th>Card ID</th>
                                                        <th>Masked Pan</th>
                                                        <th>Expiry Year</th>
                                                        <th>Expiry Month</th>
                                                        <th>Type</th>
                                                        <th>Country</th>
                                                        <th>Issuer Info</th>
                                                        <th>Card Date Created</th>
                                                        <th>Merchant ID</th>
                                                        <th>Payment Count</th>
                                                        <th>other1</th>
                                                        <th>other2</th>
                                                        <th>other3</th>
                                                        <th>other4</th>
                                                        <th>other5</th>
                                                        <th>Last Update</th>

                                                    </tr>
                                                    <input type="hidden" name="_token" value="Aq80piw7362mYMissu1A8UdyZwRjdH9hd5xODb4h">
                                                </thead>
                                                <tbody id="PostContent">
                                                    @foreach($flutterwavetransactions as $flutterwavetransaction) 



                                                    <tr  @if($flutterwavetransaction->status == "successful") style="color:#075B01" @else style="color:#BD0000" @endif  class="item{!!$flutterwavetransaction->
                                                        id!!}" > 

                                                        <td>{!!$flutterwavetransaction->date_created!!}</td>

                                                        <td>{!!$flutterwavetransaction->token_id!!}</td>

                                                        <td>{!!$flutterwavetransaction->flutterwafe->customer_name!!}</td>
                                                        <td>{!!$flutterwavetransaction->amount!!}</td>

                                                        <td>{!!$flutterwavetransaction->flutterwafe->cfi!!}</td>
                                                        <td>{!!$flutterwavetransaction->flutterwafe->phone_number!!}</td>
                                                        <td>{!!$flutterwavetransaction->flutterwafe->email!!}</td>

                                                        <td>{!!$flutterwavetransaction->transaction_id!!}</td>
                                                        <td>{!!$flutterwavetransaction->transaction_reference!!}</td>
                                                        <td>{!!$flutterwavetransaction->processor_reference!!}</td>
                                                        <td>{!!$flutterwavetransaction->currency!!}</td>
                                                        <td>{!!$flutterwavetransaction->amount_charged!!}</td>
                                                        <td>{!!$flutterwavetransaction->rave_fee!!}</td>
                                                        <td>{!!$flutterwavetransaction->merchant_fee!!}</td>
                                                        <td>{!!$flutterwavetransaction->merchant_bore_fee!!}</td>
                                                        <td>{!!$flutterwavetransaction->processor_response_code!!}</td>
                                                        <td>{!!$flutterwavetransaction->processor_response_message!!}</td>
                                                        <td>{!!$flutterwavetransaction->auth_model!!}</td>
                                                        <td>{!!$flutterwavetransaction->customer_ip!!}</td>
                                                        <td>{!!$flutterwavetransaction->narration!!}</td>
                                                        <td>{!!$flutterwavetransaction->status!!}</td>
                                                        <td>{!!$flutterwavetransaction->payment_entity!!}</td>
                                                        <td>{!!$flutterwavetransaction->payment_entity_id!!}</td>
                                                        <td>{!!$flutterwavetransaction->unique_reference!!}</td>
                                                        <td>{!!$flutterwavetransaction->amount_due_merchant!!}</td>
                                                        <td>{!!$flutterwavetransaction->customer_id!!}</td>
                                                        <td>{!!$flutterwavetransaction->customer_email!!}</td>
                                                        <td>{!!$flutterwavetransaction->customer_phonenumber!!}</td>
                                                        <td>{!!$flutterwavetransaction->customer_fullname!!}</td>
                                                        <td>{!!$flutterwavetransaction->customer_date_created!!}</td>
                                                        <td>{!!$flutterwavetransaction->card_id!!}</td>
                                                        <td>{!!$flutterwavetransaction->masked_pan!!}</td>
                                                        <td>{!!$flutterwavetransaction->expiry_year!!}</td>
                                                        <td>{!!$flutterwavetransaction->expiry_month!!}</td>
                                                        <td>{!!$flutterwavetransaction->type!!}</td>
                                                        <td>{!!$flutterwavetransaction->country!!}</td>
                                                        <td>{!!$flutterwavetransaction->issuer_info!!}</td>
                                                        <td>{!!$flutterwavetransaction->date_created!!}</td>
                                                        <td>{!!$flutterwavetransaction->merchant_id!!}</td>
                                                        <td>{!!$flutterwavetransaction->payment_count!!}</td>
                                                        <td>{!!$flutterwavetransaction->other1!!}</td>
                                                        <td>{!!$flutterwavetransaction->other2!!}</td>
                                                        <td>{!!$flutterwavetransaction->other3!!}</td>
                                                        <td>{!!$flutterwavetransaction->other4!!}</td>
                                                        <td>{!!$flutterwavetransaction->other5!!}</td>
                                                        <td>{!!$flutterwavetransaction->updated_at->diffForHumans()!!} </td>

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


                @endsection


                @include('includes.scripts_table')

                @include('includes.scripts_form')
