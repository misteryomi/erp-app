<style type="text/css">


</style>

<div id="item-nav" class="intern-box">
    <div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
        <ul>
            <li id="activity-personal-li"><a id="user-activity" href="{{route('appraisal.index')}}">Appraisal Dashboard<div class="no-count"> @if(count(auth()->user()->unreadnotifications) > 0)
                            <div class="badge badge-danger"> {{ count(auth()->user()->unreadnotifications) }}</div>

                        @endif
                    </div></a></li>
            <li id="xprofile-personal-li"><a id="user-xprofile" href="{{route('appraisal.manager')}}">Supervisor
                    Assessement
           </a></li>

            @if(Auth::user()->department == "HR")

                <li id="notifications-personal-li"><a id="user-groups" href="{{route('appraisal_year.index')
                }}">Appraisal Year (HR)</a> </li>
                <li id="messages-personal-li"><a id="user-messages" href="{{route('appraisal.kpi')}}">Enter Appraisal
                                                 KPI (HR) </a> </li>

            <li id="questions-personal-li"><a id="user-friends" href="{{route('appraisal.hr_view')}}">HR View All</a></li>

            <li id="questions-personal-li"><a id="user-xprofile" href="{{route('appraisal.reset')}}">SPOOL / RESET KPI
                    </a></li>

           @endif

<li id="messages-personal-li"><a id="user-messages" href="{{route('appraisal.supervisor_kpi')}}"> Edit KPI (Supervisor) </a> </li>

        </ul>

        {{--<hi> {{Auth::user()->email}}  </hi>
        <hi style="font-size: 49px;"> {{Auth::user()->ID}}  </hi>--}}
    </div>
</div>
