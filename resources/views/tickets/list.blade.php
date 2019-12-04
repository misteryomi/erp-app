@extends('layouts.app')

@section('content')
    <div class="doc-content-section-inner">
        <h1>{{ $assignedToMe ? 'Tickets Assigned To Me' : 'My Tickets'}}</h1>
      <div class="card">
          <div class="card-body py-3">
              <p class="card-title ml-n1">Filter tickets</p>
              @include('tickets.tickets_filter_template')
              <hr/>
          </div>
          @include('tickets.tickets_list_template')
      </div>
    </div>
@endsection

@include('tickets.tickets_scripts_template')
