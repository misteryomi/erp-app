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
        <ul class="navbar-nav align-items-center ">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="" src="{{ auth()->user()->avatar }}">
                </span>
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
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
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
