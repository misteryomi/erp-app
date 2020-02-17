    <nav class="navbar navbar-expand navbar-light bg-white border-bottom" id="navbar-main">
      <div class="container-fluid">
        <!-- Sidenav toggler -->
        <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
        <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
        </div>
        </div>
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-img" alt="..." width="100">
        </a>

        <!-- User -->
        @php $count = auth()->user()->notifications->where('read_at', NULL)->count() @endphp
        <ul class="navbar-nav align-items-center ">
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                    @if($count)
                    <span class="badge bg-red text-white">{{$count}}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                  <!-- Dropdown header -->
                  <div class="px-3 py-3">
                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">{{ $count }}</strong> unread notifications.</h6>
                  </div>
                  <!-- List group -->
                  @php $notifications = auth()->user()->notifications()->latest()->take(5)->get() @endphp
                  @include('notifications.list_template')
                  <!-- View all -->
                  <a href="{{ route('notifications') }}" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                </div>
              </li>
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                  <img alt="" src="{{ auth()->user()->avatar }}" class="avatar avatar-sm rounded-circle">
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ ucfirst(auth()->user()->username) }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              @if(Auth::guard('vendor')->check())
              <a href="{{ route('tickets.vendor.logout') }}" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
              @else
              <a href="{{ route('profile.show', ['user' => auth()->user()->username]) }}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="{{ route('profile.edit', ['user' => auth()->user()->username]) }}" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Profile Settings</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
              @endif
            </div>
          </li>
        </ul>
      </div>
    </nav>
