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
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-body py-3">
          <p class="card-title ml-n1">My Recently created tickets</p>
        </div>
          @php $viewMoreRoute = route('tickets.list'); @endphp
          @include('tickets.tickets_list_template')
      </div>

      @if(auth()->user()->isVendor)
      <div class="card">
        <div class="card-body py-3">
          <p class="card-title ml-n1">Recent tickets assigned to me</p>
        </div>
          @php
            $tickets = $assignedTickets;
            $viewMoreRoute = route('tickets.list', ['assigned_to_me' => 1]);
          @endphp
          @include('tickets.tickets_list_template')
      </div>
      @endif
    </div>
@endsection
