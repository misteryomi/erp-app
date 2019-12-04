<style type="text/css">


</style>

<div id="item-nav" class="intern-box">
   <div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
      <div class="row d-flex justify-content-center text-center">
         <div class="col-md-2">
             <div class="card">
                    <div class="card-body">
                            <a id="user-activity" href="{{route('leave.index')}}">Leave Dashboard<div class="no-count"> @if(count(auth()->user()->unreadnotifications) > 0)
                                    <div class="badge badge-danger"> {{ count(auth()->user()->unreadnotifications) }}</div>

                                @endif
                                </div>
                            </a>
                    </div>

             </div>
         </div>
         <div class="col-md-2">
            <div class="card">
            <div class="card-body">
                 <a id="user-xprofile" href="{{route('leave.create')}}">Apply For Leave</a>
            </div>
            </div>
         </div>
         <div  class="col-md-2">
            <div class="card">
            <div class="card-body">
                 <a id="user-friends" href="{{route('leave.approve')}}">Supervisor's Leave Records</a>
            </div>
            </div>
         </div>
           @if(Auth::user()->department == "HR")

         <div class="col-md-2">
            <div class="card">
            <div class="card-body">
             <a id="user-groups" href="{{route('leave.view')}}">All Leave Applications (HR) <span class="no-count">0</span></a>
            </div>
             </div>
         </div>
         <div class="col-md-2">
            <div class="card">
            <div class="card-body">
             <a id="user-messages" href="{{route('leave.admin')}}">HR Leave Audit Trail <span class="no-count">0</span></a>
            </div>
            </div>
         </div>
         @endif

      </ul>

    {{--  <hi> {{Auth::user()->email}}  </hi>
       <hi style="font-size: 49px;"> {{Auth::user()->ID}}  </hi>--}}
   </div>
</div>
