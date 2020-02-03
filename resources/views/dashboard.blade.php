@extends('layouts.app')

@section('wide_content')
<div class="header bg-default pt-5 pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="pt-2 mb-3 text-light">
                <h1 class="text-light">Welcome to Primera Internal Resource (IRS)</h1>
                <small>IRS is a one stop solution for employees where all banking operations will be conducted.</small>
            </div>
        </div>
    </div>
</div>
<div class="container mt--5">

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-default mb-0">Helpdesk</h5>
                          <span class="h2 font-weight-bold mb-0">{{ $stats->helpdesk }}</span>
                          <small class="d-block">Pending issues</small>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                            <i class="ni ni-active-40"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                        {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> --}}
                        <small><a href="{{ route('tickets.new') }}" class="text-nowrap font-weight-bold">Having issues? Raise a ticket <i class="fa fa-arrow-right"></i></a></small>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-default mb-0">Leave</h5>
                          <span class="h2 font-weight-bold mb-0">{{ $stats->leave }}</span>
                          <small class="d-block">Annual leave left</small>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="ni ni-chart-pie-35"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                        {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> --}}
                        <small><a href="{{ route('leave.create') }}" class="text-nowrap font-weight-bold">Apply for Leave <i class="fa fa-arrow-right"></i></a></small>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-default mb-0">Tokenization</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $stats->tokenization }}</span>
                          <small class="d-block">Records</small>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            <i class="ni ni-money-coins"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                        {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> --}}
                        <small><a href="{{ route('tokenize.card') }}" class="text-nowrap font-weight-bold">Tokenize card <i class="fa fa-arrow-right"></i></a></small>
                      </p>
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                  <div class="col-md-8">
                    <div class="card bg-gradient-default">
                        <div class="card-body">
                          <h3 class="card-title text-white">Work Tools</h3>

                          <div class="row shortcuts px-4">
                            <a href="/corporative" class="col-4 shortcut-item text-light">
                              <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                <i class="ni ni-calendar-grid-58"></i>
                              </span>
                              <small>Corporative</small>
                            </a>
                            <a href="{{ route('sms.index') }}" class="col-4 shortcut-item text-light">
                              <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                <i class="ni ni-email-83"></i>
                              </span>
                              <small>Customer Notification</small>
                            </a>
                            <a href="http://mybankstatement.net/" class="col-4 shortcut-item text-light">
                              <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                <i class="ni ni-credit-card"></i>
                              </span>
                              <small>Account Statement</small>
                            </a>
                            <a href="http://172.16.16.17:9095/t24dev/servlet/BrowserServlet" class="col-4 shortcut-item text-light">
                              <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                <i class="ni ni-books"></i>
                              </span>
                              <small>T-24</small>
                            </a>
                            <a href="/fast-track/" class="col-4 shortcut-item text-light">
                              <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                <i class="ni ni-pin-3"></i>
                              </span>
                              <small>Fast Track</small>
                            </a>
                            <a href="/snap" class="col-4 shortcut-item text-light">
                              <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                <i class="ni ni-basket"></i>
                              </span>
                              <small>SNAP</small>
                            </a>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="h3 mb-0"><i class="fa fa-birthday-cake"></i> Latest Staff</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush list my--3">
                                @foreach($latestStaff as $user)
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="{{ route('profile.show', ['user' => $user->username]) }}" class="avatar avatar-xs rounded-circle">
                                            <img alt="" src="{{ $user->avatar }}">
                                        </a>
                                    </div>
                                    <div class="col ml--2">
                                    {{ $user->ID }}
                                        <a href="{{ route('profile.show', ['user' => $user->username]) }}">{{ $user->name }}</a>
                                        @if($user->created_at)
                                        <small class="d-block text-muted">Joined {{ $user->created_at->diffForHumans() }}</small>
                                        @endif
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                  </div>
              </div>


              <div class="row">
                <div class="col-12 order-last order-lg-first">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="h3 mb-0"><i class="fa fa-question-circle"></i> About IRS</h5>
                        </div>
                        <div class="card-body">
                        <p>IRS is a one stop solution for employees where all banking operations will be conducted. </p>
                        <p>All the bank’s existing applications such as the core banking, communication, loan processing and disbursement will be assessed on IRS.</p>
                        <p>This solution also serves as a work flow tool that automates business processes related to Human Resources, Administration, IT, Finance, Communication, Documentation and Project Management activities.</p>
                        <p>Launched October 2018.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-4">
                </div>

                <div class="col-12 col-md-4">
                </div> --}}
              </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="h3 mb-0"><i class="fa fa-birthday-cake"></i> Upcoming Birthdays</h5>
                </div>
                <div class="card-body">
                    @if($birthdays->count() > 0)
                    <ul class="list-group list-group-flush list my--3">
                        @foreach($birthdays as $user)
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                <!-- Avatar -->
                                <a href="{{ route('profile.show', ['user' => $user->username]) }}" class="avatar rounded-circle">
                                    <img alt="" src="{{ $user->avatar }}">
                                </a>
                            </div>
                            <div class="col ml--2">
                                <h4 class="mb-0">
                                    <a href="{{ route('profile.show', ['user' => $user->username]) }}">{{ $user->name }}</a>
                                </h4>
                                <span class="text-success">●</span>
                                <small>{{ $user->dob }}</small><br/>
                                </div>
                                @if($user->isBirthday())
                                <span class="badge badge-warning text-wrap"><i class="fa fa-lg fa-birthday-cake"></i> We at Primera wish you a Happy Birthday! </span>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <p>No birthday record for today</p>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="h3 mb-0"><i class="fa fa-handshake"></i> Our Core Values</h5>
                </div>
                <div class="card-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner text-center pb-5">
                            <div class="carousel-item active">
                                <h4 class="mb-0">Team Work</h4>
                                <small>We foster an entrepreneurial culture that recognizes individual effort while encouraging teamwork</small>
                            </div>
                            <div class="carousel-item">
                                <h4 class="mb-0">Team Work</h4>
                                <small>We foster an entrepreneurial culture that recognizes individual effort while encouraging teamwork</small>
                            </div>
                            <div class="carousel-item">
                                <h4 class="mb-0">Team Work</h4>
                                <small>We foster an entrepreneurial culture that recognizes individual effort while encouraging teamwork</small>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
