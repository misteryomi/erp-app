@extends('layouts.app')

@section('content')
      <div class="row">
          <div class="col-12 py-5">
            <h4>All tickets assigned to {{ $user->name }}</h4>
            <div class="text-right">
                <a href="{{ request()->fullUrlWithQuery(['export' => true]) }}" class="btn btn-primary">
                  <span class="mdi mdi-cloud-download mr-3"></span> Download Report
                </a>
            </div>
         </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-6 equel-grid">
          <div class="card">
            <div class="card-body text-gray">
              <div class="d-flex justify-content-between">
                <p><strong>{{ $stats['Pending'] }}</strong></p>
              </div>
              <p class="text-black">Pending</p>
              <div class="wrapper w-50 mt-4">
                <canvas height="45" id="stat-line_3"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6 equel-grid">
          <div class="card">
            <div class="card-body text-gray">
              <div class="d-flex justify-content-between">
                <p><strong>{{ $stats['Open'] }}</strong></p>
              </div>
              <p class="text-black">Open</p>
              <div class="wrapper w-50 mt-4">
                <canvas height="45" id="stat-line_4"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6 equel-grid">
          <div class="card">
            <div class="card-body text-gray">
              <div class="d-flex justify-content-between">
                <p><strong>{{ $stats['Answered'] }}</strong></p>
              </div>
              <p class="text-black">Answered</p>
              <div class="wrapper w-50 mt-4">
                <canvas height="45" id="stat-line_1"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6 equel-grid">
          <div class="card">
            <div class="card-body text-gray">
              <div class="d-flex justify-content-between">
                <p><strong>{{ $stats['Solved'] }}</strong></p>
              </div>
              <p class="text-black">Solved</p>
              <div class="wrapper w-50 mt-4">
                <canvas height="45" id="stat-line_2"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-body py-3">
          <p class="card-title ml-n1">Filter Results</p>
          @include('tickets.admin.users.filter_template')
        </div>
        @include('tickets.admin.tickets.tickets_list_template')
      </div>

@endsection
