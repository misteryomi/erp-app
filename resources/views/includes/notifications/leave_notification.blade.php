{{--
<li>
    <a href="javascript:;">
        <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span>{{ $notification->data['user']['name'] }} needs your
                                                        approval for
                                                        {{ $notification->data['post']['no_days'] }} day(s).
                                                    </span>
    </a>
</li>
--}}
<?php
use App\User;

?>
{{--get message for APPRAISALS--}}
@if(isset($notification->data['post']['manager_id']))

    <li>
        <a href="{{route('appraisal.create_start', ['id' =>$notification->data['post']['id']])}} ">

                                                    <span class="subject">

                                                    </span>
            <span class="message"> {{ $notification->data['message'] }}  </span>
            <div class="time" style="float: none !important; max-width: 100%!important; "> {{
        \Carbon\Carbon::createFromTimeStamp
        (strtotime(
        $notification->data['post']['created_at']))->diffForHumans() }}

            </div>

        </a>
    </li>
    @else


@if(auth::id() == $notification->data['post']['user_id'])

    <li>
        <a href="{{route('leave.show', ['id' =>$notification->data['post']['id']])}} ">

                                                    <span class="subject">

                                                    </span>
            <span class="message"> {{ $notification->data['message'] }}  </span>
            <div class="time" style="float: none !important; max-width: 100%!important; "> {{
        \Carbon\Carbon::createFromTimeStamp
        (strtotime(
        $notification->data['post']['created_at']))->diffForHumans() }}

            </div>

        </a>
    </li>
@else
    <li>
        <a href="{{route('leave.show', ['id' =>$notification->data['post']['id']])}} ">

                                                    <span class="subject">

                                                    </span>
            <span class="message">  {{ $notification->data['message'] }} </span>
            <div class="time" style="float: none !important; max-width: 100%!important; "> {{
        \Carbon\Carbon::createFromTimeStamp
        (strtotime(
        $notification->data['post']['created_at']))->diffForHumans() }}

            </div>

        </a>
    </li>
@endif

@endif