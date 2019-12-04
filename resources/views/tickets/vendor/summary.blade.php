@extends('layouts.app')

@section('content')
    <div class="doc-content-section-inner">
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

      <div class="card">
        <div class="card-body py-3">
          <p class="card-title ml-n1">Recent tickets assigned to me</p>
        </div>
          @php
            $viewMoreRoute = route('tickets.list', ['assigned_to_me' => 1]);
          @endphp
          @include('tickets.vendor.tickets_list_template')
      </div>
    </div>
@endsection
