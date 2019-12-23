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
        <div class="col-12 col-md-4 order-last order-lg-first">
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
        <div class="col-12 col-md-4">
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
        <div class="col-md-4 order-first order-lg-last">
            <div class="card">
                <div class="card-header">
                    <h5 class="h3 mb-0"><i class="fa fa-birthday-cake"></i> Upcoming Birthdays</h5>
                </div>
                <div class="card-body">
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
                                <span class="badge badge-warning"><i class="fa fa-lg fa-birthday-cake"></i> We at Primera wish you a Happy Birthday! </span>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
