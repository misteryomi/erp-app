@extends('layouts.app') 
@section('page_title')LIQUIDATION AND PART LIQUIDATION  @endsection

@section('content') 
 <?php
            use App\User;
            ?>
<!-- BEGIN CONTENT -->

@include('liquidation.menu')





@if(isset($chart))


<script src="{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>

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
                    townName: " {{ round($chart[$key]['amount1']) }}",
                    townName2: "{{ round($chart[$key]['amount1']) }}",
                    townSize: {{$chart[$key]['count1']}},
                    latitude: {{ round($chart[$key]['amount1']) }},
                    duration: {{$chart[$key]['count1']}}
                },@endforeach{
                    date: "{{$lastday}}"
                }],
                valueAxes: [{   
                    id: "distanceAxis",
                    axisAlpha: 0,
                    gridAlpha: 0,
                    position: "left",
                    title: "Liquidations"
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
                        mm: " liq"
                    },
                    axisAlpha: 0,
                    gridAlpha: 0,
                    inside: !0,
                    position: "right",
                    title: "Liquidations"
                }],
                graphs: [{
                    alphaField: "alpha",
                    balloonText: "[[value]]",
                    dashLengthField: "dashLength",
                    fillAlphas: .7,
                    legendPeriodValueText: "total: [[value.sum]]",
                    legendValueText: "[[value]]",
                    title: "Liquidations count",
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
                    title: "Amount Liquidations",
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
                    axisColor: "#330066",
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
                    <span class="caption-subject bold uppercase font-green-haze">{{ \Carbon\Carbon::now()->format('F') }} ,  {{ \Carbon\Carbon::now()->year }}   </span>
                    <span class="caption-helper"> Daily Liquidations </span>
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

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            Liquidation 
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">Liquidation </a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>Liquidation </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body
                        <div class="" style="display:none;" id="creator-form">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                        Add New Liquidation
                                    </h2>
                                    <span>Adding new Liquidation</span> 
                                    <div class="card-header-right" style="padding:30px;">
                                        <a href="#back" id="btn-form-close" class="btn btn-lg red">
                                            <i class="icofont icofont-rounded-left"></i>
                                            << Cancel & Return</a>
                                            </div>
                                        </div>
                                        <div class="card-body
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <!-- Date card start -->
                                                    <div class="card">
                                                        <div class="card-header"></div>
                                                        <div class="card-bodytyle="">
                                                            <form id="add_kc_form" class="form-horizontal"  method="post"  enctype="multipart/form-data">
                                                                  {{ csrf_field() }}
                                                                                    <input id="staff_id_add" name = "staff_id" type="hidden" value="{{ Auth::user()->ID }}" class="form-control">


                                                                <div class="form-group">
                                                                                        <label class="control-label col-md-3">Name of Customer  
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="customer_name_add" name = "customer_name"  required placeholder="Name of Customer "
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>


                                                                                     <div class="form-group">
                                                                                        <label class="control-label col-md-3">Amount Paid 
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="amount_paid_add" name = "amount_paid"  required placeholder="Amount Paid"
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>



                                                                                     <div class="form-group">
                                                                                        <label class="control-label col-md-3">Payee Name 
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="payee_add" name = "payee"  required placeholder="Payee Name"
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Date Paid 
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="date_paid_add" name = "date_paid"  required placeholder="Date Paid"
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Payment Bank :
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <select class="form-control select2me" required id="other1_add" name = "other1">
                                                                                                <option value="">Select bank..</option>
                                                                                                <option value="GTbank">GTbank</option>
                                                                                                <option value="Stanbic IBTC">Stanbic IBTC</option>


                                                                                            </select>
                                                                                        </div>
                                                                                    </div>


<div class="form-group">
                                                                                        <label class="control-label col-md-3">Liquidation Option:
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <select class="form-control select2me" required id="liquidation_type_ops_add" name = "liquidation_type_ops">
                                                                                                <option value="">Select b...</option>
                                                                                                <option value="part liquidation">Part Liquidation</option>
                                                                                                <option value="full liquidation">Full Liquidation</option>


                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                      <div class="form-group">
                                                                                        <label class="control-label col-md-3">Product Type:
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <select class="form-control select2me" required id="product_type_add" name = "product_type">
                                                                                                <option value="">Select...</option>
                                                                                                <option value="swift cash">Swift Cash</option>
                                                                                                <option value="federal">Federal</option>
                                                                                                <option value="state">State</option>



                                                                                            </select>
                                                                                        </div>
                                                                                    </div>


                                                                                     <div class="form-group">
                                                                                    <label class="control-label col-md-3">Upload Document:
                                                                                        <span class="required"> * </span>
                                                                                    </label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="file" id="documents_add" name = "documents" accept="application/pdf">
                                                                                    </div>
                                                                                </div>






<hr /> 



                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Amount Paid Confirmation
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="amount_confirmed_add" name = "amount_confirmed"  required placeholder="Amount Paid Confirmation"
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">LD
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="ld_add" name = "ld"  required placeholder="LOAN ID "
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Liquidation Option:
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <select class="form-control select2me" required id="liquidation_type_ops_add" name = "liquidation_type_ops">
                                                                                                <option value="">Select b...</option>
                                                                                                <option value="part liquidation">Part Liquidation</option>
                                                                                                <option value="full liquidation">Full Liquidation</option>


                                                                                            </select>
                                                                                        </div>
                                                                                    </div>


<div class="form-group">
                                                                                        <label class="control-label col-md-3">T24 ACCOUNT NUMBER
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="t24_acc_no_add" name = "t24_acc_no"  required placeholder=" T24 ACCOUNT NUMBER "
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>





                                                               <!--  <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="staff_id">staff_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="staff_id_add" name = "staff_id" type="text" class="form-control">
                                                                    </div>
                                                                </div> 
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_name">customer_name</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_name_add" name = "customer_name" type="text" class="form-control">
                                                                    </div>
                                                                </div>-->
                                                                <!-- <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="amount_paid">amount_paid</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="amount_paid_add" name = "amount_paid" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="date_paid">date_paid</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="date_paid_add" name = "date_paid" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="payee">payee</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="payee_add" name = "payee" type="text" class="form-control">
                                                                    </div>
                                                                </div> -->
                                                            <!--     <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="liquidation_type">liquidation_type</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="liquidation_type_add" name = "liquidation_type" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="documents">documents</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="documents_add" name = "documents" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="product_type">product_type</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="product_type_add" name = "product_type" type="text" class="form-control">
                                                                    </div>
                                                                </div> -->




                                                                <!-- <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="amount_confirmed">amount_confirmed</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="amount_confirmed_add" name = "amount_confirmed" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="ld">ld</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="ld_add" name = "ld" type="text" class="form-control">
                                                                    </div>
                                                                </div> -->
                                                                <!-- <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="liquidation_type_ops">liquidation_type_ops</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="liquidation_type_ops_add" name = "liquidation_type_ops" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="t24_acc_no">t24_acc_no</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="t24_acc_no_add" name = "t24_acc_no" type="text" class="form-control">
                                                                    </div>
                                                                </div> -->
                                                            <!--    <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="approved_by_ops">approved_by_ops</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="approved_by_ops_add" name = "approved_by_ops" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="approved_by_cad">approved_by_cad</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="approved_by_cad_add" name = "approved_by_cad" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="status_ops">status_ops</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="status_ops_add" name = "status_ops" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="status_cad">status_cad</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="status_cad_add" name = "status_cad" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="comment">comment</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="comment_add" name = "comment" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other1">other1</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other1_add" name = "other1" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other2">other2</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other2_add" name = "other2" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other3">other3</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other3_add" name = "other3" type="text" class="form-control">
                                                                    </div>
                                                                </div> -->

                                                                <script type="text/javascript">
                                                                    
                                                                    if(document.getElementById("documents_add").files.length == 0){

                                                                        $('#submit_button').hide(); 
                                                                        $('#submit_button2').show(); 
                                                                    }else{

                                                                        $('#submit_button2').hide(); 
                                                                    }
                                                                </script>
                                                                    <button type="submit"  id="submit_button2" class="btn btn-primary btn-lg m-b-0 add2">Submit</button>


                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- Date card end -->
                                                </div>
                                            </div>
                                            <div class="text-center modal-footer">
                                                <button type="submit" id="submit_button" class="btn btn-primary btn-lg m-b-0 add">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="display:none;" id="edit-form">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2>
                                                Editing liquidation
                                            </h2>
                                            <span>Editing liquidation</span> 
                                            <div class="card-header-right" style="padding:30px;">
                                                <a href="#back" id="btn-form-close" class="btn btn-lg red">
                                                    <i class="icofont icofont-rounded-left"></i>
                                                    << Cancel & Return</a>
                                                    </div>
                                                </div>
                                                <div class="card-body
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-12">
                                                            <!-- Date card start -->
                                                            <div class="card">
                                                                <div class="card-header"></div>
                                                                <div class="card-bodytyle="">
                                                                    <form id="edit_kc_form" class="form-horizontal"  method="post"  enctype="multipart/form-data">
 {{ csrf_field() }}

                                                                        <input type="hidden" class="form-control" id="id_edit" disabled>







                                                                <div class="form-group">
                                                                                        <label class="control-label col-md-3">Name of Customer  
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="customer_name_edit" name = "customer_name"  required placeholder="Name of Customer "
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>


                                                                                     <div class="form-group">
                                                                                        <label class="control-label col-md-3">Amount Paid 
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="amount_paid_edit" name = "amount_paid"  required placeholder="Amount Paid"
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>



                                                                                     <div class="form-group">
                                                                                        <label class="control-label col-md-3">Payee Name 
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="payee_edit" name = "payee"  required placeholder="Payee Name"
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Date Paid 
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="date_paid_edit" name = "date_paid"  required placeholder="Date Paid"
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Liquidation Option:
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <select class="form-control select2me" required id="liquidation_type_edit" name = "liquidation_type">
                                                                                                <option value="">Select b...</option>
                                                                                                <option value="part liquidation">Part Liquidation</option>
                                                                                                <option value="full liquidation">Full Liquidation</option>


                                                                                            </select>
                                                                                        </div>
                                                                                    </div>


                                                                                      <div class="form-group">
                                                                                        <label class="control-label col-md-3">Product Type:
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <select class="form-control select2me" required id="product_type_edit" name = "product_type">
                                                                                                <option value="">Select...</option>
                                                                                                <option value="swift cash">Swift Cash</option>
                                                                                                <option value="federal">Federal</option>
                                                                                                <option value="state">State</option>



                                                                                            </select>
                                                                                        </div>
                                                                                    </div>


                                                                                     <div class="form-group">
                                                                                    <label class="control-label col-md-3">Upload Document:
                                                                                        <span class="required"> * </span>
                                                                                    </label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="file" id="documents_edit" name= "documents" accept="application/pdf">
                                                                                    </div>
                                                                                </div>






<hr /> 



                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Amount Paid Confirmation
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="amount_confirmed_edit" name = "amount_confirmed"  required placeholder="Amount Paid Confirmation"
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">LD
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="ld_edit" name = "ld"  required placeholder="LOAN ID "
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label class="control-label col-md-3">Liquidation Option:
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <select class="form-control select2me" required id="liquidation_type_ops_edit" name = "liquidation_type_ops">
                                                                                                <option value="">Select b...</option>
                                                                                                <option value="part liquidation">Part Liquidation</option>
                                                                                                <option value="full liquidation">Full Liquidation</option>


                                                                                            </select>
                                                                                        </div>
                                                                                    </div>


<div class="form-group">
                                                                                        <label class="control-label col-md-3">T24 ACCOUNT NUMBER
                                                                                            <span class="required"> * </span>
                                                                                        </label>
                                                                                        <div class="col-md-4">
                                                                                            <input type="text" id="t24_acc_no_edit" name = "t24_acc_no"  required placeholder=">T24 ACCOUNT NUMBER "
                                                                                            class="form-control" />
                                                                                        </div>
                                                                                    </div>















                                                                        <!-- <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="staff_id">staff_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="staff_id_edit" name = "staff_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_name">customer_name</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_name_edit" name = "customer_name" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="amount_paid">amount_paid</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="amount_paid_edit" name = "amount_paid" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="date_paid">date_paid</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="date_paid_edit" name = "date_paid" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="payee">payee</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="payee_edit" name = "payee" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="liquidation_type">liquidation_type</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="liquidation_type_edit" name = "liquidation_type" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="documents">documents</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="documents_edit" name = "documents" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="product_type">product_type</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="product_type_edit" name = "product_type" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="amount_confirmed">amount_confirmed</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="amount_confirmed_edit" name = "amount_confirmed" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="ld">ld</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="ld_edit" name = "ld" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="liquidation_type_ops">liquidation_type_ops</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="liquidation_type_ops_edit" name = "liquidation_type_ops" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="t24_acc_no">t24_acc_no</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="t24_acc_no_edit" name = "t24_acc_no" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="approved_by_ops">approved_by_ops</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="approved_by_ops_edit" name = "approved_by_ops" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="approved_by_cad">approved_by_cad</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="approved_by_cad_edit" name = "approved_by_cad" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="status_ops">status_ops</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="status_ops_edit" name = "status_ops" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="status_cad">status_cad</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="status_cad_edit" name = "status_cad" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="comment">comment</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="comment_edit" name = "comment" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="other1">other1</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="other1_edit" name = "other1" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="other2">other2</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="other2_edit" name = "other2" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="other3">other3</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="other3_edit" name = "other3" type="text" class="form-control">
                                                                            </div>
                                                                        </div> -->
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
                                                        Liquidation
                                                    </h2>
                                                    <span>Displaying Liquidation</span> 
                                                   
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
                                                                                <th>Staff / RO</th>
                                                                                <th>Name of Customer</th>
                                                                                <th>Amount Paid</th>
                                                                                <th>Date Paid</th>
                                                                                  <th>OPERATIONS</th>
                                                                                <th>CAD</th>
                                                                                <th>Payee Name </th>
                                                                                <th>Liquidation Option</th>
                                                                                <th>documents</th>
                                                                                <th>Product Type</th>
                                                                                <th>Amount Comfirmed 
                                                                            By OPS</th>
                                                                                <th>LD </th>
                                                                                <th>LIQUI TYPE OPS</th>
                                                                                <th>T24 ACC NO</th>
                                                                                <th>Approved_by (OPS)</th>
                                                                                <th>Approved By (CAD)</th>
                                                                                <th>Status (OPS)</th>
                                                                                <th>status (CAD )</th>
                                                                                <th>Comments (OPS)</th>
                                                                                <th>lIQ Option (CAD )</th>
                                                                                <th>Comments (CAD)</th>
                                                                                <th>Payment Bank</th>
                                                                                 <th>Date Created</th>
                                                                                <th>Last Update</th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="fi6NeDrIyn5A9MzAXGEQ4rwSCNyadGZwB8qwsg9S">
                                                                        </thead>
                                                                        <tbody id="PostContent">
                                                                            @foreach($liquidations as $liquidation) 
                                                                            <tr class="item{!!$liquidation->
                                                                                id!!}" > 
                                                                                <td> {{ User::find($liquidation->staff_id)->display_name   }} </td>
                                                                                <td>{!!$liquidation->customer_name!!}</td>
                                                                                <td>{!!$liquidation->amount_paid!!}</td>
                                                                                <td>{!!$liquidation->date_paid!!}</td>
                                                                                  <td> @if ($liquidation->status_ops == 1)
                                                                                 <span style='color:green; font-weight: bold;'>Approved</span>
                                                                                 @elseif($liquidation->status_ops == 2)
                                                                                 <span style='color:red; font-weight: bold;'>Rejected</span>
                                                                                 @else
                                                                                 <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                                                                 @endif
                                                                             </td>
                                                                             <td> @if ($liquidation->status_cad == 1)
                                                                                 <span style='color:green; font-weight: bold;'>Approved</span>
                                                                                 @elseif($liquidation->status_cad == 2)
                                                                                 <span style='color:red; font-weight: bold;'>Rejected</span>
                                                                                 @else
                                                                                 <span style='color:darkorange; font-weight: bold;'>Pending</span>

                                                                                 @endif
                                                                             </td>
                                                                                <td>{!!$liquidation->payee!!}</td>
                                                                                <td>{!!$liquidation->liquidation_type!!}</td>
                                                                                <td>{!!$liquidation->documents!!}</td>
                                                                                <td>{!!$liquidation->product_type!!}</td>
                                                                                <td>{!!$liquidation->amount_confirmed!!}</td>
                                                                                <td>{!!$liquidation->ld!!}</td>
                                                                                <td>{!!$liquidation->liquidation_type_ops!!}</td>
                                                                                <td>{!!$liquidation->t24_acc_no!!}</td>
                                                                               
                                                                                <td> @if($liquidation->approved_by_ops != "") {{ User::find($liquidation->approved_by_ops)->display_name   }}  @endif</td>
                                                                                
                            
                                                                                <td> @if($liquidation->approved_by_cad != "") {{ User::find($liquidation->approved_by_cad)->display_name   }}  @endif </td>
                                                                                
                                                                                <td>{!!$liquidation->status_ops!!}</td>
                                                                                <td>{!!$liquidation->status_cad!!}</td>
                                                                                <td>{!!$liquidation->comment!!}</td>
                                                                                <td>{!!$liquidation->other1!!}</td>
                                                                                <td>{!!$liquidation->other2!!}</td>
                                                                                <td>{!!$liquidation->other3!!}</td>
                                                                                <td>{!!$liquidation->created_at!!}</td>
                                                                                <td>{!!$liquidation->updated_at->diffForHumans()!!} </td>
                                                                                <td>
                                                                                    <a href="{{ route('liquidation.show', $liquidation->id) }}"><button class="btn btn-warning btn-sm" data-id="{!!$liquidation->id!!}"> View </button></a>
                                                                                    <button class="edit-modal btn btn-info btn-sm" data-id="{!!$liquidation->id!!}" data-staff_id="{!!$liquidation->staff_id!!}" data-customer_name="{!!$liquidation->customer_name!!}" data-amount_paid="{!!$liquidation->amount_paid!!}" data-date_paid="{!!$liquidation->date_paid!!}" data-payee="{!!$liquidation->payee!!}" data-liquidation_type="{!!$liquidation->liquidation_type!!}" data-documents="{!!$liquidation->documents!!}" data-product_type="{!!$liquidation->product_type!!}" data-amount_confirmed="{!!$liquidation->amount_confirmed!!}" data-ld="{!!$liquidation->ld!!}" data-liquidation_type_ops="{!!$liquidation->liquidation_type_ops!!}" data-t24_acc_no="{!!$liquidation->t24_acc_no!!}" data-approved_by_ops="{!!$liquidation->approved_by_ops!!}" data-approved_by_cad="{!!$liquidation->approved_by_cad!!}" data-status_ops="{!!$liquidation->status_ops!!}" data-status_cad="{!!$liquidation->status_cad!!}" data-comment="{!!$liquidation->comment!!}" data-other1="{!!$liquidation->other1!!}" data-other2="{!!$liquidation->other2!!}" data-other3="{!!$liquidation->other3!!}" > Edit </button>
                                                                                    <button class="delete-modal btn btn-danger btn-sm" data-id="{!!$liquidation->id!!}"> Delete </button>
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
                                                        <p class="text-center"> Do you want to delete this Liquidation record </p>
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
            url: 'liquidation',
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
                    $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.staff_id + "</td> <td>" + data.customer_name + "</td> <td>" + data.amount_paid + "</td> <td>" + data.date_paid + "</td> <td>" + data.payee + "</td> <td>" + data.liquidation_type + "</td> <td>" + data.documents + "</td> <td>" + data.product_type + "</td> <td>" + data.amount_confirmed + "</td> <td>" + data.ld + "</td> <td>" + data.liquidation_type_ops + "</td> <td>" + data.t24_acc_no + "</td> <td>" + data.approved_by_ops + "</td> <td>" + data.approved_by_cad + "</td> <td>" + data.status_ops + "</td> <td>" + data.status_cad + "</td> <td>" + data.comment + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td> <td>" + data.other3 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff_id='" + data.staff_id + "'   data-customer_name='" + data.customer_name + "'   data-amount_paid='" + data.amount_paid + "'   data-date_paid='" + data.date_paid + "'   data-payee='" + data.payee + "'   data-liquidation_type='" + data.liquidation_type + "'   data-documents='" + data.documents + "'   data-product_type='" + data.product_type + "'   data-amount_confirmed='" + data.amount_confirmed + "'   data-ld='" + data.ld + "'   data-liquidation_type_ops='" + data.liquidation_type_ops + "'   data-t24_acc_no='" + data.t24_acc_no + "'   data-approved_by_ops='" + data.approved_by_ops + "'   data-approved_by_cad='" + data.approved_by_cad + "'   data-status_ops='" + data.status_ops + "'   data-status_cad='" + data.status_cad + "'   data-comment='" + data.comment + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   data-other3='" + data.other3 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");

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
                                                    $('#staff_id_edit').val($(this).data('staff_id'));
                                                    $('#customer_name_edit').val($(this).data('customer_name'));
                                                    $('#amount_paid_edit').val($(this).data('amount_paid'));
                                                    $('#date_paid_edit').val($(this).data('date_paid'));
                                                    $('#payee_edit').val($(this).data('payee'));
                                                    $('#liquidation_type_edit').val($(this).data('liquidation_type'));
                                                    $('#documents_edit').val($(this).data('documents'));
                                                    $('#product_type_edit').val($(this).data('product_type'));
                                                    $('#amount_confirmed_edit').val($(this).data('amount_confirmed'));
                                                    $('#ld_edit').val($(this).data('ld'));
                                                    $('#liquidation_type_ops_edit').val($(this).data('liquidation_type_ops'));
                                                    $('#t24_acc_no_edit').val($(this).data('t24_acc_no'));
                                                    $('#approved_by_ops_edit').val($(this).data('approved_by_ops'));
                                                    $('#approved_by_cad_edit').val($(this).data('approved_by_cad'));
                                                    $('#status_ops_edit').val($(this).data('status_ops'));
                                                    $('#status_cad_edit').val($(this).data('status_cad'));
                                                    $('#comment_edit').val($(this).data('comment'));
                                                    $('#other1_edit').val($(this).data('other1'));
                                                    $('#other2_edit').val($(this).data('other2'));
                                                    $('#other3_edit').val($(this).data('other3'));
                                                id = $('#id_edit').val();

        // $('#editModal').modal('show');
    });
    $('.modal-footer').on('click', '.edit', function () {
        $.ajax({
            type: 'PUT',
            url: 'liquidation/' + id,
            data: $("#edit_kc_form").serialize(),
            processData: false,
            contentType: false, 
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
                    $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'> <td>" + data.staff_id + "</td> <td>" + data.customer_name + "</td> <td>" + data.amount_paid + "</td> <td>" + data.date_paid + "</td> <td>" + data.payee + "</td> <td>" + data.liquidation_type + "</td> <td>" + data.documents + "</td> <td>" + data.product_type + "</td> <td>" + data.amount_confirmed + "</td> <td>" + data.ld + "</td> <td>" + data.liquidation_type_ops + "</td> <td>" + data.t24_acc_no + "</td> <td>" + data.approved_by_ops + "</td> <td>" + data.approved_by_cad + "</td> <td>" + data.status_ops + "</td> <td>" + data.status_cad + "</td> <td>" + data.comment + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td> <td>" + data.other3 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-staff_id='" + data.staff_id + "'   data-customer_name='" + data.customer_name + "'   data-amount_paid='" + data.amount_paid + "'   data-date_paid='" + data.date_paid + "'   data-payee='" + data.payee + "'   data-liquidation_type='" + data.liquidation_type + "'   data-documents='" + data.documents + "'   data-product_type='" + data.product_type + "'   data-amount_confirmed='" + data.amount_confirmed + "'   data-ld='" + data.ld + "'   data-liquidation_type_ops='" + data.liquidation_type_ops + "'   data-t24_acc_no='" + data.t24_acc_no + "'   data-approved_by_ops='" + data.approved_by_ops + "'   data-approved_by_cad='" + data.approved_by_cad + "'   data-status_ops='" + data.status_ops + "'   data-status_cad='" + data.status_cad + "'   data-comment='" + data.comment + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   data-other3='" + data.other3 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");


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
            url: 'liquidation/' + id,
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
                                      
                                        @endsection 
                                        <!-- Page body start -->
                                        
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