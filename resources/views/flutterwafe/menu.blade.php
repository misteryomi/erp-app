@php
use App\Flutterwave_permission;
use App\Flutterwafe;

$user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();

$flutterwaves_count = Flutterwafe::whereNotNull('life_token')->where('approval', '=', '0')->count();

@endphp

@if(isset($user_permission))






@else

<script type="text/javascript">
<!-- window.location.href = "http://irs.primeramfbank.com/app/tokenize/card"; -->
</script>

@php exit(); @endphp
@endif


<div id="item-nav" class="intern-box">
<div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
<ul>


@if(($user_permission->staff_department === 'recovery') || ($user_permission->staff_department === 'operations') || ($user_permission->staff_department === 'cad')  || ($user_permission->staff_department === 'cap') || ($user_permission->staff_permission === 'set_mandate') || ($user_permission->staff_department === 'it') )
@if ($user_permission->staff_permission === 'mandate_inputter')
<li id="xprofile-personal-li"><a id="user-xprofile" href="{{route('tokenize.index')}}">Pending Tokenization</a></li>
<li id="xprofile-personal-li"><a id="user-xprofile" href="{{route('tokenize.index-completed')}}"> Completed Tokenization</a></li>
@endif
@endif


@if( ($user_permission->staff_permission === 'set_mandate') || ($user_permission->staff_department === 'it') )

<li id="questions-personal-li"><a id="user-friends" href="{{route('card_mandate.index')}}"> Mandate </a></li>

@endif


@if( ($user_permission->staff_permission === 'finance') || ($user_permission->staff_department === 'it') || ($user_permission->staff_department === 'strategy') || ($user_permission->staff_department === 'operations') )

<li id="questions-personal-li"><a id="user-friends" href="{{route('flutterwavetransaction.index')}}"> Collections </a></li>

<li id="questions-personal-li"><a id="user-friends" href="{{route('flutterwavetransaction.token_payment')}}"> Income </a></li>

@if ($user_permission->staff_permission === 'mandate_authorizer')
<li id="questions-personal-li"><a id="user-friends" href="{{route('tokenize.authorizer')}}"> Authorizer (<strong style="color: red">{{ $flutterwaves_count }}</strong>) </a></li>
@endif
<li id="questions-personal-li"><a id="user-friends" href="{{route('card_mandate.reports')}}"> Report </a></li>

<li id="questions-personal-li"><a id="user-friends" href="{{route('card_mandate.reports_analysis')}}">Analysis </a></li>


<li id="questions-personal-li"><a id="user"  target="_blank" href="{{route('tokenize.card')}}">Initiate </a></li>
@endif
@if( ($user_permission->staff_department === 'recovery') || ($user_permission->staff_department === 'it') )




@endif
@if( ($user_permission->staff_department === 'it') || ($user_permission->staff_department === 'it') )
<li id="questions-personal-li"><a id="user-friends" href="{{route('flutterwave_permission.index')}}">Staff Permission</a></li>

<li id="questions-personal-li"><a id="user-friends" href="{{route('flutterwave_sector.index')}}">Sectors</a></li>

@endif
</ul>



</div>
</div>



@php
function ordinal($number) {
$ends = array('th','st','nd','rd','th','th','th','th','th','th');
if ((($number % 100) >= 11) && (($number%100) <= 13))
return $number. 'th';
else
return $number. $ends[$number % 10];
}
//Example Usage
//echo ordinal(100);

@endphp



<script src="{{ asset('assets/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}" type="text/javascript"></script>
<!-- <script src="{{ asset('assets/pages/scripts/charts-amcharts.min.js') }}" type="text/javascript"></script>
 -->



<style type="text/css">

	#content-container a {
    color: #3e0e0e!important;
}

.tabs-left.nav-tabs {
    border-right: 1px solid #420d0d !important;
}
.tabs-left.nav-tabs, .tabs-right.nav-tabs {
    /* border-bottom: 0; */
}
.nav-tabs {
    border-bottom: 13px solid #580707 !important;
}
.nav {
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
}
.nav-pills, .nav-tabs {
    margin-bottom: 10px;
}

.nav-tabs {
    border-bottom: 1px solid #580707 !important;
}
.nav {
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
}
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
}


.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #555;
    background-color: #fff;
    border: 1px solid #580707 !important;
    border-bottom-color: transparent;
    cursor: default;
}
.tabs-left.nav-tabs>li>a {
    display: block;
    margin-right: -1px;
}
.tabs-left.nav-tabs>li>a, .tabs-right.nav-tabs>li>a {
    margin-right: 0;
    margin-bottom: 7px;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #555;
    background-color: #fff;
    border: 1px solid #580707 !important;
    border-bottom-color: transparent;
    cursor: default;
}
.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.42857;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav-pills>li>a, .nav-tabs>li>a {
    font-size: 14px;
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    -ms-border-radius: 4px 4px 0 0;
    -o-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
}
</style>




<style type="text/css">
	.daterangepicker {
  position: absolute !important;
  color: inherit;
  background-color: #fff;
  border-radius: 4px;
  border: 1px solid #ddd;
  width: 578px !important;
  max-width: none;
  padding: 0;
  margin-top: 7px;
  top: 100px;
  left: 20px;
  z-index: 3001;
  display: none;
  font-family: arial;
  font-size: 15px;
  line-height: 1em;
}



.daterangepicker:before, .daterangepicker:after {
  position: absolute;
  display: inline-block;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  content: '';
}

.daterangepicker:before {
  top: -7px;
  border-right: 7px solid transparent;
  border-left: 7px solid transparent;
  border-bottom: 7px solid #ccc;
}

.daterangepicker:after {
  top: -6px;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #fff;
  border-left: 6px solid transparent;
}

.daterangepicker.opensleft:before {
  right: 9px;
}

.daterangepicker.opensleft:after {
  right: 10px;
}

.daterangepicker.openscenter:before {
  left: 0;
  right: 0;
  width: 0;
  margin-left: auto;
  margin-right: auto;
}

.daterangepicker.openscenter:after {
  left: 0;
  right: 0;
  width: 0;
  margin-left: auto;
  margin-right: auto;
}

.daterangepicker.opensright:before {
  left: 9px;
}

.daterangepicker.opensright:after {
  left: 10px;
}

.daterangepicker.drop-up {
  margin-top: -7px;
}

.show-calendar{
display: inline-flex !important;

}
.range_inputs{
	display: none;
}

.daterangepicker.drop-up:before {
  top: initial;
  bottom: -7px;
  border-bottom: initial;
  border-top: 7px solid #ccc;
}

.daterangepicker.drop-up:after {
  top: initial;
  bottom: -6px;
  border-bottom: initial;
  border-top: 6px solid #fff;
}

.daterangepicker.single .daterangepicker .ranges, .daterangepicker.single .drp-calendar {
  float: none;
}

.daterangepicker.single .drp-selected {
  display: none;
}

.daterangepicker.show-calendar .drp-calendar {
  display: block;
}

.daterangepicker.show-calendar .drp-buttons {
  display: block;
}

.daterangepicker.auto-apply .drp-buttons {
  display: none;
}

.daterangepicker .drp-calendar {
  display: none;
  max-width: 270px;
}

.daterangepicker .drp-calendar.left {
  padding: 8px 0 8px 8px;
}

.daterangepicker .drp-calendar.right {
  padding: 8px;
}

.daterangepicker .drp-calendar.single .calendar-table {
  border: none;
}

.daterangepicker .calendar-table .next span, .daterangepicker .calendar-table .prev span {
  color: #fff;
  border: solid black;
  border-width: 0 2px 2px 0;
  border-radius: 0;
  display: inline-block !important;
  padding: 3px;
}

.daterangepicker .calendar-table .next span {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.daterangepicker .calendar-table .prev span {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}

.daterangepicker .calendar-table th, .daterangepicker .calendar-table td {
  white-space: nowrap;
  text-align: center;
  vertical-align: middle;
  min-width: 32px;
  width: 32px;
  height: 24px;
  line-height: 24px;
  font-size: 12px;
  border-radius: 4px;
  border: 1px solid transparent;
  white-space: nowrap;
  cursor: pointer;
}

.daterangepicker .calendar-table {
  border: 1px solid #fff;
  border-radius: 4px;
  background-color: #fff;
}

.daterangepicker .calendar-table table {
  width: 100%;
  margin: 0;
  border-spacing: 0;
  border-collapse: collapse;
}

.daterangepicker td.available:hover, .daterangepicker th.available:hover {
  background-color: #eee;
  border-color: transparent;
  color: inherit;
}

.daterangepicker td.week, .daterangepicker th.week {
  font-size: 80%;
  color: #ccc;
}

.daterangepicker td.off, .daterangepicker td.off.in-range, .daterangepicker td.off.start-date, .daterangepicker td.off.end-date {
  background-color: #fff;
  border-color: transparent;
  color: #999;
}

.daterangepicker td.in-range {
  background-color: #ebf4f8;
  border-color: transparent;
  color: #000;
  border-radius: 0;
}

.daterangepicker td.start-date {
  border-radius: 4px 0 0 4px;
}

.daterangepicker td.end-date {
  border-radius: 0 4px 4px 0;
}

.daterangepicker td.start-date.end-date {
  border-radius: 4px;
}

.daterangepicker td.active, .daterangepicker td.active:hover {
  background-color: #357ebd;
  border-color: transparent;
  color: #fff;
}

.daterangepicker th.month {
  width: auto;
}

.daterangepicker td.disabled, .daterangepicker option.disabled {
  color: #999;
  cursor: not-allowed;
  text-decoration: line-through;
}

.daterangepicker select.monthselect, .daterangepicker select.yearselect {
  font-size: 12px;
  padding: 1px;
  height: auto;
  margin: 0;
  cursor: default;
}

.daterangepicker select.monthselect {
  margin-right: 2%;
  width: 56%;
}

.daterangepicker select.yearselect {
  width: 40%;
}

.daterangepicker select.hourselect, .daterangepicker select.minuteselect, .daterangepicker select.secondselect, .daterangepicker select.ampmselect {
  width: 50px;
  margin: 0 auto;
  background: #eee;
  border: 1px solid #eee;
  padding: 2px;
  outline: 0;
  font-size: 12px;
}

.daterangepicker .calendar-time {
  text-align: center;
  margin: 4px auto 0 auto;
  line-height: 30px;
  position: relative;
}

.daterangepicker .calendar-time select.disabled {
  color: #ccc;
  cursor: not-allowed;
}

.daterangepicker .drp-buttons {
  clear: both;
  text-align: right;
  padding: 8px;
  border-top: 1px solid #ddd;
  display: none;
  line-height: 12px;
  vertical-align: middle;
}

.daterangepicker .drp-selected {
  display: inline-block;
  font-size: 12px;
  padding-right: 8px;
}

.daterangepicker .drp-buttons .btn {
  margin-left: 8px;
  font-size: 12px;
  font-weight: bold;
  padding: 4px 8px;
}

.daterangepicker.show-ranges .drp-calendar.left {
  border-left: 1px solid #ddd;
}

.daterangepicker .ranges {
  float: none;
  text-align: left;
  margin: 0;
}

.daterangepicker.show-calendar .ranges {
  margin-top: 8px;
}

.daterangepicker .ranges ul {
  list-style: none;
  margin: 0 auto;
  padding: 0;
  width: 100%;
}

.daterangepicker .ranges li {
  font-size: 12px;
  padding: 8px 12px;
  cursor: pointer;
}

.daterangepicker .ranges li:hover {
  background-color: #eee;
}

.daterangepicker .ranges li.active {
  background-color: #08c;
  color: #fff;
}

/*  Larger Screen Styling */
@media (min-width: 564px) {
  .daterangepicker {
    width: auto; }
    .daterangepicker .ranges ul {
      width: 140px; }
    .daterangepicker.single .ranges ul {
      width: 100%; }
    .daterangepicker.single .drp-calendar.left {
      clear: none; }
    .daterangepicker.single.ltr .ranges, .daterangepicker.single.ltr .drp-calendar {
      float: left; }
    .daterangepicker.single.rtl .ranges, .daterangepicker.single.rtl .drp-calendar {
      float: right; }
    .daterangepicker.ltr {
      direction: ltr;
      text-align: left; }
      .daterangepicker.ltr .drp-calendar.left {
        clear: left;
        margin-right: 0; }
        .daterangepicker.ltr .drp-calendar.left .calendar-table {
          border-right: none;
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
      .daterangepicker.ltr .drp-calendar.right {
        margin-left: 0; }
        .daterangepicker.ltr .drp-calendar.right .calendar-table {
          border-left: none;
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
      .daterangepicker.ltr .drp-calendar.left .calendar-table {
        padding-right: 8px; }
      .daterangepicker.ltr .ranges, .daterangepicker.ltr .drp-calendar {
        float: left; }
    .daterangepicker.rtl {
      direction: rtl;
      text-align: right; }
      .daterangepicker.rtl .drp-calendar.left {
        clear: right;
        margin-left: 0; }
        .daterangepicker.rtl .drp-calendar.left .calendar-table {
          border-left: none;
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
      .daterangepicker.rtl .drp-calendar.right {
        margin-right: 0; }
        .daterangepicker.rtl .drp-calendar.right .calendar-table {
          border-right: none;
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
      .daterangepicker.rtl .drp-calendar.left .calendar-table {
        padding-left: 12px; }
      .daterangepicker.rtl .ranges, .daterangepicker.rtl .drp-calendar {
        text-align: right;
        float: right; } }
@media (min-width: 730px) {
  .daterangepicker .ranges {
    width: auto; }
  .daterangepicker.ltr .ranges {
    float: left; }
  .daterangepicker.rtl .ranges {
    float: right; }
  .daterangepicker .drp-calendar.left {
    clear: none !important; } }




    body.woffice-2-5 input, body.woffice-2-5 select, body.woffice-2-5 textarea {
    border: 1px solid rgba(183,185,196,1)!important;
    border-radius: 4px;
    margin-top: 15px;
    padding: 15px;
    transition: border .1s ease-out;
}


#content-container div.item-list-tabs ul li a, #content-container div.item-list-tabs-project ul li a, #content-container div.item-list-tabs-wiki ul li a {
    padding: 4px 5px !important;
    /* font-weight: 700; */
    display: block;
    text-transform: uppercase;
    border-left: 1px solid;
    text-align: center;
    background: #fff;
}
#content-container div.item-list-tabs ul li a, #content-container div.item-list-tabs-project ul li a, #content-container div.item-list-tabs-project ul span, #content-container div.item-list-tabs-wiki ul li a, #content-container div.item-list-tabs-wiki ul span, div.item-list-tabs ul li span {
    font-size: 1em !important;
}
</style>


<style type="text/css">
#featuredbox{

    display: none!important;
    visibility: hidden!important;
}

.modal-backdrop{
  display: none !important;
}
</style>


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
