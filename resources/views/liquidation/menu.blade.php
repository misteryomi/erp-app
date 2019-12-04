@php
use App\Flutterwave_permission;
$user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();
@endphp






<style type="text/css">


</style>

<div id="item-nav" class="intern-box">
<div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
<ul>

<li id="xprofile-personal-li"><a id="user-xprofile" href="{{route('liquidation.index')}}">Dashbaord</a></li>




<li id="questions-personal-li"><a id="user-friends" href="{{route('liquidation.complete')}}"> Completed Liquidation </a></li>


@if(isset($user_permission))

@if ( ($user_permission->staff_permission === 'liquidation') && ($user_permission->staff_department === 'cad') )

<li id="questions-personal-li"><a id="user-friends" href="{{route('liquidation.reports')}}"> Reports Admin </a></li>
@endif



@if( ($user_permission->staff_department === 'it') || ($user_permission->staff_department === 'it') )

<li id="questions-personal-li"><a id="user-friends" href="{{route('liquidation.reports')}}"> Reports Admin </a></li>


<li id="questions-personal-li"><a id="user-friends" href="{{route('flutterwave_permission.index')}}">Staff Permission</a></li>


@endif
	
@endif
</ul>



</div>
</div>

<style type="text/css">
#featuredbox{

    display: none!important; 
    visibility: hidden!important;
}

.modal-backdrop{
	display: none !important; 
}
</style>
